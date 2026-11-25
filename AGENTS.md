# AGENTS.md

This file provides guidance to Codex (Codex.ai/code) when working with code in this repository.

## Project overview

Static one-page landing site for Merinos.cl (estética / armonización corporal), centered on the "Hidrolipoclapsia" treatment. Plain HTML/CSS/JS — no framework, no bundler, no package manager, no test suite.

## Commands

There is no build step. Edit `index.html`, `css/style.css`, `js/script.js` directly and refresh the browser.

**Local preview** (no local web server tool is installed on this machine; Python is not available — use Node instead):
```
npx --yes serve -l 8765 .
```
Then open `http://localhost:8765`.

**Repackage the deployment archive** after any change to site files (the existing `merinos-web.tar.gz` is a build artifact and goes stale the moment `index.html`/`css`/`js`/`images` change — regenerate it before redeploying):
```
tar -czf merinos-web.tar.gz index.html robots.txt css js images
```
Note this intentionally excludes `deploy/` (server config, not site content) and `AGENTS.md`.

## Architecture

**Single HTML file, section-anchor navigation.** All content lives in `index.html`; header/footer nav links and the mobile menu all point at in-page `id` anchors (`#inicio`, `#tratamientos`, `#hidrolipoclapsia`, `#criolipolisis`, `#mesoterapia`, `#nosotros`, `#resultados`, `#faq`, `#contacto`). Adding a new section means adding both the `<section id="...">` and the corresponding nav/footer link.

**CSS variables drive the theme.** All colors, radii, shadows, and container width are defined once in `:root` at the top of `css/style.css` (`--primary`, `--primary-dark`, `--light-blue`, `--radius`, `--shadow`, etc.). Change the brand palette or spacing there rather than editing individual rules.

**Responsive breakpoints** are `max-width: 992px`, `768px`, and `480px`, in that order at the bottom of `style.css`. The mobile nav is a slide-in panel (`.main-nav`) toggled by adding/removing the `.open` class, animated via `transform: translateX()` (not `right`, which resolves against the fixed-position containing block and is more fragile across viewport-resize edge cases).

**Placeholder image convention.** Photos aren't final yet: real image spots are `<div class="img-placeholder ...">` blocks (`.circle-ph` for the hero circle, `.rect-ph` for cards/before-after/map) carrying a `data-file="suggested-name.jpg"` attribute documenting the expected final filename. To wire in a real photo, replace the div with an `<img src="images/suggested-name.jpg" alt="...">` — don't repurpose the placeholder styling as permanent.

**`js/script.js` is one vanilla-JS file**, everything wrapped in a single `DOMContentLoaded` listener: mobile nav toggle + dropdown handling, sticky-header shadow on scroll, `IntersectionObserver`-based reveal-on-scroll (applied to `.treatment-card`, `.step`, `.info-card`, etc.), and the appointment form submit handler.

**The appointment form (`#appointmentForm`) has no backend.** By explicit product decision it currently only calls `preventDefault()` and shows an alert — it is not wired to mailto, a form service, or a custom endpoint. Don't assume it sends anything until that's implemented.

**All external dependencies are CDN links in `<head>`** (Google Fonts: Poppins/Inter; Font Awesome 6.5.1) — nothing is vendored locally, so the site requires visitor-side internet access for fonts/icons to render.

## Deployment (VPS)

The site is deployed as a static file tree served by Nginx — no app server, no domain configured yet.

- `deploy/nginx-merinos.conf` is the reference Nginx server block. It is **not** part of the webroot — it gets copied to `/etc/nginx/sites-available/` on the VPS, not into the uploaded site archive. It currently uses `server_name _;` (IP-only, no domain yet); once a domain exists, update that line and follow the certbot instructions in the file's trailing comment block to add HTTPS.
- `merinos-web.tar.gz` is the upload artifact containing exactly what should live in the VPS webroot (`index.html`, `robots.txt`, `css/`, `js/`, `images/`) — regenerate it (see Commands above) before every deploy.
- Deploy flow: `scp` the tar.gz to the VPS, extract into `/var/www/merinos`, `chown` to `www-data`, then (first deploy only) install `deploy/nginx-merinos.conf` into `sites-available`, symlink into `sites-enabled`, `nginx -t`, `systemctl reload nginx`.
- `robots.txt` has its `Sitemap:` line commented out pending a real domain — there is no `sitemap.xml` in the repo yet.
