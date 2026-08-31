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
After completing the implementation, document:

- Files created
- Files modified
- Existing styles/components/utilities reused
- New CSS created and why it was necessary
- New JavaScript created and why it was necessary
- Responsive decisions that were not explicitly shown in the mockup
- Any deviations from the approved mockup and why
- Any issues, uncertainties, or recommended follow-up work