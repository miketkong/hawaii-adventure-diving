# Shark Tour Landing Page FAQ Update Spec

## Goal

Update the FAQ section on the new Shark Tour landing page ("landing-pages/oahu-shark-diving/sections/shark-tour-faq.njk") so that it uses the questions and answers from the supplied FAQ Markdown file.

Replace the existing FAQ content completely, while preserving the existing FAQ accordion implementation.

## Source Content

Use the supplied FAQ Markdown file ("dev/specs/03_in_progress/faq-section-updates/had_shark_tour_faq_updates_nov_22.md") as the source of truth for:

- FAQ section groupings
- Section headings
- Questions
- Answers
- Ordering

Do not rewrite, shorten, summarize, or otherwise alter the FAQ copy unless a very small formatting adjustment is required to fit the existing HTML structure.

## Replace the Existing FAQs

Remove the current FAQ questions and answers from the Shark Tour landing page and replace them with the FAQs from the Markdown file.

The final FAQ section should contain all FAQ groups, questions, and answers from that file, in the same order.

Do not preserve old FAQ items that are not present in the Markdown file.

## Preserve the Existing Accordion Structure

Use the existing FAQ accordion code as the implementation pattern.

Before making changes, inspect how the current FAQ items are built and follow that same structure for every new FAQ.

Preserve the existing conventions for:

- Accordion HTML structure
- Buttons / triggers
- Content panels
- ARIA attributes
- IDs
- Classes
- Data attributes
- Open / close behavior
- Accessibility behavior
- Any JavaScript hooks used by the existing accordion system

Do not create a new accordion implementation.

The new FAQ items should behave exactly like the existing ones.

## Accordion IDs and Names

Update the identifiers used for each accordion so they appropriately describe the new FAQ question.

Follow the same naming convention already used in the existing FAQ code.

Identifiers should be:

- Descriptive
- Short
- Human-readable in the code
- Unique
- Consistent with the naming style already present

Do not use the entire FAQ question as an ID if that would create an unnecessarily long identifier.

For example, if the existing naming convention uses IDs such as:

`faq-swimming`
`faq-cancellation`
`faq-group-size`

continue using that general style.

Make sure any related attributes that reference an accordion ID are updated together so the accordion and accessibility relationships continue to work correctly.

## FAQ Section Group Headings

The Markdown file groups the FAQs into multiple sections.

Add those section headings to the page in the appropriate locations.

Use simple semantic `<h2>` elements for these headings unless the existing markup clearly requires a different heading level for proper document hierarchy.

Do not create any new CSS classes or styles specifically for these headings.

Allow them to inherit existing site typography and spacing.

If an existing heading class can be reused without changing any CSS, that is acceptable, but do not create a new style for this task.

## CSS Restrictions

Do **not** create any new CSS styles.

Do not:

- Add new CSS classes
- Add new selectors
- Add inline styles
- Add a new stylesheet
- Modify existing CSS solely to accommodate the new FAQ content
- Create special styles for the FAQ section group headings

The existing FAQ accordions should continue using the styles they already have.

The section headings can remain simple, unstyled semantic headings if no appropriate existing style is available.

## JavaScript Restrictions

Do not create new JavaScript for the FAQ section.

Reuse the existing accordion behavior exactly as it currently works.

Only update markup, identifiers, and content as necessary to support the new FAQ items.

## Preserve Existing Page Structure

Do not make unrelated changes to the Shark Tour landing page.

Only modify what is necessary to:

1. Replace the existing FAQ content.
2. Add the FAQ section group headings.
3. Create the required additional accordion items using the existing accordion pattern.
4. Update accordion IDs / names appropriately.

Do not refactor unrelated code.

## Expected Result

The finished FAQ section should:

1. Contain all FAQs from the supplied Markdown file.
2. Preserve the FAQ groupings and order from the Markdown file.
3. Use the existing accordion code pattern.
4. Use short, descriptive, unique accordion IDs that match existing naming conventions.
5. Preserve all existing accordion behavior and accessibility relationships.
6. Use simple semantic headings for FAQ groups.
7. Add no new CSS.
8. Add no new JavaScript.
9. Make no unrelated page changes.
