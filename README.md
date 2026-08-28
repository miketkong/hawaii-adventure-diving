# Hawaii Adventure Diving — Site README

**Live site:** `https://hawaiiadventurediving.com`
**Stack:** Eleventy 3.1.2 (Nunjucks) → Cloudflare Pages
**Booking system:** FareHarbor
**Analytics:** Google Tag Manager (`GTM-W97L82P`)

---

## Quick Start

**Day-to-day development** — this is the only command you need:
```bash
npx eleventy --serve   # builds the site and starts a live-reload dev server
```

**First-time setup** (new machine or after pulling dependency changes):

Requires [Node.js](https://nodejs.org/) to be installed first. Then:
```bash
npm install            # installs all dependencies including Eleventy — only needed once, or when package.json changes
```

**Build only** (no server — useful for verifying output before committing):
```bash
npm run build          # writes the generated site to _site/
```

---

## Project Structure

```
/
├── index.njk                         # Homepage
├── about-us.njk
├── about-sharks.njk
├── conservation.njk
├── hawaiian-sea-wildlife.njk
├── contact.njk
├── contact-custom-charters.njk
├── 404.njk
├── articles/                         # Blog articles (pass-through)
├── shark-diving-tours/               # Shark tour pages (pass-through)
├── shark-diving-oahu/                # Supporting SEO pages (pass-through)
├── whale-watching-tour/              # Whale watching tour pages (pass-through)
├── snorkel-tour/                     # Snorkel tour pages (pass-through)
├── images/                           # Site images (pass-through)
├── assets/
│   ├── css/
│   │   ├── main.css                  # Theme base styles
│   │   └── custom-styles-v*.css      # MK Design customizations
│   ├── js/
│   │   ├── helpers.js
│   │   └── controllers/              # Feature-specific JS modules
│   └── vendors/                      # Third-party CSS/JS (local copies)
├── _includes/                        # Nunjucks partials
│   ├── base.njk                      # HTML shell (head, body wrapper)
│   ├── head-top.njk                  # GTM snippet + siteData meta tags
│   ├── nav.njk
│   ├── footer.njk                    # Footer + all vendor JS
│   ├── shark-video-banner.njk        # Hero video banner (see below)
│   ├── blocks/
│   └── sections/                     # Reusable page sections
├── _data/
│   └── siteData.js                   # Global data (contact info, ratings, team bios)
├── _site/                            # BUILD OUTPUT — do not edit directly
├── _redirects                        # Cloudflare Pages redirect rules (pass-through)
├── robots.txt                        # Pass-through
├── sitemap.xml
└── .eleventy.js                      # Eleventy config (pass-throughs + I/O dirs)
```

---

## Key Architectural Details

### Templating
Every `.njk` file at the root or in subdirectories is an Eleventy template. The front matter declares the layout, page title, description, canonical URL, and OG image used by `_includes/base.njk`.

```yaml
---
layout: base
pageTitle: "Page Title"
pageDescription: "..."
pageURL: "https://hawaiiadventurediving.com/page-path/"
ogTitle: "..."
ogImage: "https://hawaiiadventurediving.com/images/og-image.jpg"
---
```

### Global Data (`_data/siteData.js`)
Exposes `siteData` to all templates. Contains:
- `siteData.contact` — phone number and email
- `siteData.platformRatings` — review counts/averages for Google, TripAdvisor, Yelp, Facebook, Groupon
- `siteData.reviewSummary` — computed weighted average across all platforms
- `siteData.teamBios` — team member names, roles, images, Instagram handles

Update review counts here; they render in the homepage ratings block and elsewhere.

### Vendor Libraries (local copies in `assets/vendors/`)
Bootstrap, Swiper, Jarallax + Jarallax Element, jQuery, Magnific Popup, Isotope, imagesLoaded, jQuery Countdown, jQuery Inview, OFI. All loaded from local files — no CDN dependency at runtime.

**Google Fonts** (Inter, Josefin Sans, Poppins, Asap Condensed) are loaded from Google's CDN via `base.njk`.

### Pass-Through Directories
The following directories are copied verbatim into `_site` with no processing:
`articles/`, `assets/`, `images/`, `shark-diving-tours/`, `shark-diving-oahu/`, `snorkel-tour/`, `whale-watching-tour/`, `robots.txt`, `_redirects`

---

## Responsive Design

**Minimum supported mobile width: 360px.** This is the design baseline for all mobile layouts. Test down to 320px to ensure nothing breaks catastrophically, but 360px is the target floor.

| Width | Context |
|---|---|
| 320px | Absolute minimum (older/small devices) |
| 360px | **Design baseline** — most common small Android width |
| 375px | iPhone SE (2nd/3rd gen) |
| 390px | iPhone 14/15 Pro |

---

## Hero Video Banner

**File:** `_includes/shark-video-banner.njk`
**Used on:** Homepage (`index.njk`)

The banner currently embeds background video via the **YouTube IFrame API**, loaded dynamically after `DOMContentLoaded`. Two different videos are used depending on viewport width:

| Breakpoint | YouTube Video ID |
|---|---|
| Desktop (> 576px) | `asEnYgaGBV8` |
| Mobile (<= 576px) | `cg5OSCuulWE` |

Settings: muted, autoplay, looping, no controls, plays inline.

**Overlay fade:** `#banner-video-overlay` (a static image fallback) fades out via `.fade-out` class once the YouTube player fires `YT.PlayerState.PLAYING`.

**Note:** `assets/includes/php/video-banner-shark.php` is a legacy artifact from the old PHP host. It is not used. The live include is `_includes/shark-video-banner.njk`.

---

## Redirects & Canonical URLs

`_redirects` at the project root is copied through to `_site` and honored by Cloudflare Pages at the edge. It contains legacy path → new path 301 mappings. The Cloudflare Pages dashboard also has a rule forwarding `www` → non-`www` for analytics consistency.

Always keep `_redirects` and `sitemap.xml` in sync when adding or renaming pages.

---

## Deployment

The repo is connected to a Cloudflare Pages project. Every push to `main` triggers an automatic build and deploy.

- **Build command:** `npm run build`
- **Output directory:** `_site`
- **Custom domains:** `hawaiiadventurediving.com`, `www.hawaiiadventurediving.com`

No manual deploy steps needed. Verify desktop and mobile after each deploy.

---

## Hosting Notes

- **Large media assets** (video files, high-res photography): use Cloudflare R2 or Cloudflare Stream and reference external URLs. Do not commit binary media to the repo.
- **Video streaming** is handled separately — see `_includes/shark-video-banner.njk` for the current implementation.
