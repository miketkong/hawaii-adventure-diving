# Spec: Shark Tour LP — Section Engagement Tracking

| Field       | Value                          |
|-------------|-------------------------------|
| Status      | Proposed                      |
| Scope       | Shark Tour landing page        |
| Depends on  | GTM container (already live), GA4 property (already live) |
| Out of scope | Scroll depth tracking (handled separately via GTM native trigger) |

---

## Status

- [x] Spec written and approved
- [x] `section-engagement.js` written — `assets/js/cro/section-engagement.js`
- [x] `<section id="">` attributes added to all Shark Tour LP sections
- [x] Console logging verified — events firing as expected
- [x] Script loaded on the live site
- [x] GTM configured — dataLayer variables, triggers, and GA4 tags created
- [x] GA4 custom dimensions and metrics registered
- [x] GTM Preview verified — tags firing with correct values
- [x] GTM container published
- [x] GA4 data confirmed flowing in Reports → Engagement → Events

---

## Objective

The Shark Tour landing page is long, with many sections. The primary goal of this tracking is to determine which sections users are actually seeing and which they are scrolling past — so that sections can be confidently cut, condensed, or repositioned based on real behavior rather than assumption.

The core decision this data supports: **can a section be removed or moved without hurting conversion?**

| Section reach | Seen by converters? | Action |
|---|---|---|
| Low | No | Cut or move — it's not contributing |
| Low | Yes | Move it higher — it matters but users aren't reaching it |
| High | No | Investigate — users see it but it may not be helping |
| High | Yes | Keep — it's doing work |

Specifically, this enables answering questions like:
- Are users reaching the testimonials section, or scrolling past it? If converters rarely see it, it can be cut.
- What percentage of converting users ever viewed the FAQ section? If most didn't, the FAQ can be moved to a dedicated page.
- Which sections have high reach but low dwell time — users glancing and moving on?

---

## Tracking Strategy

Two complementary measurements per section, per session:

1. **Section reach** (primary) — did a user view this section at all? A view requires the vertical center of the section to remain in the viewport for at least 3 seconds. In GA4 this is queryable as: "what % of sessions included a `section_viewed` event for this section?" Segmented by converters vs. non-converters, this directly answers the page audit questions above.

2. **Cumulative dwell time** (secondary) — total time the user spent with the section across the whole session, reported via milestone events. This adds context: a section with high reach but very low dwell suggests users are landing on it and immediately scrolling away, which is a different problem than users not reaching it at all.

Both measurements are correlated to conversions in GA4 via the standard session/user dimensions.

---

## Section Identification

Sections are identified by targeting all `<section>` elements that have an `id` attribute. The `id` value becomes the section identifier in all events.

**Required markup on the Shark Tour LP:**

Each tracked section must have a unique, descriptive `id`:

```html
<section id="rates-and-packages">...</section>
<section id="what-to-expect">...</section>
<section id="faq">...</section>
<!-- etc. -->
```

The JS discovers these automatically at runtime — no hardcoded section list is required. Sections without an `id` are ignored.

---

## Viewport Detection Logic

A section is considered "in view" when the **vertical midpoint of the section** is within the browser viewport.

This is implemented via `IntersectionObserver` with a threshold of `0` (fires whenever any part of the section enters or leaves the viewport). On each callback, the midpoint is calculated dynamically from the live bounding rect provided by the observer:

- Midpoint = `entry.boundingClientRect.top + (entry.boundingClientRect.height / 2)`
- "In view" when: `midpoint >= 0` AND `midpoint <= entry.rootBounds.height`

Because the bounding rect is read fresh on every callback, this approach is naturally correct for sections with dynamic height — such as an accordion FAQ where opening an item changes the section's height. No pre-calculated threshold is stored, so there is nothing to go stale.

**Why midpoint, not top-of-section:**
Triggering on the section top would fire prematurely as a user scrolls past. The midpoint rule ensures the user has meaningfully scrolled into the section before any timing begins.

---

## Minimum Dwell Time (View Qualifier)

To filter out sections the user merely scrolled through without pausing, a section must have its vertical midpoint in the viewport for at least **3 seconds** before it is counted as viewed or before any dwell time is recorded.

Behavior:
- When a section enters "in view" state, a timer starts
- If the section leaves view before 3 seconds, the timer resets — no view or dwell time is recorded
- If 3 seconds is reached, a `section_viewed` event fires and the cumulative dwell timer begins **at 3 seconds** (the qualifying time counts toward total dwell)

The minimum is configurable in the JS as a constant: `MIN_DWELL_MS = 3000`

---

## Engagement Timer & Cumulative Dwell Time

Dwell time is tracked **cumulatively per section per session.** This approach answers the question "how much total time did this user spend with this section?" regardless of how many times they scrolled back to it.

**How it works:**
- When a section is viewed (3s minimum met), an interval timer accumulates elapsed milliseconds against a running `cumulativeMs` for that section
- While the section is actively in view, the timer checks cumulative time in real-time and fires a milestone event the moment it crosses 10s, 30s, or 60s — the user does not need to leave the section for a milestone to fire
- When the section leaves view, the elapsed time for that visit is banked into `cumulativeMs` — no milestone check happens on exit
- Milestones fire **at most once per section per session** (a milestone that has already fired will not re-fire on a subsequent visit)

**Why real-time milestone firing, not on-exit:**
Checking milestones on exit is unreliable — if a user spends 45 seconds on a section and then navigates away from the page, the exit event may never fire cleanly, particularly on mobile. Firing milestones as they are crossed guarantees delivery regardless of how the session ends.

**Why cumulative, not per-visit reset:**
Per-visit resets would mean a user who spends 8s, scrolls away, then returns for 5s never fires the 10-second milestone — a false negative. Cumulative time is more honest and aligns with the goal of understanding total engagement.

