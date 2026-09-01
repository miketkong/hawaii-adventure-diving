# Spec: Code the new "How close?" Section for the Shark Tour Landing Page

| Field       | Value                         |
|-------------|-------------------------------|
| Status      | Approved                      |
| Scope       | Shark Tour LP                 |
| Depends on  | GTM container (already live), GA4 property (already live), existing 90% scroll depth trigger |

---

## Objective

Create a fully responsive, production-ready landing page section based on the approved design mockup located at:

## Source / Reference Files
`dev/specs/01_proposed/cro-code-how-close-section/assets/how-close-section-mockup-good.png`

The mockup contains the desktop design on the left and mobile design on the right.
The supplied mockup is the approved visual target. Do not redesign the section or generate alternative layouts.

### Target template
`shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.njk`

Insert the section at:
`<!-- [INSERT "HOW CLOSE" SECTION CODE HERE] -->`

### Existing implementation references
Use existing sections on this landing page as references for established markup,
Bootstrap usage, containers, typography, spacing, responsive patterns, and custom classes.
- Main Bootstrap CSS File: `assets/vendors/css/bootstrap.css`
- Bootstrap Theme CSS File: `assets/css/main.css`
- My CSS customizations: `assets/css/custom-styles-v1.1.2.css`

---

## Implementation
The implementation should reproduce the layout, hierarchy, spacing, and responsive behavior shown in the mockup as closely as practical while fitting cleanly into the existing Eleventy/Bootstrap site.

Use existing Bootstrap utilities, existing project components, and existing custom CSS wherever possible. Create new styles ONLY when necessary to accurately implement the design.

Look to existing code on the landing page as reference for how to code the new section. Then create the code for the section into the file at:
shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.njk

The section must:

- integrate cleanly with the existing landing page
- behave correctly across desktop, tablet, and mobile breakpoints
- preserve the visual hierarchy and intent of the approved mockup
- avoid unnecessary changes to unrelated code or styles
- use semantic, maintainable HTML and clear class naming
- Avoid editing any existing css or js files. If you need to create new styles or js for the section, put them in new, temporary css and/or js files in their respective folders in the assets folder
- identify any new styles created and explain why they were needed in the "##Results" section at the bottom of this document.


## Responsive Requirements
The desktop and mobile mockups use the same core content. Differences in line wrapping are presentational and should be handled responsively in the implementation rather than hard-coded with line breaks unless a specific break is required to reproduce the approved design.

- Desktop should closely reproduce the desktop mockup.
- Mobile should closely reproduce the mobile mockup.
- Tablet/intermediate widths are not explicitly designed in the mockup.
  Determine an appropriate responsive transition using the existing site's
  Bootstrap breakpoints and responsive conventions.
- The layout must remain usable at all widths between the supplied desktop
  and mobile designs.
- Avoid introducing new breakpoints unless existing project breakpoints
  cannot reasonably reproduce the design.

## Design Directions
- Font Faces & Sizes: Use existing font definitions for headings and 
  paragraph text. The mockup shows different fonts and sizes than what 
  the landing page currently uses. Don't add new font faces or sizes. 
  Follow what's already been created.
- Font Colors: Feel free to do what you think is best when choosing and 
  implementing font colors.
- For the stylized underline in the heading text under "WILL" and "WANT", 
  I'm not sure what to do there. I would create a png asset for that and 
  position it absolutely to be where it shows up in the layout relative to 
  the word it's under, but there's probably a better way. Do what you think 
  is best and then let me know what you did. Maybe create place holder 
  elements that I could put a .png in later.
- For the desktop version, the section with the cards showing shark and 
  diver pictures with the various distances from the sharks, the mockup 
  shows left and right arrows to the sides of the group of cards suggesting 
  that there are other cards that aren't in view. Disregard that. It's not 
  a carousel. There are only 4 cards/distances.
- Icons: Use the icon image placeholders supplied in the assets folder.
  Make the icon containing element dimensions the same for all the icons.
  They should share the same clases for sizing and positioning.

## Placeholder Images Folder
Use placeholder images from the folder below. I've named them according to where you should use them. Let me know if you have any questions about those. I'd like you to use the same images for both the desktop and mobile versions of the page.
Placeholder Images Folder: `dev/specs/01_proposed/cro-code-how-close-section/assets/placeholder-images`

## Content
Use the following copy exactly as written. Do not rewrite, shorten, expand, or generate alternative copy unless explicitly instructed.

### Eyebrow
REAL ENCOUNTERS. REAL MEMORIES.

### Main Heading
HOW CLOSE
WILL YOU GET?

### Intro Copy
This close. In their world. In open water.
No cage. Just you, the ocean, and sharks.

### Distance Cards

#### Card 1
**Label:** VERY CLOSE  
**Distance:** 3–6 FT

