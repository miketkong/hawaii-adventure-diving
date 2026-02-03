## Hawaii Adventure Diving – Eleventy Site Overview

This folder contains the static website that now runs on Cloudflare Pages. Eleventy builds every page in the `_site` folder from the supported templates, and the final `_site` output is what Cloudflare Pages publishes at `https://hawaiiadventurediving.com`.

### For the business owner
- **Hosting & traffic:** The site now lives entirely on the Cloudflare Pages free tier. It automatically rebuilds on every push to GitHub and serves the latest files with HTTPS, so you no longer need the old $100/year PHP host.
- **Domain & redirects:** Both `hawaiiadventurediving.com` and `www.hawaiiadventurediving.com` are connected to this Pages project. Legacy URLs are redirected through the `_redirects` file, and this is already live in the current build (Cloudflare also has a rule that forwards `www` → non-`www` for analytics consistency).
- **Additions/changes:** To update content, edit the `.njk` files (or assets), run `npm run build` to preview locally, then push to GitHub. Cloudflare Pages will automatically rebuild and publish the new version.
- **Testing:** After each deploy, open the preview/production URL on desktop and mobile to confirm layout, images, and redirects before turning off the former host.

### For developers
- **Build tool:** The site uses Eleventy (`@11ty/eleventy` v3.1.2) via the `npm run build` script defined in `package.json`.
- **Project structure:**
  - `index.njk`, `about-sharks.njk`, and similar source files are Eleventy templates.
  - `_includes/` contains reusable partials (header/footer).
  - `_data/` hosts shared data/configuration.
  - `assets/`, `images/`, `articles/`, `shark-diving-oahu/`, `shark-diving-tours/`, `snorkel-tour/`, and `whale-watching-tour/` are copied verbatim into `_site` via pass-throughs defined in `.eleventy.js`.
  - `_redirects` lists all required 301 redirects; it is also copied through into `_site` by Eleventy so Cloudflare Pages can honor it at the edge.
  - `robots.txt` and `sitemap.xml` live at the root and are served directly.
- **Local setup:**
  ```bash
  npm install
  npm run build
  ```
  Eleventy will write the generated site into `_site`. Open `_site/index.html` in a browser (or `npx eleventy --serve` if you want a live preview) to verify before committing.
- **Redirects & canonical URLs:** The `_redirects` file contains the legacy path → new path mappings, plus the `www.hawaiiadventurediving.com` canonicalization rule. Keep this file in sync when you add or rename pages.
- **Cloudflare Pages:** The repository is connected to a Pages project. Keep the build command as `npm run build`, the output directory `_site`, and leave the deploy commands empty. Custom domains and preview URLs are managed through the Pages dashboard.

### Notes & future work
- If you ever plan to serve very large media assets, consider uploading them to Cloudflare R2 and referencing the external URLs so the Git history/clone size stays manageable.
- For new redirects or sitemap updates, edit `_redirects` or the Eleventy configuration and push; Cloudflare Pages will auto-deploy on the next commit.

Let me know if you want me to keep helping with analytics tracking, sitemap automation, R2 integration, or anything else as the site evolves.
