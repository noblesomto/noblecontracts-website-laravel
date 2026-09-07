# Bootstrap/jQuery → Tailwind/vanilla migration — Phase 1

**Status:** Approved for implementation planning
**Scope:** Shared layout (header/nav/footer) + Homepage, `start-a-project`, `services`
**Out of scope:** Icon fonts (Font Awesome/Flaticon), 3rd-party scripts (GA, reCAPTCHA, WhatsApp widget), all other ~17 pages (future phase)

## Problem

PageSpeed Insights on the live site (`nobleitservices.ng`) caps Performance around 42-49 on mobile. The dominant remaining causes, per Lighthouse:

- 703 KiB of unused JavaScript
- 79 KiB of unused CSS
- 1.4s+ Total Blocking Time
- "Minimize main-thread work" ~4-5s

Root cause: every page loads jQuery (~90KB) plus 9 separate jQuery plugins (Bootstrap JS, Slick, Magnific Popup, Nice Select, WOW.js, animatedheadline, circle-progress, isotope, appear.js) via the shared `layouts/footer.blade.php`, regardless of whether that page actually uses them. Bootstrap's CSS also ships in full on every page even though the visual design is driven mostly by a custom `style.css`, not Bootstrap components.

Business context: this feeds paid ad traffic. A previous ad run surfaced site issues. Goal is best realistic Performance/SEO/load speed before the next ad run, verified locally before deploy (no staging environment; deploy is zip-upload to shared hosting, no SSH/terminal access).

## Per-page component audit (verified against current code)

| Page | Uses |
|---|---|
| Homepage (`index.blade.php` + `layouts/slider.blade.php`) | Hero carousel (fade, autoplay, dots) via `.main-slider-active`; typewriter text via `cd-headline`/`cd-words-wrapper`; portfolio carousel `.project-three-active`; testimonial carousel `.testimonial-two-active`; WOW scroll animations (`.wow`); 1 `<select id="select-subject">` (contact form) |
| `start-a-project.blade.php` | WOW animations only. 4 `<select>` elements inside `.quote-wizard` — already excluded from Nice Select in current `script.js` (`$('select').not('.quote-wizard select').niceSelect()`), so these are effectively native selects already |
| `services.blade.php` | WOW animations; 3 animated circle-progress counters (`.progress-content.one/two/three` inside `.circle-counter`, driven by jQuery `circleProgress` plugin) |

None of the 3 pages use Magnific Popup, Nice Select (JS), Isotope, or appear.js. Those only load today because the shared footer loads everything unconditionally.

## Approach

Confirmed with user: **Approach B** — hand-roll all replacements except the carousel, where a small dependency-free library (Embla Carousel core, ~6-13KB, no jQuery) is used instead of reinventing swipe/fade/autoplay logic across 3 different carousel configs (highest-risk piece, used in multiple places).

## Design

### 1. Tailwind build

- Add `tailwindcss` as a local devDependency (build-time only, not shipped).
- `tailwind.config.js` content-scans `resources/views/**/*.blade.php`.
- Theme tokens (colors, fonts) pulled from the current `style.css` custom properties so utility classes stay visually consistent with the existing brand.
- Build locally: `npx tailwindcss -i ./resources/css/tailwind-source.css -o ./public/frontend/css/tailwind.css --minify`. Output is a static compiled CSS file, referenced with the same cache-busting query pattern already used for `style.css` (`?v={{ filemtime }}`). No build step required on the shared host — matches the zip-upload-only deploy constraint.
- A small custom CSS layer (`@layer components`) stays for a handful of bespoke effects (hero background shapes/gradient, slider fade transition) not worth forcing into pure utilities.

### 2. Shared layout duplication (v2 layouts)

`layouts/header.blade.php`, `layouts/footer.blade.php`, `layouts/nav.blade.php`, and `layouts/slider.blade.php` are `@include`d by every page on the site, not just the 3 in scope. Stripping Bootstrap/jQuery out of them in place would break the ~17 other pages that still depend on those plugins (isotope filters, Magnific Popup lightboxes, etc. elsewhere).