Feel the thrill of a shark passing inches away.

#### Card 2
**Label:** CLOSE  
**Distance:** 6–12 FT

Great for side-by-side moments and epic shots.

#### Card 3
**Label:** COMFORTABLE  
**Distance:** 12–20 FT

Plenty close to connect—in their world, not ours.

#### Card 4
**Label:** NATURAL VIEW  
**Distance:** 20+ FT

See their behavior, movement, and power.

### Secondary Heading
HOW CLOSE DO YOU WANT TO GET?

### Supporting Copy
As close as conditions allow—often incredibly close. Our experienced crew puts you in the best position for unforgettable encounters in open water.

We prioritize **freedom, interaction, and real connection** with sharks while always protecting their space. No cages. No barriers. Just **respect, expertise,** and the kind of experience you'll never forget.

### Benefit / Feature Items

#### Open-Water Freedom
**Heading:** OPEN-WATER FREEDOM

No cages. Move freely in the ocean with sharks.

#### Safety-First Guidance
**Heading:** SAFETY-FIRST GUIDANCE

Expert crew and proven protocols keep you safe.

#### Small Groups
**Heading:** SMALL GROUPS

More time in the water.
More personal. More epic.

#### Epic Photo Ops
**Heading:** EPIC PHOTO OPS

Professional photos available to capture every moment.

---

## Results

### Files Created
- `assets/css/how-close-section.css` — New temporary stylesheet for this section. To be merged into `custom-styles-v1.1.2.css` before production.

### Files Modified
- `.eleventy.js` — Added `dev/` as a passthrough copy so placeholder images in `dev/specs/` are served by the dev server.
- `_includes/base.njk` — Added a `{% if pageExtraCSS %}` conditional block to support page-specific CSS loading via front matter.
- `shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.njk` — Added `pageExtraCSS` front matter variable and inserted the section HTML at the designated comment.

### Existing Styles / Components / Utilities Reused
- `dark-bg` — existing class for white text on dark backgrounds
- `container-fluid gx-0` / `container` / Bootstrap grid (`col-12`, `col-lg-3`, `col-6`, `col-lg-8`, `offset-lg-2`, `g-3`) — consistent with all other sections on the page
- `data-show="startbox"` / `data-show-delay` — existing theme scroll-animation system used on all other sections
- `#f0ce12` yellow — existing brand accent color used for the eyebrow text and card label badges

### New CSS Created and Why
All new styles are in `assets/css/how-close-section.css`. New CSS was required because:
- The section layout (horizontal cards on mobile, vertical cards on desktop using `flex-direction: column-reverse`) has no equivalent pattern elsewhere on the site.
- The `.hand-underline-v2` / `.word-underline` pattern for the handwritten underline positioning is new (existing `.hand-underline-yellow` uses `::after` pseudo-element which doesn't work here since the underline needs to apply per-word inside a larger heading).
- The section background gradient + image combo, eyebrow style, card label badge, and card distance typography are all new visual elements.

### New JavaScript Created
None. The section uses no JavaScript.

### Responsive Decisions Not Explicitly Shown in Mockup
- **Tablet (577px–1023px):** Not designed in the mockup. Cards remain in the mobile horizontal (flex-row) layout at tablet widths since 4 columns would be too narrow. At 1024px they switch to the 4-column desktop layout.
- **Copy alignment on mobile:** Supporting copy is left-aligned on mobile for readability at small widths, centered on desktop — consistent with the rest of the site.

### Deviations from Approved Mockup
- **Eyebrow icon:** The mockup shows a small yellow icon (appears to be a shark fin or similar) to the left of the eyebrow text. No placeholder was provided for this element, so it was omitted. A real icon can be added once an asset exists.
- **Card label position on desktop:** The mockup shows the label badge at the very top of the card, potentially overlaid on the image. In the implementation the label sits below the image (as the first element of the text block). This is because the mobile layout requires the label to be on the left side with the text — using `flex-direction: column-reverse` on desktop naturally puts the image above the text block. The label's position can be adjusted if needed once real photos are in place.
- **Section background:** The mockup shows an underwater photo spanning the full section. The implementation uses the hero placeholder as a CSS background image with a dark gradient overlay — same visual intent, but easier to update and consistent with site patterns.

### Issues / Recommended Follow-Up
- All image paths reference `dev/specs/03_in_progress/.../placeholder-images/`. These must be swapped to final image paths in `images/` before production, and the `dev/` passthrough in `.eleventy.js` can then be removed.
- The `pageExtraCSS` front matter and link in `base.njk` should remain as a permanent utility — useful for other page-specific dev stylesheets in the future.
- When merging `how-close-section.css` into `custom-styles-v1.1.2.css`, move the styles into the appropriate existing sections (mobile/desktop media query blocks) rather than appending them as a block.