**Revisit visibility is preserved:** `section_visit_count` is sent as a parameter on every event, so revisit frequency remains queryable in GA4 if needed.

---

## GA4 Events

### Event: `section_viewed`

Fires once per visit to a section when the 3s minimum dwell is reached. Each section tracks independently — a single page session can produce multiple `section_viewed` events, one per section per qualifying visit. Increments `section_visit_count` for that section.

| Parameter     | Type    | Example              | Notes                              |
|---------------|---------|----------------------|------------------------------------|
| `section_id`  | string  | `rates-and-packages` | From the `<section id="">` value   |
| `page_path`   | string  | `/shark-tour`        | Auto-captured by GA4               |
| `section_visit_count` | integer | `2`                  | Cumulative visits to section this session |

---

### Event: `section_engaged`

Fires when cumulative dwell time for a section crosses a milestone threshold. Each milestone fires at most once per section per session.

| Parameter        | Type    | Example              | Notes                                      |
|------------------|---------|----------------------|--------------------------------------------|
| `section_id`     | string  | `rates-and-packages` |                                            |
| `page_path`      | string  | `/shark-tour`        |                                            |
| `dwell_milestone`| integer | `10`                 | Seconds: `10`, `30`, or `60`               |
| `section_visit_count`    | integer | `2`                  | How many visits contributed to this milestone |

**Milestones:** 10s, 30s, 60s

The 10s milestone indicates the user paused to consider the section. The 30s milestone indicates meaningful engagement. The 60s milestone indicates a user who read the section thoroughly. A `section_viewed` event at 3s serves as the low-bar "definitely saw this" signal.

---

## Multiple Sections in Viewport Simultaneously

The vertical-midpoint rule means two sections' midpoints being simultaneously in the viewport would require the viewport to be taller than the combined height of both sections. On mobile this is nearly impossible for full-width content sections. On desktop it can occur with short sections (e.g., a narrow CTA band between two content blocks).

**This is not a problem.** The tracker runs fully independent timers per section. If two sections are genuinely in view at the same time, both timers run concurrently and both accumulate time — which accurately reflects the user's experience. No special handling is required.

**Mobile note:** Smaller viewport heights on mobile actually make simultaneous multi-section detection less likely, not more. Mobile users are the primary target audience for this tracking and the approach is well-suited to their behavior.

---

## Mobile Considerations

- `IntersectionObserver` is used instead of scroll event listeners. This is significantly more battery- and CPU-efficient, which matters on mobile devices.
- Fast touch-swipe scrolling is naturally handled by the 3-second minimum — a user swiping quickly through the page will not trigger a view or any dwell time for sections they didn't pause on.
- Section midpoint detection works identically on mobile; no platform-specific logic is needed.
- Midpoint is calculated from `entry.rootBounds.height` provided by the IntersectionObserver callback, which reflects the actual visible viewport height on mobile browsers (accounts for the address bar).

---

## GTM Configuration

The JS pushes events to `window.dataLayer` using the standard format:

```js
window.dataLayer.push({
  event: 'section_viewed',        // or 'section_engaged'
  section_id: 'rates-and-packages',
  dwell_milestone: 10,            // section_engaged only
  section_visit_count: 2
});
```

### Step 1: Create DataLayer Variables

In GTM → Variables → New (×3):

| Variable Name | Variable Type | DataLayer Variable Name |
|---|---|---|
| `dlv - section_id` | Data Layer Variable | `section_id` |
| `dlv - dwell_milestone` | Data Layer Variable | `dwell_milestone` |
| `dlv - section_visit_count` | Data Layer Variable | `section_visit_count` |

### Step 2: Create Triggers

In GTM → Triggers → New (×2), both using type **Custom Event**:

| Trigger Name | Event Name |
|---|---|
| `Custom Event - section_viewed` | `section_viewed` |
| `Custom Event - section_engaged` | `section_engaged` |

### Step 3: Create GA4 Event Tags

In GTM → Tags → New (×2), both using tag type **Google Analytics: GA4 Event**:

**Tag 1 — section_viewed:**
- Event name: `section_viewed`
- Event parameters:
  - `section_id` → `{{dlv - section_id}}`
  - `section_visit_count` → `{{dlv - section_visit_count}}`
- Trigger: `Custom Event - section_viewed`

**Tag 2 — section_engaged:**
- Event name: `section_engaged`
- Event parameters:
  - `section_id` → `{{dlv - section_id}}`
  - `dwell_milestone` → `{{dlv - dwell_milestone}}`
  - `section_visit_count` → `{{dlv - section_visit_count}}`
- Trigger: `Custom Event - section_engaged`

### Step 4: Register Custom Dimensions & Metrics in GA4

In GA4 → Admin → Custom Definitions:

| Name | Type | Scope | Parameter |
|---|---|---|---|
| Section ID | Custom Dimension | Event | `section_id` |
| Dwell Milestone | Custom Dimension | Event | `dwell_milestone` |
| Section Visit Count | Custom Metric | Event | `section_visit_count` |

### Step 5: Test Before Publishing

Use GTM Preview mode to verify tags fire with correct values before publishing. Confirm `section_viewed` and `section_engaged` appear in the tag summary as you scroll the Shark Tour LP.

---

## Open Questions

- [x] **Conversion event:** `purchase` — fires on completed bookings via FareHarbor. Use this event to segment converters vs. non-converters in GA4 Explorations.

---

## Out of Scope

- Scroll depth tracking (handled via GTM native Scroll Depth trigger)
- Heatmap or click tracking within sections
- Cross-page section tracking (this spec covers the Shark Tour LP only; other LPs to be added in a future iteration)
- Server-side or session replay tooling