Solution: new parallel layout partials used only by the 3 migrated pages:

- `layouts/header-v2.blade.php`
- `layouts/nav-v2.blade.php`
- `layouts/slider-v2.blade.php` (homepage only)
- `layouts/footer-v2.blade.php`

Untouched pages keep `@include`-ing the original `header.blade.php`/`nav.blade.php`/`footer.blade.php` exactly as today. Future migration phases move more pages onto the v2 layouts; once every page is migrated, the v1 files and Bootstrap/jQuery/plugin assets get deleted as a final cleanup step (not part of this phase).

### 3. Component replacement map

| Current | Replacement |
|---|---|
| Bootstrap grid (`.container`/`.row`/`.col-*`) | Tailwind `container mx-auto px-*`, flex/grid utilities |
| Bootstrap navbar collapse/dropdown (jQuery) | ~20-line vanilla JS toggle, `aria-expanded` state maintained |
| Slick (hero, portfolio, testimonials) | Embla Carousel core, self-hosted as a local vendored file under `public/frontend/js/` (not loaded from a CDN, consistent with how every other script on the site is already self-hosted); one small init module handling all 3 configs (fade+autoplay for hero, standard slide for the other two) |
| animatedheadline (typewriter) | ~30-line vanilla script (same visual behavior: cycling headline words) |
| WOW.js + animate.css | `IntersectionObserver` adding a Tailwind transition-in class when an element enters viewport |
| circleProgress (jQuery plugin) | CSS `conic-gradient` ring + vanilla count-up, triggered by `IntersectionObserver` |
| `<select>` + Nice Select | Native `<select>` styled with Tailwind (homepage contact-form select only; start-a-project selects already native) |
| jQuery (core) | Removed entirely from the v2 layout — nothing in these 3 pages needs it once the above are vanilla |
| Font Awesome, Flaticon, GA, FB Pixel (minus bug fix below), reCAPTCHA, WhatsApp widget | Unchanged, included as-is in v2 layout |

### 4. Facebook Pixel fix (confirmed in scope)

Current code fires `fbq('track', 'Purchase', {value: 10000, currency: 'NGN'})` on every page load — not tied to an actual purchase. This corrupts ad conversion data. Fix: remove the fake sitewide `Purchase` call, keep the existing (correct) `PageView` tracking.

This is an independent one-line-removal bug fix, not tied to the Tailwind migration — apply it directly to the existing `layouts/header.blade.php` so it takes effect sitewide immediately (all pages, not just the 3 in scope). `header-v2.blade.php` inherits the fix by not including the bad code in the first place.

### 5. Verification (no staging environment; this local copy is the de facto staging)

For each of the 3 pages, before considering phase 1 done:

- Render locally (`artisan serve`), inspect at mobile/tablet/desktop breakpoints
- Exercise every interactive element: nav toggle + dropdown, all 3 carousels (autoplay, dots, swipe), circle-progress counters animating into view, both forms (contact select, quote wizard selects + multi-step flow if any), WhatsApp widget still functional
- Visual comparison against current live pages for brand/layout parity (per agreed tolerance: same brand feel, minor native-control differences acceptable)
- Confirm Blade compiles cleanly (`artisan view:cache` dry-run) and no console errors on any of the 3 pages
- User does their own local review/testing pass before deciding to deploy (their existing process)

## Explicitly out of scope for this phase

- Icon fonts (Font Awesome/Flaticon) — stay as-is
- Google Analytics, reCAPTCHA, WhatsApp widget — unchanged
- All pages other than Homepage, `start-a-project`, `services` — future phase(s), prioritized by ad-traffic relevance
- Deleting the v1 Bootstrap/jQuery layout files and plugin assets — only happens once every page is migrated
