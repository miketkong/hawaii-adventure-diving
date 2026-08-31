# Spec: Add Scroll Depth Thresholds in GTM

| Field       | Value                          |
|-------------|-------------------------------|
| Status      | Approved                      |
| Scope       | All pages                     |
| Depends on  | GTM container (already live), GA4 property (already live), existing 90% scroll depth trigger |

---

## Objective

GA4 currently only receives a `scroll` event when users reach 90% of a page. Adding 25%, 50%, and 75% thresholds gives a complete picture of how far users are scrolling, which is useful for identifying where users are dropping off on long pages like the Shark Tour LP.

---

## Implementation

GA4's built-in `scroll` event uses a `percent_scrolled` parameter to record the depth. The existing GTM setup fires this at 90%. The fix is to update the existing scroll depth trigger in GTM to include additional thresholds — no new tags are needed.

### Step 1: Update the Scroll Depth Trigger

In GTM → Triggers → find the existing scroll depth trigger (likely named something like `Scroll Depth` or `Trigger - Scroll Depth`):

- Change trigger type to **Scroll Depth** (if not already)
- Under **Vertical Scroll Depths**, select **Percentages**
- Set percentages to: `25, 50, 75, 90`
- Enable **This trigger fires on: All Pages** (or match existing page conditions)
- Save

### Step 2: Verify the Existing GA4 Tag Captures percent_scrolled

Check the GA4 Event tag that fires on the scroll depth trigger. GA4's built-in scroll event automatically includes `percent_scrolled` as a parameter — no manual parameter mapping is needed as long as the tag type is **Google Analytics: GA4 Event** with event name `scroll`.

If the tag is sending a custom event name instead of `scroll`, add an event parameter manually:
- Parameter name: `percent_scrolled`
- Value: `{{Scroll Depth Threshold}}` (built-in GTM variable)

### Step 3: Register percent_scrolled as a Custom Dimension in GA4

In GA4 → Admin → Custom Definitions → Custom Dimensions → New:

| Field | Value |
|---|---|
| Dimension name | Percent Scrolled |
| Scope | Event |
| Event parameter | `percent_scrolled` |

This makes the parameter queryable in GA4 Explorations.

### Step 4: Test in GTM Preview

In GTM Preview mode, scroll down a page and confirm `scroll` events fire at 25%, 50%, 75%, and 90% with the correct `percent_scrolled` value in the tag details.

### Step 5: Publish GTM Container

Publish the updated GTM container. Data for the new thresholds will appear in GA4 going forward — historical data will only show 90%.

---

## Viewing the Data in GA4

In GA4 → **Explore** → Blank exploration:

- Dimensions: `Percent scrolled`
- Metrics: `Event count`
- Filter: `Event name = scroll`

This shows a breakdown of how many sessions reached each scroll depth threshold.
