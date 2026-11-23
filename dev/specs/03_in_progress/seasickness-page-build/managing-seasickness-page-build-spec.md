# Seasickness Page Build Spec

## Goal

Create a new informational page for the Oahu shark diving landing-page section that contains the full seasickness guide.

The new page should follow the same overall structure and layout conventions as the existing contact page in the same folder, but replace the contact-page content with the seasickness guide content.

## New Page

Create a new Nunjucks file in:

`landing-pages/oahu-shark-diving/`

Name the file:

`managing-seasickness.njk`

Use the existing contact-page `.njk` file in that folder as the starting point.

## Base Template and Page Structure

The new page should use the same base `.njk` template as the existing contact page.

The simplest approach is to clone the contact page and then update the page-specific content and metadata for the new seasickness page.

Preserve the existing overall page structure, includes, header/footer behavior, and base-template setup unless something is clearly specific to the contact page.

## Page Metadata

Update the page metadata so it is appropriate for the new seasickness page.

At minimum, update:

- Page title
- Browser / SEO title
- Page heading
- URL / permalink
- Canonical URL
- Meta description, if the contact page includes one

Use a clear title such as:

**Managing Seasickness on Your Shark Diving Tour**

Use a clean URL based on the filename / page purpose, for example:

`/oahu-shark-diving/managing-seasickness/`

If the project's routing conventions require a different URL structure, follow the existing convention used by the other pages in this folder.

## Schema / Structured Data

The contact page may already contain schema or structured-data markup.

Review that markup before carrying it over.

- Keep any schema that is generic and still valid for this new page.
- Remove or update any schema that is specifically tied to the contact page.
- Do not leave incorrect contact-specific structured data on the new page.
- If it is unclear whether a schema block is appropriate, keep the implementation conservative rather than inventing new structured data.

The primary goal for this task is to build the page correctly. More specialized schema can be handled separately later if necessary.

## Main Page Content

Replace the contact-specific content inside the main content area with the seasickness guide.

The source content is located in:

`dev-specs/in-progress/seasickness-page-build/assets/`

Use the **Managing Seasickness PDF** in that assets folder as the source of truth for the page copy.

Preserve the wording and organization of that document unless a small formatting adjustment is required for clean HTML.

## HTML Structure

Use simple semantic HTML for the content.

For example:

- One `<h1>` for the page title
- `<h2>` elements for major sections
- `<h3>` elements for subsections where appropriate
- `<p>` elements for body copy
- `<ul>` / `<li>` for bullet lists
- `<strong>` where emphasis is present in the source content
- Links where the source content includes or clearly calls for them

Do not over-engineer the page.

No special component system, complex card layout, or elaborate visual treatment is required for this first version.

The page should primarily be a clean, readable informational resource.

## Styling

Reuse the existing site styles and page layout wherever possible.

Only add page-specific CSS if necessary to make the long-form article content readable and properly spaced.

If additional styling is needed, keep it minimal and consistent with the existing Oahu shark diving landing-page design.

## Important Constraints

- Do not modify the existing contact page.
- Do not change shared components unless required for the new page to function.
- Do not rewrite or summarize the seasickness guide.
- Do not invent additional medical advice or page content.
- Use the PDF in the assets folder as the source of truth for the page copy.
- Keep the implementation simple, semantic, and easy to maintain.

## Expected Result

The finished page should:

1. Exist as `managing-seasickness.njk` in the Oahu shark diving landing-pages folder.
2. Use the same base layout as the existing contact page.
3. Have correct page-specific metadata and canonical information.
4. Contain the full seasickness-guide content from the supplied PDF.
5. Use clean semantic HTML.
6. Fit naturally within the existing landing-page site's visual system.
7. Avoid carrying over any contact-specific content or metadata that does not belong on the new page.
