# Bootstrap/jQuery → Tailwind/Vanilla Migration (Phase 1) Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Migrate the homepage, `start-a-project`, and `services` pages (plus the shared layout they use) from Bootstrap+jQuery+9 plugins to Tailwind CSS + vanilla JS, cutting the ~703 KiB of unused JS and ~79 KiB of unused CSS Lighthouse flags today, without breaking any page not in scope.

**Architecture:** New parallel `-v2` layout partials (`header-v2`, `nav-v2`, `slider-v2`, `footer-v2`) and a set of small, self-initializing vanilla JS modules replace Bootstrap/jQuery for the 3 in-scope pages only. Original `layouts/header.blade.php` / `nav.blade.php` / `footer.blade.php` / `slider.blade.php` are untouched (except the standalone Facebook Pixel bug fix in Task 1) and keep serving every other page exactly as today. Tailwind CSS is compiled locally to one static file and shipped as a build artifact — no build step runs on the shared host.

**Tech Stack:** Tailwind CSS v4.3.3 (CLI build, no PostCSS config needed), Embla Carousel core (vendored locally, no CDN), vanilla ES2017+ JS (no bundler, no module system — plain self-initializing `<script>` files), Laravel Blade.

**Spec:** `docs/superpowers/specs/2026-09-07-tailwind-migration-phase1-design.md`

## Global Constraints

- **Visual fidelity:** same brand feel; minor differences from native browser controls acceptable (confirmed in spec).
- **Scope:** icon fonts (Font Awesome/Flaticon), GA, reCAPTCHA, WhatsApp widget stay untouched. Do not touch any page other than `index.blade.php`, `start-a-project.blade.php`, `services.blade.php`, and the new `-v2` layout files.
- **No CDN for Embla** — vendor it as a local file under `public/frontend/js/vendor/`.
- **No SSH on the target host** — nothing in this plan may require a server-side build/command. Tailwind CSS is built locally and the compiled `.css` output is a committed file, shipped as-is.
- **Brand color tokens** (from `public/frontend/css/style.css:9374-9382`, `:root`):
  - `ink` = `#0a0e17` (near-black)
  - `ink-soft` = `#101a30`
  - `surface-alt` = `#f4f6fb` (light gray section background)
  - `accent` = `#0066ff` (primary brand blue — `.theme-btn` background)
  - `accent-cyan` = `#01c9f5` (decorative)
  - `signal-text` = `#0057b8` (accessible link/text blue)
  - `border-soft` = `#e4e8f0`
  - `orange` = `#ff8a00` (decorative accent, hover borders)
- **Breakpoints** (match Bootstrap 5 exactly, so responsive behavior doesn't shift): `sm: 576px, md: 768px, lg: 992px, xl: 1200px, 2xl: 1400px`.
- **Container:** Bootstrap's `.container` caps at `max-width: 1320px` (`style.css:198`) with 15px horizontal padding at the base. Tailwind replacement: a `.container-nb` utility class, `max-width: 1320px`, centered, `padding-inline: 1rem` (mobile) via Tailwind's `container` plugin config — defined once in Task 2, reused everywhere.
- **Grid conversion reference** (Bootstrap → Tailwind, use consistently across every page task):

  | Bootstrap | Tailwind |
  |---|---|
  | `.row` | `flex flex-wrap` |
  | `.row.g-4` (gutters) | `flex flex-wrap gap-8` (Bootstrap's 30px gutter ≈ Tailwind's `gap-8`/2rem, close enough per fidelity tolerance) |
  | `.col-lg-3` | `lg:w-1/4 w-full` |
  | `.col-lg-4` | `lg:w-1/3 w-full` |
  | `.col-lg-5` | `lg:w-5/12 w-full` |
  | `.col-lg-6` | `lg:w-1/2 w-full` |
  | `.col-lg-7` | `lg:w-7/12 w-full` |
  | `.col-md-6` | `md:w-1/2 w-full` |
  | `.col-sm-6` | `sm:w-1/2 w-full` |
  | `.d-flex` | `flex` |
  | `.justify-content-between` | `justify-between` |
  | `.justify-content-center` | `justify-center` |
  | `.align-items-center` | `items-center` |
  | `.text-center` | `text-center` |
  | `.text-white` | `text-white` |
  | `.d-block` | `block` |
  | `.gap-3` | `gap-3` (Tailwind has the same scale name, keep as-is) |

- **JS module convention:** every file in `public/frontend/js/v2/` is a self-contained IIFE that listens for `DOMContentLoaded` itself and checks its target elements exist before doing anything (`if (!el) return;`), so any module is safe to include on a page that doesn't have its target markup. No module system, no bundler — plain `<script src="...">` tags, no `type="module"`.
- **Custom CSS layer:** a handful of bespoke effects (hero fade-slider transition, background shapes) live in `resources/css/tailwind-v2-components.css`, imported into the Tailwind source file, compiled into the same output — not pure utilities, matching the spec's stated allowance.

---

### Task 1: Fix Facebook Pixel fake Purchase event

**Files:**
- Modify: `resources/views/frontend/layouts/header.blade.php:90-102` (the existing Facebook Pixel `<script>` block)

**Interfaces:** None — standalone fix, no dependency on any other task.

- [ ] **Step 1: Remove the fake Purchase tracking call**

Current code (lines 90-96 approximately, inside the Facebook Pixel `<script>` block):

```js
fbq('init', '593374810813420');
fbq('track', 'PageView');
fbq('track', 'Purchase', {
value: 10000.00,
currency: 'NGN'
});
```

Replace with:

```js
fbq('init', '593374810813420');
fbq('track', 'PageView');
```

- [ ] **Step 2: Verify no other Purchase-tracking calls exist**

Run: `grep -rn "fbq('track', 'Purchase'" /home/www/laravel/nobleitservices/resources/views/`
Expected: no matches.

- [ ] **Step 3: Verify the page still renders**

Run: `cd /home/www/laravel/nobleitservices && php artisan view:clear && (php artisan serve --port=8961 &) && sleep 2 && curl -s http://127.0.0.1:8961/ | grep -c "fbq('track'" ; kill -9 $(pgrep -f "artisan serve --port=8961")`
Expected: output `1` (only the `PageView` call remains).

- [ ] **Step 4: Commit**

```bash
cd /home/www/laravel/nobleitservices
git add resources/views/frontend/layouts/header.blade.php
git commit -m "Remove fake sitewide Facebook Pixel Purchase event

Co-Authored-By: Claude Sonnet 5 <noreply@anthropic.com>"
```

---

### Task 2: Install and configure Tailwind CSS v4

**Files:**
- Create: `resources/css/tailwind-v2-source.css`
- Create: `resources/css/tailwind-v2-components.css`
- Modify: `package.json` (add devDependency + build script)
- Create (build output, generated not hand-written): `public/frontend/css/tailwind-v2.css`

**Interfaces:**
- Produces: `public/frontend/css/tailwind-v2.css` — the compiled stylesheet every later `-v2` blade file links to, plus the `.container-nb` utility class and any custom component classes defined in `tailwind-v2-components.css` (e.g. `.hero-fade-slide`, `.shape-decor`) that later tasks will add to as needed.

- [ ] **Step 1: Install Tailwind CSS v4 CLI as a devDependency**

```bash
cd /home/www/laravel/nobleitservices
npm install -D tailwindcss@4.3.3 @tailwindcss/cli@4.3.3
```

- [ ] **Step 2: Create the Tailwind source file**

Create `resources/css/tailwind-v2-source.css`:

```css
@import "tailwindcss";
@import "./tailwind-v2-components.css";

@theme {
  --color-ink: #0a0e17;
  --color-ink-soft: #101a30;
  --color-surface-alt: #f4f6fb;
  --color-accent: #0066ff;
  --color-accent-cyan: #01c9f5;
  --color-signal-text: #0057b8;
  --color-border-soft: #e4e8f0;
  --color-brand-orange: #ff8a00;

  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --breakpoint-2xl: 1400px;
}

@layer utilities {
  .container-nb {
    width: 100%;
    max-width: 1320px;
    margin-inline: auto;
    padding-inline: 1rem;
  }
}
```

- [ ] **Step 3: Create the empty components file (later tasks add to it)**

Create `resources/css/tailwind-v2-components.css`:

```css
/* Bespoke effects for the -v2 pages that don't fit as pure Tailwind utilities.
   Populated by later migration tasks (hero slider fade transition, decorative
   shape positioning, etc). Empty until Task 9 (v2 layout partials). */
```

- [ ] **Step 4: Add the build script to package.json**

Modify `package.json`, inside `"scripts"`:

```json
"build:tailwind-v2": "tailwindcss -i ./resources/css/tailwind-v2-source.css -o ./public/frontend/css/tailwind-v2.css --minify"
```

- [ ] **Step 5: Run the build and verify output**

```bash
cd /home/www/laravel/nobleitservices
npm run build:tailwind-v2
```

Expected: `public/frontend/css/tailwind-v2.css` is created. Run `grep -c "container-nb" public/frontend/css/tailwind-v2.css` — expected: `1` or more (confirms the custom utility compiled in). Run `wc -c public/frontend/css/tailwind-v2.css` — expected: a small file (a few KB), since no blade files reference Tailwind classes yet, so almost nothing is generated except the explicit `.container-nb` rule and Tailwind's base reset. This is expected and correct at this stage — the file grows as later tasks add Tailwind classes to blade files that get re-scanned on each rebuild.

- [ ] **Step 6: Commit**

```bash
cd /home/www/laravel/nobleitservices
git add package.json package-lock.json resources/css/tailwind-v2-source.css resources/css/tailwind-v2-components.css public/frontend/css/tailwind-v2.css
git commit -m "Add Tailwind CSS v4 build for the v2 (Tailwind) page migration

Co-Authored-By: Claude Sonnet 5 <noreply@anthropic.com>"
```

**Note for later tasks:** every task that adds Tailwind classes to a blade file must re-run `npm run build:tailwind-v2` before that task's verification step, since Tailwind only includes classes it finds by scanning the actual files.

---

### Task 3: Vendor Embla Carousel core locally

**Files:**
- Create: `public/frontend/js/vendor/embla-carousel.umd.js`

**Interfaces:**
- Produces: global `window.EmblaCarousel` function, signature `EmblaCarousel(rootNode, options?, plugins?) → EmblaApi` (used by Task 5).

- [ ] **Step 1: Download the Embla Carousel core UMD build**

```bash
cd /home/www/laravel/nobleitservices
npm pack embla-carousel@8.5.2 --pack-destination /tmp
tar -xzf /tmp/embla-carousel-8.5.2.tgz -C /tmp
mkdir -p public/frontend/js/vendor
cp /tmp/package/embla-carousel.umd.js public/frontend/js/vendor/embla-carousel.umd.js
rm -rf /tmp/package /tmp/embla-carousel-8.5.2.tgz
```

- [ ] **Step 2: Verify the file and its exposed global**

```bash
head -c 200 public/frontend/js/vendor/embla-carousel.umd.js
grep -c "EmblaCarousel" public/frontend/js/vendor/embla-carousel.umd.js
```

Expected: file starts with a UMD wrapper comment/banner, and the grep finds multiple matches (confirms the global export name).

- [ ] **Step 3: Sanity-check it loads without error in a plain HTML page**

```bash
cat > /tmp/embla-check.html << 'EOF'
<!DOCTYPE html><html><body>
<div id="t"><div style="display:flex"><div>1</div><div>2</div></div></div>
<script src="/home/www/laravel/nobleitservices/public/frontend/js/vendor/embla-carousel.umd.js"></script>
<script>
  if (typeof window.EmblaCarousel !== 'function') { document.title = 'FAIL'; }
  else { document.title = 'OK'; }
</script>
</body></html>
EOF
node -e "
const fs = require('fs');
const vm = require('vm');
const code = fs.readFileSync('public/frontend/js/vendor/embla-carousel.umd.js', 'utf8');
const sandbox = { window: {}, module: { exports: {} }, exports: {} };
vm.createContext(sandbox);
vm.runInContext(code, sandbox);
console.log(typeof sandbox.window.EmblaCarousel === 'function' ? 'OK: EmblaCarousel is a function' : 'FAIL: EmblaCarousel not found on window');
"
rm -f /tmp/embla-check.html
```

Expected: `OK: EmblaCarousel is a function`.

- [ ] **Step 4: Commit**

```bash
cd /home/www/laravel/nobleitservices
git add public/frontend/js/vendor/embla-carousel.umd.js
git commit -m "Vendor Embla Carousel core locally for the v2 carousel replacement

Co-Authored-By: Claude Sonnet 5 <noreply@anthropic.com>"
```

---

### Task 4: Vanilla nav toggle + dropdown module

**Files:**
- Create: `public/frontend/js/v2/nav-v2.js`

**Interfaces:**
- Consumes: DOM elements with `id="nav-v2-toggle"` (hamburger button), `id="nav-v2-menu"` (the collapsible menu container), and `.nav-v2-dropdown-btn` (mobile submenu toggle buttons) — provided by Task 9's `nav-v2.blade.php`.
- Produces: nothing consumed by other JS modules (self-contained, DOM-only).

Desktop dropdown reveal (≥992px) is handled by pure CSS (`group-hover`/`focus-within` in Tailwind, wired in Task 9) — no JS needed for that case. This module only handles: (a) the mobile hamburger toggle, (b) the mobile dropdown-submenu toggle button, since taps have no hover state.

- [ ] **Step 1: Write the module**

Create `public/frontend/js/v2/nav-v2.js`:

```js
(function () {
  function init() {
    var toggle = document.getElementById('nav-v2-toggle');
    var menu = document.getElementById('nav-v2-menu');

    if (toggle && menu) {
      toggle.addEventListener('click', function () {
        var isOpen = menu.classList.toggle('is-open');
        toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      });
    }

    document.querySelectorAll('.nav-v2-dropdown-btn').forEach(function (btn) {
      btn.addEventListener('click', function () {
        var submenu = btn.parentElement.querySelector('.nav-v2-dropdown-menu');
        if (!submenu) return;
        var isOpen = submenu.classList.toggle('is-open');
        btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      });
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
```

- [ ] **Step 2: Verify with a standalone DOM check (no browser needed)**

```bash
cd /home/www/laravel/nobleitservices
node -e "
const fs = require('fs');
const { JSDOM } = (() => { try { return require('jsdom'); } catch (e) { return {}; } })();
if (!JSDOM) { console.log('jsdom not installed locally — skip to manual browser verification in Task 9/15'); process.exit(0); }
const dom = new JSDOM('<button id=\"nav-v2-toggle\" aria-expanded=\"false\"></button><div id=\"nav-v2-menu\"></div>', { runScripts: 'outside-only' });
const script = fs.readFileSync('public/frontend/js/v2/nav-v2.js', 'utf8');
dom.window.eval(script);
dom.window.document.dispatchEvent(new dom.window.Event('DOMContentLoaded'));
const toggle = dom.window.document.getElementById('nav-v2-toggle');
const menu = dom.window.document.getElementById('nav-v2-menu');
toggle.dispatchEvent(new dom.window.Event('click'));
console.log(menu.classList.contains('is-open') && toggle.getAttribute('aria-expanded') === 'true' ? 'PASS' : 'FAIL');
"
```

Expected: `PASS` (or the jsdom-not-installed message — in that case this task's behavior gets verified visually in Task 15's cross-page pass, which is fine, this is a 15-line script).

- [ ] **Step 3: Commit**

```bash
cd /home/www/laravel/nobleitservices
git add public/frontend/js/v2/nav-v2.js
git commit -m "Add vanilla mobile nav toggle/dropdown module for v2 pages

Co-Authored-By: Claude Sonnet 5 <noreply@anthropic.com>"
```

---

### Task 5: Carousel init module (Embla)

**Files:**
- Create: `public/frontend/js/v2/carousels-v2.js`

**Interfaces:**
- Consumes: `window.EmblaCarousel` (from Task 3's vendored file, must load before this script).
- Consumes: DOM elements `#hero-carousel-v2`, `#portfolio-carousel-v2`, `#testimonial-carousel-v2` (each an Embla "viewport" div containing a `.embla__container` child with slide children) — provided by Task 9 (hero) and Task 11/12 (portfolio/testimonial, homepage sections).
- Produces: nothing consumed elsewhere — self-contained. Also wires up `#hero-carousel-v2 .embla__dots button` (dot navigation, built by this module) and the existing `.work-prev`/`.work-next` buttons for the testimonial carousel if present.

- [ ] **Step 1: Write the module**

Create `public/frontend/js/v2/carousels-v2.js`:

```js
(function () {
  function initHero() {
    var root = document.getElementById('hero-carousel-v2');
    if (!root || typeof window.EmblaCarousel !== 'function') return;

    var embla = window.EmblaCarousel(root, { loop: true, duration: 25 });
    var dotsNode = root.querySelector('.embla__dots');

    function renderDots() {
      if (!dotsNode) return;
      dotsNode.innerHTML = '';
      embla.scrollSnapList().forEach(function (_, index) {
        var dot = document.createElement('button');
        dot.type = 'button';
        dot.setAttribute('aria-label', 'Go to slide ' + (index + 1));
        dot.addEventListener('click', function () { embla.scrollTo(index); });
        dotsNode.appendChild(dot);
      });
    }

    function updateDots() {
      if (!dotsNode) return;
      var selected = embla.selectedScrollSnap();
      Array.prototype.forEach.call(dotsNode.children, function (dot, i) {
        dot.classList.toggle('is-selected', i === selected);
      });
    }

    embla.on('init', renderDots);
    embla.on('reInit', renderDots);
    embla.on('select', updateDots);
    renderDots();
    updateDots();

    var autoplayMs = 5000;
    var timer = null;
    function startAutoplay() {
      stopAutoplay();
      timer = setInterval(function () { embla.scrollNext(); }, autoplayMs);
    }
    function stopAutoplay() {
      if (timer) clearInterval(timer);
    }
    startAutoplay();
    root.addEventListener('mouseenter', stopAutoplay);
    root.addEventListener('mouseleave', startAutoplay);
  }

  function initSimple(rootId, prevSelector, nextSelector, options) {
    var root = document.getElementById(rootId);
    if (!root || typeof window.EmblaCarousel !== 'function') return;

    var embla = window.EmblaCarousel(root, Object.assign({ loop: true, align: 'start' }, options || {}));

    if (prevSelector) {
      document.querySelectorAll(prevSelector).forEach(function (btn) {
        btn.addEventListener('click', function () { embla.scrollPrev(); });
      });
    }
    if (nextSelector) {
      document.querySelectorAll(nextSelector).forEach(function (btn) {
        btn.addEventListener('click', function () { embla.scrollNext(); });
      });
    }
  }

  function init() {
    initHero();
    initSimple('portfolio-carousel-v2', null, null, {
      slidesToScroll: 1,
      breakpoints: { '(min-width: 992px)': { align: 'start' } },
    });
    initSimple('testimonial-carousel-v2', '.work-prev', '.work-next', { slidesToScroll: 1 });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
```

- [ ] **Step 2: Verify the module doesn't throw when carousel markup is absent**

```bash
cd /home/www/laravel/nobleitservices
node -e "
const fs = require('fs');
const vm = require('vm');
const src = fs.readFileSync('public/frontend/js/v2/carousels-v2.js', 'utf8');
const sandbox = {
  window: {},
  document: { readyState: 'complete', getElementById: () => null, querySelectorAll: () => [] },
};
vm.createContext(sandbox);
try {
  vm.runInContext(src, sandbox);
  console.log('PASS: module ran with no matching DOM elements and did not throw');
} catch (e) {
  console.log('FAIL:', e.message);
}
"
```

Expected: `PASS: module ran with no matching DOM elements and did not throw`.

- [ ] **Step 3: Commit**

```bash
cd /home/www/laravel/nobleitservices
git add public/frontend/js/v2/carousels-v2.js
git commit -m "Add Embla-based carousel init module for hero/portfolio/testimonial sliders

Co-Authored-By: Claude Sonnet 5 <noreply@anthropic.com>"
```

Full interaction (autoplay, dots, swipe) gets verified visually in Task 9/15 once real carousel markup exists — a headless Node check can confirm the script loads safely but not that swipe/autoplay look right.

---

### Task 6: Typewriter module

**Files:**
- Create: `public/frontend/js/v2/typewriter-v2.js`

**Interfaces:**
- Consumes: an element `[data-typewriter]` whose child `<b>` elements are the words to cycle (mirrors the current `cd-headline`/`cd-words-wrapper` markup structure) — provided by Task 9 (`slider-v2.blade.php`).

- [ ] **Step 1: Write the module**

Create `public/frontend/js/v2/typewriter-v2.js`:

```js
(function () {
  function runTypewriter(container) {
    var words = Array.prototype.map.call(container.querySelectorAll('b'), function (el) { return el.textContent; });
    if (words.length < 2) return;

    var typeSpeed = 80;
    var deleteSpeed = 40;
    var pauseAfterType = 1500;
    var pauseAfterDelete = 300;

    var wordIndex = 0;
    var charIndex = 0;
    var deleting = false;

    function tick() {
      var word = words[wordIndex];
      if (!deleting) {
        charIndex++;
        container.textContent = word.slice(0, charIndex);
        if (charIndex === word.length) {
          deleting = true;
          setTimeout(tick, pauseAfterType);
          return;
        }
        setTimeout(tick, typeSpeed);
      } else {
        charIndex--;
        container.textContent = word.slice(0, charIndex);
        if (charIndex === 0) {
          deleting = false;
          wordIndex = (wordIndex + 1) % words.length;
          setTimeout(tick, pauseAfterDelete);
          return;
        }
        setTimeout(tick, deleteSpeed);
      }
    }

    tick();
  }

  function init() {
    document.querySelectorAll('[data-typewriter]').forEach(runTypewriter);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
```

- [ ] **Step 2: Verify the word-cycling logic in isolation**

```bash
cd /home/www/laravel/nobleitservices
node -e "
// Extract and test the core type/delete state machine without full DOM timers.
const words = ['Build Software.', 'Launch SaaS.', 'Integrate AI.'];
let wordIndex = 0, charIndex = 0, deleting = false, text = '';
function tick() {
  const word = words[wordIndex];
  if (!deleting) {
    charIndex++;
    text = word.slice(0, charIndex);
    if (charIndex === word.length) { deleting = true; return; }
  } else {
    charIndex--;
    text = word.slice(0, charIndex);
    if (charIndex === 0) { deleting = false; wordIndex = (wordIndex + 1) % words.length; return; }
  }
}
// Type out the first word fully.
for (let i = 0; i < words[0].length; i++) tick();
console.log(text === words[0] ? 'PASS: types full first word' : 'FAIL: got ' + JSON.stringify(text));
// Delete it back to empty.
tick(); // flips to deleting
for (let i = 0; i < words[0].length; i++) tick();
console.log(text === '' && wordIndex === 1 ? 'PASS: deletes and advances to next word' : 'FAIL: text=' + JSON.stringify(text) + ' wordIndex=' + wordIndex);
"
```

Expected: both lines print `PASS: ...`.

- [ ] **Step 3: Commit**

```bash
cd /home/www/laravel/nobleitservices
git add public/frontend/js/v2/typewriter-v2.js
git commit -m "Add vanilla typewriter module replacing jquery.animatedheadline

Co-Authored-By: Claude Sonnet 5 <noreply@anthropic.com>"
```

---

### Task 7: Scroll-reveal module (WOW.js replacement)

**Files:**
- Create: `public/frontend/js/v2/scroll-animate-v2.js`
- Modify: `resources/css/tailwind-v2-components.css` (add the reveal transition classes)

**Interfaces:**
- Consumes: any element with `data-reveal` attribute (replaces the current `.wow fadeInUp` pattern) — used throughout Tasks 9-14's markup.
- Produces: adds `.is-visible` class to revealed elements — the CSS in this task defines what that class does visually.

- [ ] **Step 1: Add the reveal CSS**

Append to `resources/css/tailwind-v2-components.css`:

```css
[data-reveal] {
  opacity: 0;
  transform: translateY(24px);
  transition: opacity 0.5s ease, transform 0.5s ease;
}

[data-reveal].is-visible {
  opacity: 1;
  transform: translateY(0);
}

@media (prefers-reduced-motion: reduce) {
  [data-reveal] {
    opacity: 1;
    transform: none;
    transition: none;
  }
}
```

- [ ] **Step 2: Write the module**

Create `public/frontend/js/v2/scroll-animate-v2.js`:

```js
(function () {
  function init() {
    var targets = document.querySelectorAll('[data-reveal]');
    if (!targets.length) return;

    if (!('IntersectionObserver' in window)) {
      targets.forEach(function (el) { el.classList.add('is-visible'); });
      return;
    }

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });

    targets.forEach(function (el) { observer.observe(el); });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
```

- [ ] **Step 3: Verify with jsdom-free manual check that the module doesn't throw when IntersectionObserver is unavailable**

```bash
cd /home/www/laravel/nobleitservices
node -e "
const fs = require('fs');
const vm = require('vm');
const src = fs.readFileSync('public/frontend/js/v2/scroll-animate-v2.js', 'utf8');
const el = { classList: { added: [], add(c) { this.added.push(c); } } };
const sandbox = {
  window: {},
  document: {
    readyState: 'complete',
    querySelectorAll: () => [el],
  },
};
vm.createContext(sandbox);
vm.runInContext(src, sandbox);
console.log(el.classList.added.includes('is-visible') ? 'PASS: falls back to visible when IntersectionObserver missing' : 'FAIL');
"
```

Expected: `PASS: falls back to visible when IntersectionObserver missing`.

- [ ] **Step 4: Rebuild Tailwind CSS (components file changed) and commit**

```bash
cd /home/www/laravel/nobleitservices
npm run build:tailwind-v2
git add public/frontend/js/v2/scroll-animate-v2.js resources/css/tailwind-v2-components.css public/frontend/css/tailwind-v2.css
git commit -m "Add IntersectionObserver scroll-reveal module replacing WOW.js

Co-Authored-By: Claude Sonnet 5 <noreply@anthropic.com>"
```

---

### Task 8: Circle-progress module (services page counters)

**Files:**
- Create: `public/frontend/js/v2/circle-progress-v2.js`
- Modify: `resources/css/tailwind-v2-components.css` (add the conic-gradient ring styles)

**Interfaces:**
- Consumes: elements matching `.circle-progress-v2[data-percent][data-color]` — provided by Task 14 (`services.blade.php`).
- Exact values to preserve from the current jQuery `circleProgress` config (`public/frontend/js/script.js:407-463`): SEO Service = 89% (`#3180fc` fill / `#eaf2ff` empty), Copywriting = 76% (`#f1b000` / `#fdf3d9`), PPC = 63% (`#16b4f2` / `#e7f7fe`).

- [ ] **Step 1: Add the ring CSS**

Append to `resources/css/tailwind-v2-components.css`:

```css
.circle-progress-v2 {
  --percent: 0;
  --fill: #3180fc;
  --empty: #eaf2ff;
  width: 130px;
  height: 130px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: conic-gradient(var(--fill) calc(var(--percent) * 1%), var(--empty) 0);
  transition: background 1.6s ease;
}

.circle-progress-v2__value {
  background: #fff;
  width: 104px;
  height: 104px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 700;
  font-size: 1.25rem;
}
```

- [ ] **Step 2: Write the module**

Create `public/frontend/js/v2/circle-progress-v2.js`:

```js
(function () {
  function animateRing(el) {
    var target = parseInt(el.getAttribute('data-percent'), 10) || 0;
    var fill = el.getAttribute('data-color') || '#3180fc';
    var empty = el.getAttribute('data-empty-color') || '#eaf2ff';
    var valueEl = el.querySelector('.circle-progress-v2__value');

    el.style.setProperty('--fill', fill);
    el.style.setProperty('--empty', empty);

    var duration = 1600;
    var start = null;

    function step(timestamp) {
      if (start === null) start = timestamp;
      var elapsed = timestamp - start;
      var progress = Math.min(elapsed / duration, 1);
      var current = Math.round(target * progress);
      el.style.setProperty('--percent', current);
      if (valueEl) valueEl.textContent = current + '%';
      if (progress < 1) requestAnimationFrame(step);
    }

    requestAnimationFrame(step);
  }

  function init() {
    var rings = document.querySelectorAll('.circle-progress-v2');
    if (!rings.length) return;

    if (!('IntersectionObserver' in window)) {
      rings.forEach(animateRing);
      return;
    }

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          animateRing(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.3 });

    rings.forEach(function (el) { observer.observe(el); });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
```

- [ ] **Step 3: Verify the count-up math in isolation**

```bash
node -e "
const target = 89;
const duration = 1600;
function currentAt(elapsedMs) {
  const progress = Math.min(elapsedMs / duration, 1);
  return Math.round(target * progress);
}
console.log(currentAt(0) === 0 ? 'PASS: starts at 0' : 'FAIL');
console.log(currentAt(1600) === 89 ? 'PASS: reaches target at full duration' : 'FAIL');
console.log(currentAt(800) === 45 ? 'PASS: ~halfway at half duration' : 'FAIL: got ' + currentAt(800));
"
```

Expected: three `PASS: ...` lines.

- [ ] **Step 4: Rebuild Tailwind CSS and commit**

```bash
cd /home/www/laravel/nobleitservices
npm run build:tailwind-v2
git add public/frontend/js/v2/circle-progress-v2.js resources/css/tailwind-v2-components.css public/frontend/css/tailwind-v2.css
git commit -m "Add CSS conic-gradient circle-progress module replacing jQuery circleProgress

Co-Authored-By: Claude Sonnet 5 <noreply@anthropic.com>"
```

---

### Task 9: v2 layout partials (header, nav, slider, footer)

**Files:**
- Create: `resources/views/frontend/layouts/header-v2.blade.php`
- Create: `resources/views/frontend/layouts/nav-v2.blade.php`
- Create: `resources/views/frontend/layouts/slider-v2.blade.php`
- Create: `resources/views/frontend/layouts/footer-v2.blade.php`
- Modify: `resources/css/tailwind-v2-components.css` (hero fade-slide + decorative shape positioning)

**Interfaces:**
- Consumes: `public/frontend/css/tailwind-v2.css` (Task 2), `nav-v2.js` (Task 4), `carousels-v2.js` + `embla-carousel.umd.js` (Tasks 3, 5), `typewriter-v2.js` (Task 6), `scroll-animate-v2.js` (Task 7).
- Produces: the `#nav-v2-toggle` / `#nav-v2-menu` / `.nav-v2-dropdown-btn` structure Task 4's JS expects; the `#hero-carousel-v2` structure Task 5's `initHero()` expects; the `[data-typewriter]` structure Task 6 expects; `data-reveal` attributes wired for Task 7; a new `public/frontend/js/v2/whatsapp-widget-v2.js` module (written in this task, see Step 4a) so the v2 pages carry **no jQuery at all**, matching the spec's stated goal. This is the template every later page-rewrite task follows for consistent markup conventions (button/link classes, section spacing).

`header-v2.blade.php` is `header.blade.php` (already fixed in Task 1) with the CSS `<link>` tags replaced: drop Bootstrap, Flaticon stays (out of scope), Font Awesome stays (out of scope), add `tailwind-v2.css`. Keep Google Fonts preconnect/link, the LCP preload, GA/FB Pixel/reCAPTCHA/structured-data blocks exactly as-is (out of scope).

- [ ] **Step 1: Create `header-v2.blade.php`**

Copy `resources/views/frontend/layouts/header.blade.php` to `resources/views/frontend/layouts/header-v2.blade.php`, then:
- Remove the `<link>` tags for `bootstrap.min.css`, `magnific-popup.min.css`, `nice-select.min.css`, `jquery.animatedheadline.css`, `animate.min.css`, `slick.min.css`, `style.css` (all Bootstrap-era CSS not used by v2 pages).
- Keep: Google Fonts preconnect + stylesheet, `flaticon.min.css`, `fontawesome-5.14.0.min.css`, the homepage LCP `<link rel="preload">` block, the `floating-wpp.min.css` link, GA script, FB Pixel script (already fixed), reCAPTCHA script tag, both JSON-LD blocks.
- Add, right before `</head>`: `<link rel="stylesheet" href="{{ asset('frontend/css/tailwind-v2.css') }}?v={{ @filemtime(public_path('frontend/css/tailwind-v2.css')) }}">`

- [ ] **Step 2: Create `nav-v2.blade.php`**

Create `resources/views/frontend/layouts/nav-v2.blade.php`:

```blade
<body class="bg-white text-ink">
<div class="min-h-screen flex flex-col">

<header class="border-b border-border-soft">
    <div class="container-nb flex items-center justify-between py-4">
        <a href="/" class="shrink-0">
            <img src="{{ asset('frontend/images/logos/logo-nav.png') }}" width="450" height="148" class="h-11 w-auto" alt="Noble IT Services" title="Noble IT Services">
        </a>

        <nav class="hidden lg:flex items-center gap-8">
            <a href="/" class="hover:text-accent">Home</a>
            <div class="relative group">
                <a href="/services" class="hover:text-accent">Services</a>
                <ul class="absolute left-0 top-full mt-2 min-w-[260px] bg-white border border-border-soft rounded shadow-lg py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible focus-within:opacity-100 focus-within:visible transition">
                    <li><a href="/custom-software" class="block px-4 py-2 hover:bg-surface-alt">Custom Software</a></li>
                    <li><a href="/saas-development" class="block px-4 py-2 hover:bg-surface-alt">SaaS Development</a></li>
                    <li><a href="/ai-integration" class="block px-4 py-2 hover:bg-surface-alt">AI Integration</a></li>
                    <li><a href="/services#web-mobile-applications" class="block px-4 py-2 hover:bg-surface-alt">Web &amp; Mobile Applications</a></li>
                    <li><a href="/api-integration" class="block px-4 py-2 hover:bg-surface-alt">API &amp; System Integration</a></li>
                    <li><a href="/ui-ux-design" class="block px-4 py-2 hover:bg-surface-alt">UI/UX &amp; Product Design</a></li>
                    <li><a href="/cloud-deployment" class="block px-4 py-2 hover:bg-surface-alt">Cloud &amp; Deployment</a></li>
                    <li><a href="/services#digital-growth" class="block px-4 py-2 hover:bg-surface-alt">Digital Growth</a></li>
                </ul>
            </div>
            <a href="/products" class="hover:text-accent">Products</a>
            <a href="/our-work" class="hover:text-accent">Our Work</a>
            <a href="/about-us" class="hover:text-accent">About</a>
            <a href="/contact-us" class="hover:text-accent">Contact</a>
        </nav>

        <a href="/start-a-project" class="hidden lg:inline-flex theme-btn">Start a Project <i class="fas fa-angle-double-right"></i></a>

        <button id="nav-v2-toggle" type="button" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="nav-v2-menu" class="lg:hidden p-2">
            <span class="block w-6 h-0.5 bg-ink mb-1.5"></span>
            <span class="block w-6 h-0.5 bg-ink mb-1.5"></span>
            <span class="block w-6 h-0.5 bg-ink"></span>
        </button>
    </div>

    <div id="nav-v2-menu" class="lg:hidden hidden data-[state]:block border-t border-border-soft">
        <nav class="container-nb flex flex-col py-4">
            <a href="/" class="py-2">Home</a>
            <div>
                <div class="flex items-center justify-between py-2">
                    <a href="/services">Services</a>
                    <button type="button" class="nav-v2-dropdown-btn p-2" aria-label="Toggle Services submenu" aria-expanded="false"><i class="fas fa-chevron-down"></i></button>
                </div>
                <ul class="nav-v2-dropdown-menu hidden pl-4">
                    <li><a href="/custom-software" class="block py-1.5">Custom Software</a></li>
                    <li><a href="/saas-development" class="block py-1.5">SaaS Development</a></li>
                    <li><a href="/ai-integration" class="block py-1.5">AI Integration</a></li>
                    <li><a href="/services#web-mobile-applications" class="block py-1.5">Web &amp; Mobile Applications</a></li>
                    <li><a href="/api-integration" class="block py-1.5">API &amp; System Integration</a></li>
                    <li><a href="/ui-ux-design" class="block py-1.5">UI/UX &amp; Product Design</a></li>
                    <li><a href="/cloud-deployment" class="block py-1.5">Cloud &amp; Deployment</a></li>
                    <li><a href="/services#digital-growth" class="block py-1.5">Digital Growth</a></li>
                </ul>
            </div>
            <a href="/products" class="py-2">Products</a>
            <a href="/our-work" class="py-2">Our Work</a>
            <a href="/about-us" class="py-2">About</a>
            <a href="/contact-us" class="py-2">Contact</a>
            <a href="/start-a-project" class="theme-btn mt-4 justify-center">Start a Project <i class="fas fa-angle-double-right"></i></a>
        </nav>
    </div>
</header>
```

Note: `.theme-btn` and `.container-nb` come from the existing `style.css`/`tailwind-v2.css` respectively — `style.css` is NOT linked in `header-v2.blade.php` (Step 1 removed it), so `.theme-btn` must be added as a Tailwind component class. Add to `resources/css/tailwind-v2-components.css`:

```css
.theme-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 0.5rem;
  padding: 0.75rem 1.75rem;
  border-radius: 5px;
  background: var(--color-accent);
  color: #fff;
  font-weight: 700;
  transition: opacity 0.3s ease;
}
.theme-btn:hover {
  opacity: 0.88;
}
```

The mobile menu's `hidden`/`is-open` toggle (Task 4's JS) needs a matching Tailwind rule — replace the `data-[state]:block` placeholder above with a plain rule, since `is-open` isn't a Tailwind arbitrary-variant-friendly pattern for a plain class toggle. Fix the `#nav-v2-menu` line to just `class="lg:hidden hidden border-t border-border-soft"` and add to `tailwind-v2-components.css`:

```css
#nav-v2-menu.is-open {
  display: block;
}
.nav-v2-dropdown-menu.is-open {
  display: block;
}
```

- [ ] **Step 3: Create `slider-v2.blade.php`**

Create `resources/views/frontend/layouts/slider-v2.blade.php`:

```blade
<section class="relative bg-ink text-white overflow-hidden">
    <div id="hero-carousel-v2" class="overflow-hidden">
        <div class="embla__container flex">
            <div class="min-w-0 flex-[0_0_100%] bg-cover bg-center py-32" style="background-image:url({{ asset('frontend/images/slider/slide1.jpg') }})">
                <div class="container-nb">
                    <span class="text-accent-cyan uppercase text-sm tracking-wide">Software, SaaS &amp; AI Solutions for Modern Businesses</span>
                    <h1 class="text-4xl md:text-5xl font-bold mt-4 max-w-2xl" data-typewriter>
                        <b class="hidden">Build Software.</b>
                        <b class="hidden">Launch SaaS.</b>
                        <b class="hidden">Integrate AI.</b>
                    </h1>
                    <p class="mt-4 max-w-xl text-white/80">We design and develop custom software, scalable SaaS platforms and AI-powered solutions that turn business ideas into real digital products.</p>
                    <div class="flex flex-wrap gap-4 mt-8">
                        <a href="/start-a-project" class="theme-btn">Start a Project <i class="fas fa-angle-double-right"></i></a>
                        <a href="/our-work" class="theme-btn" style="background:transparent;border:1px solid #fff;">Explore Our Work <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="min-w-0 flex-[0_0_100%] bg-cover bg-center py-32" style="background-image:url({{ asset('frontend/images/slider/slide2.jpg') }})">
                <div class="container-nb">
                    <span class="text-accent-cyan uppercase text-sm tracking-wide">Have a SaaS Idea? We Can Build It.</span>
                    <h2 class="text-4xl md:text-5xl font-bold mt-4 max-w-2xl">Scalable SaaS Platforms, From Idea to Launch</h2>
                    <p class="mt-4 max-w-xl text-white/80">Product planning, UI/UX, architecture, backend/frontend development, billing and deployment &mdash; CleanPilot and BotWave are proof this isn't aspirational.</p>
                    <div class="flex flex-wrap gap-4 mt-8">
                        <a href="/start-a-project" class="theme-btn">Start a Project <i class="fas fa-angle-double-right"></i></a>
                        <a href="/products" class="theme-btn" style="background:transparent;border:1px solid #fff;">See Our Products <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="min-w-0 flex-[0_0_100%] bg-cover bg-center py-32" style="background-image:url({{ asset('frontend/images/slider/slide3.jpg') }})">
                <div class="container-nb">
                    <span class="text-accent-cyan uppercase text-sm tracking-wide">Make Your Software Smarter</span>
                    <h2 class="text-4xl md:text-5xl font-bold mt-4 max-w-2xl">AI Integration for Real Business Impact</h2>
                    <p class="mt-4 max-w-xl text-white/80">AI chatbots, AI agents, AI search, document intelligence and LLM integrations &mdash; as built into BotWave, VerifyMe+ and ScanOriginal.</p>
                    <div class="flex flex-wrap gap-4 mt-8">
                        <a href="/start-a-project" class="theme-btn">Start a Project <i class="fas fa-angle-double-right"></i></a>
                        <a href="/our-work" class="theme-btn" style="background:transparent;border:1px solid #fff;">View Our Work <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="embla__dots flex gap-2 justify-center pb-6"></div>
    </div>
</section>
```

Add to `resources/css/tailwind-v2-components.css` (dot styling + typewriter cursor):

```css
.embla__dots button {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  border: 1px solid #fff;
  background: transparent;
}
.embla__dots button.is-selected {
  background: #fff;
}
[data-typewriter] {
  border-right: 2px solid var(--color-accent-cyan);
}
```

- [ ] **Step 4a: Write a vanilla WhatsApp widget module (replaces jQuery + floating-wpp.min.js)**

The current widget (`floating-wpp.min.js`, wired via jQuery in `footer.blade.php`) is a floating circular button that opens a small popup with a header, a message, and a click-through to a `wa.me` link — simple enough to hand-roll, and doing so means the v2 pages need zero jQuery, delivering on the spec's "jQuery removed entirely" goal precisely (this was missed during brainstorming — the WhatsApp widget was marked out-of-scope for *content/behavior* changes, but its jQuery dependency was overlooked; replacing the plugin with an equivalent vanilla version keeps the widget's behavior identical while actually satisfying the approved spec).

Create `public/frontend/js/v2/whatsapp-widget-v2.js`:

```js
(function () {
  var PHONE = '2347031525786';
  var POPUP_MESSAGE = 'Hello, how can we help you?';
  var PREFILLED_MESSAGE = "I'd like a website";

  function build() {
    var mount = document.getElementById('myButton');
    if (!mount) return;

    var wrap = document.createElement('div');
    wrap.className = 'whatsapp-widget-v2';

    var button = document.createElement('button');
    button.type = 'button';
    button.className = 'whatsapp-widget-v2__button';
    button.setAttribute('aria-label', 'Chat with us on WhatsApp');
    button.innerHTML = '<img src="' + mount.dataset.icon + '" alt="" width="28" height="28">';

    var popup = document.createElement('div');
    popup.className = 'whatsapp-widget-v2__popup';
    popup.innerHTML =
      '<div class="whatsapp-widget-v2__popup-header">Welcome to Noble IT Services!' +
      '<button type="button" class="whatsapp-widget-v2__close" aria-label="Close">&times;</button></div>' +
      '<div class="whatsapp-widget-v2__popup-body">' + POPUP_MESSAGE + '</div>' +
      '<a class="whatsapp-widget-v2__popup-cta" target="_blank" rel="noopener" href="https://wa.me/' + PHONE + '?text=' + encodeURIComponent(PREFILLED_MESSAGE) + '">Start Chat</a>';

    wrap.appendChild(popup);
    wrap.appendChild(button);
    mount.appendChild(wrap);

    button.addEventListener('click', function () {
      popup.classList.toggle('is-open');
    });
    popup.querySelector('.whatsapp-widget-v2__close').addEventListener('click', function () {
      popup.classList.remove('is-open');
    });

    setTimeout(function () { popup.classList.add('is-open'); }, 1500);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', build);
  } else {
    build();
  }
})();
```

Add to `resources/css/tailwind-v2-components.css`:

```css
.whatsapp-widget-v2 {
  position: fixed;
  bottom: 20px;
  left: 20px;
  z-index: 999;
}
.whatsapp-widget-v2__button {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background: crimson;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 14px rgba(0,0,0,0.25);
}
.whatsapp-widget-v2__popup {
  display: none;
  position: absolute;
  bottom: 72px;
  left: 0;
  width: 260px;
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 8px 24px rgba(0,0,0,0.2);
  overflow: hidden;
}
.whatsapp-widget-v2__popup.is-open {
  display: block;
}
.whatsapp-widget-v2__popup-header {
  background: darkgreen;
  color: #fff;
  padding: 10px 14px;
  font-weight: 700;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.whatsapp-widget-v2__close {
  background: none;
  border: none;
  color: #fff;
  font-size: 1.25rem;
  line-height: 1;
  cursor: pointer;
}
.whatsapp-widget-v2__popup-body {
  padding: 14px;
  color: var(--color-ink);
}
.whatsapp-widget-v2__popup-cta {
  display: block;
  text-align: center;
  background: #25D366;
  color: #fff;
  padding: 10px;
  font-weight: 700;
  text-decoration: none;
}
```

- [ ] **Step 4b: Verify the module builds its DOM without throwing when the mount point is absent**

```bash
cd /home/www/laravel/nobleitservices
node -e "
const fs = require('fs');
const vm = require('vm');
const src = fs.readFileSync('public/frontend/js/v2/whatsapp-widget-v2.js', 'utf8');
const sandbox = { window: {}, document: { readyState: 'complete', getElementById: () => null } };
vm.createContext(sandbox);
try {
  vm.runInContext(src, sandbox);
  console.log('PASS: module ran with no mount point and did not throw');
} catch (e) {
  console.log('FAIL:', e.message);
}
"
```

Expected: `PASS: module ran with no mount point and did not throw`.

- [ ] **Step 5: Create `footer-v2.blade.php`**

Create `resources/views/frontend/layouts/footer-v2.blade.php` — same content/copy as the existing `footer.blade.php`, Tailwind classes instead of Bootstrap, **no jQuery** (uses the vanilla `whatsapp-widget-v2.js` from Step 4a instead):

```blade
<footer class="bg-surface-alt pt-20 pb-10">
    <div class="container-nb">
        <div class="flex flex-wrap justify-between gap-12">
            <div class="w-full lg:w-1/3" data-reveal>
                <a href="/"><img src="{{ asset('frontend/images/logos/logo.png') }}" width="700" height="281" loading="lazy" class="h-10 w-auto mb-6" alt="Noble IT Services"></a>
                <p class="text-ink/70">Noble IT Services builds custom software, SaaS platforms and AI-powered solutions for businesses and entrepreneurs &mdash; from early idea through launch and continuous improvement.</p>
                <div class="flex gap-4 mt-6">
                    <a href="https://facebook.com/noblecontracts" aria-label="Facebook" target="_blank" rel="noopener"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com/noble_somto" aria-label="Twitter" target="_blank" rel="noopener"><i class="fab fa-twitter"></i></a>
                    <a href="https://linkedin.com/in/somtochukwu-noble-ifejika" aria-label="LinkedIn" target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a>
                    <a href="https://instagram.com/noblesomto" aria-label="Instagram" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="w-full sm:w-1/2 lg:w-1/4" data-reveal>
                <h4 class="font-bold mb-4">Quick Links</h4>
                <ul class="space-y-2 text-ink/70">
                    <li><a href="/custom-software" class="hover:text-accent">Custom Software</a></li>
                    <li><a href="/saas-development" class="hover:text-accent">SaaS Development</a></li>
                    <li><a href="/ai-integration" class="hover:text-accent">AI Integration</a></li>
                    <li><a href="/services#web-mobile-applications" class="hover:text-accent">Web &amp; Mobile Applications</a></li>
                    <li><a href="/api-integration" class="hover:text-accent">API &amp; System Integration</a></li>
                    <li><a href="/ui-ux-design" class="hover:text-accent">UI/UX &amp; Product Design</a></li>
                    <li><a href="/cloud-deployment" class="hover:text-accent">Cloud &amp; Deployment</a></li>
                    <li><a href="/services#digital-growth" class="hover:text-accent">Digital Growth</a></li>
                    <li><a href="/products" class="hover:text-accent">Products</a></li>
                    <li><a href="/our-work" class="hover:text-accent">Our Work</a></li>
                    <li><a href="/sales-lead" class="hover:text-accent">Nigeria Email &amp; GSM Database</a></li>
                </ul>
            </div>
            <div class="w-full sm:w-1/2 lg:w-1/4" data-reveal>
                <h4 class="font-bold mb-4">Newsletter</h4>
                <p class="text-ink/70 mb-4">Subscribe for insights on software, SaaS, AI and technology.</p>
                <form action="#" class="flex flex-col gap-3">
                    <label for="newsletter-email-v2" class="sr-only">Email address</label>
                    <input type="email" id="newsletter-email-v2" placeholder="Enter email" required class="border border-border-soft rounded px-4 py-2">
                    <button class="theme-btn justify-center">Subscribe Now <i class="fas fa-angle-double-right"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="border-t border-border-soft mt-12 pt-6">
        <p class="text-center text-ink/60">&copy; Copyright {{ date('Y') }} Noble IT Services. All right reserved</p>
    </div>
</footer>

<button id="scroll-top-v2" aria-label="Scroll to top" class="fixed bottom-6 right-6 w-11 h-11 rounded-full bg-accent text-white hidden items-center justify-center shadow-lg">
    <i class="fas fa-angle-double-up"></i>
</button>
<div id="myButton" data-icon="{{ asset('frontend/images/whatsapp.svg') }}"></div>
</div><!-- /min-h-screen flex flex-col from nav-v2.blade.php -->

<script src="{{ asset('frontend/js/vendor/embla-carousel.umd.js') }}"></script>
<script src="{{ asset('frontend/js/v2/nav-v2.js') }}"></script>
<script src="{{ asset('frontend/js/v2/carousels-v2.js') }}"></script>
<script src="{{ asset('frontend/js/v2/typewriter-v2.js') }}"></script>
<script src="{{ asset('frontend/js/v2/scroll-animate-v2.js') }}"></script>
<script src="{{ asset('frontend/js/v2/circle-progress-v2.js') }}"></script>
<script src="{{ asset('frontend/js/v2/whatsapp-widget-v2.js') }}"></script>
<script>
document.getElementById('scroll-top-v2').addEventListener('click', function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});
window.addEventListener('scroll', function () {
    document.getElementById('scroll-top-v2').classList.toggle('flex', window.scrollY > 400);
    document.getElementById('scroll-top-v2').classList.toggle('hidden', window.scrollY <= 400);
});
</script>
</body>
</html>
```

No jQuery anywhere in this file — the v2 pages load zero jQuery, matching the spec's stated goal exactly.

- [ ] **Step 6: Rebuild Tailwind (new classes used in the partials) and verify all 4 files compile as valid Blade**

```bash
cd /home/www/laravel/nobleitservices
npm run build:tailwind-v2
php artisan view:clear
php artisan view:cache
```

Expected: `Blade templates cached successfully.` with no errors. Run `php artisan view:clear` again afterward to leave no stale cache for other work.

- [ ] **Step 7: Commit**

```bash
cd /home/www/laravel/nobleitservices
git add resources/views/frontend/layouts/header-v2.blade.php resources/views/frontend/layouts/nav-v2.blade.php resources/views/frontend/layouts/slider-v2.blade.php resources/views/frontend/layouts/footer-v2.blade.php resources/css/tailwind-v2-components.css public/frontend/css/tailwind-v2.css public/frontend/js/v2/whatsapp-widget-v2.js
git commit -m "Add v2 (Tailwind/vanilla) header, nav, hero slider, and footer layouts

Co-Authored-By: Claude Sonnet 5 <noreply@anthropic.com>"
```

These 4 layout files aren't wired into any real page yet — Task 10 does that for the homepage (the first page to actually `@include` them), which is also the first point real visual verification is possible.

---

### Task 10: Homepage — hero, trust bar, what-we-do, SaaS/AI pitch sections

**Files:**
- Modify: `resources/views/frontend/index.blade.php:1-203` (replace layout includes and these 4 sections)

**Interfaces:**
- Consumes: `layouts/header-v2.blade.php`, `layouts/nav-v2.blade.php`, `layouts/slider-v2.blade.php` (Task 9).

- [ ] **Step 1: Swap layout includes**

Replace lines 1-3:
```blade
@include('frontend.layouts.header')
@include('frontend.layouts.nav')
@include('frontend.layouts.slider')
```
with:
```blade
@include('frontend.layouts.header-v2')
@include('frontend.layouts.nav-v2')
@include('frontend.layouts.slider-v2')
```

- [ ] **Step 2: Convert the Trust & Credibility Bar (current lines 5-38)**

Replace with:
```blade
<section class="py-16 bg-surface-alt">
    <div class="container-nb">
        <div class="flex flex-wrap justify-center gap-8 text-center">
            <div class="w-full sm:w-1/2 md:w-1/4" data-reveal>
                <i class="flaticon-startup text-3xl text-accent"></i>
                <h5 class="mt-4 font-semibold">11+ Years in Software Development</h5>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4" data-reveal>
                <i class="flaticon-online text-3xl text-accent"></i>
                <h5 class="mt-4 font-semibold">Products Built &amp; Operated</h5>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4" data-reveal>
                <i class="flaticon-target text-3xl text-accent"></i>
                <h5 class="mt-4 font-semibold">Business-Focused Engineering</h5>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4" data-reveal>
                <i class="flaticon-global text-3xl text-accent"></i>
                <h5 class="mt-4 font-semibold">Nigeria &middot; UK &middot; International</h5>
            </div>
        </div>
    </div>
</section>
```

(The Bootstrap version's decorative `counter-bg.png` background is dropped here — `bg-surface-alt` gives the section equivalent visual separation without an extra background-image request; acceptable under the "minor differences OK" fidelity tolerance. Note this decision for Task 15's review.)

- [ ] **Step 3: Convert "What We Do" (current lines 41-93)**

Replace with:
```blade
<section class="py-20">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-16" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">What We Do</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">Technology Built Around Your Business</h2>
            <p class="mt-5 text-ink/70">We help businesses, entrepreneurs and organisations design, build and evolve digital products. Whether you are starting from an idea, replacing an outdated system or adding AI to an existing platform, we provide the technology and engineering expertise to take it from concept to production.</p>
        </div>
        <div class="flex flex-wrap gap-8 justify-center">
            @foreach ([
                ['icon' => 'flaticon-coding-2', 'title' => 'Custom Software', 'href' => '/custom-software', 'text' => 'Purpose-built applications around business processes and workflows.'],
                ['icon' => 'flaticon-online', 'title' => 'SaaS Platforms', 'href' => '/saas-development', 'text' => 'Scalable subscription products designed to launch, grow and evolve.'],
                ['icon' => 'flaticon-idea', 'title' => 'AI Integration', 'href' => '/ai-integration', 'text' => 'Practical AI that improves products, automates workflows and enhances customer experiences.'],
                ['icon' => 'flaticon-app-development', 'title' => 'Web & Mobile Applications', 'href' => '/web-development', 'text' => 'Modern applications designed for performance and usability.'],
                ['icon' => 'flaticon-web-programming', 'title' => 'API & System Integration', 'href' => '/api-integration', 'text' => 'Connect payments, communication platforms, CRMs, accounting systems and other services.'],
                ['icon' => 'flaticon-technical-support', 'title' => 'Cloud & Deployment', 'href' => '/cloud-deployment', 'text' => 'Reliable production infrastructure and deployment.'],
            ] as $item)
            <div class="w-full sm:w-[calc(50%-1rem)] lg:w-[calc(33.333%-1.4rem)] border border-border-soft rounded-lg p-8" data-reveal>
                <div class="text-3xl text-accent mb-4"><i class="{{ $item['icon'] }}"></i></div>
                <h5 class="font-bold text-lg"><a href="{{ $item['href'] }}" class="hover:text-accent">{{ $item['title'] }}</a></h5>
                <p class="mt-2 text-ink/70">{{ $item['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
```

- [ ] **Step 4: Convert "SaaS Pitch Block" (current lines 96-146)**

Replace with:
```blade
<section class="py-20">
    <div class="container-nb">
        <div class="flex flex-wrap items-center justify-between gap-12">
            <div class="w-full lg:w-5/12" data-reveal>
                <img src="{{ asset('frontend/images/about/about-us.jpg') }}" width="450" height="666" loading="lazy" decoding="async" class="rounded-lg w-full" alt="Have a SaaS idea? We can build it">
            </div>
            <div class="w-full lg:w-1/2" data-reveal>
                <span class="text-accent uppercase text-sm font-semibold">SaaS Development</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-3">Have a SaaS Idea? Let's Build It.</h2>
                <p class="mt-5 text-ink/70">From an early concept to a production-ready SaaS platform, we handle the technology required to turn your idea into a real product. We can help with product architecture, user experience, development, payments, integrations, AI capabilities, deployment and ongoing improvement.</p>
                <div class="flex flex-wrap gap-x-12 gap-y-2 mt-6">
                    <ul class="space-y-1 text-ink/70">
                        <li>Product planning</li>
                        <li>UI/UX</li>
                        <li>Architecture</li>
                        <li>Backend/frontend development</li>
                        <li>Authentication</li>
                    </ul>
                    <ul class="space-y-1 text-ink/70">
                        <li>Subscription billing</li>
                        <li>Admin dashboards</li>
                        <li>APIs</li>
                        <li>Third-party integrations</li>
                        <li>Deployment</li>
                    </ul>
                </div>
                <p class="font-bold mt-6 mb-2">Recent SaaS Products</p>
                <ul class="space-y-1 text-ink/70 mb-6">
                    <li><a href="/products#botwave" class="text-signal-text hover:underline">BotWave</a> &mdash; AI-powered customer support</li>
                    <li><a href="/products#cleanpilot" class="text-signal-text hover:underline">CleanPilot</a> &mdash; Business operating platform for cleaning companies</li>
                    <li><a href="/our-work#marketplace-group" class="text-signal-text hover:underline">Marketplace Group</a> &mdash; Multi-country marketplace infrastructure</li>
                </ul>
                <div class="flex flex-wrap gap-4">
                    <a href="/start-a-project" class="theme-btn">Start a Project <i class="fas fa-angle-double-right"></i></a>
                    <a href="/saas-development" class="theme-btn" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">Explore Our SaaS Work <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
```

- [ ] **Step 5: Rebuild Tailwind CSS**

```bash
cd /home/www/laravel/nobleitservices
npm run build:tailwind-v2
```

- [ ] **Step 6: Manual verification — render and inspect**

```bash
cd /home/www/laravel/nobleitservices
php artisan view:clear
(php artisan serve --port=8962 > /tmp/serve-verify.log 2>&1 &)
sleep 2
curl -s -o /tmp/homepage-v2-check.html -w "HTTP %{http_code}\n" http://127.0.0.1:8962/
grep -c "hero-carousel-v2\|nav-v2-toggle\|data-typewriter\|tailwind-v2.css" /tmp/homepage-v2-check.html
kill -9 $(pgrep -f "artisan serve --port=8962")
rm -f /tmp/homepage-v2-check.html /tmp/serve-verify.log
```

Expected: HTTP 200, and the grep count confirms all 4 markers are present in the rendered HTML (proves the v2 layout + this task's sections are actually wired in, not just saved to disk).

Then, since this task changes visible layout: open the page in a real browser (or use the `claude-in-chrome` tools if available) at 375px, 768px, and 1440px widths and visually compare against the current live homepage for: hero headline/typewriter cycling, hero carousel autoplay + dots, trust bar icons, "What We Do" 6-card grid, SaaS pitch section image + two-column list. Confirm the mobile nav hamburger opens/closes and the Services dropdown works both by hover (desktop) and tap (mobile).

- [ ] **Step 7: Commit**

```bash
cd /home/www/laravel/nobleitservices
git add resources/views/frontend/index.blade.php public/frontend/css/tailwind-v2.css
git commit -m "Migrate homepage hero/trust-bar/what-we-do/SaaS-pitch sections to Tailwind v2

Co-Authored-By: Claude Sonnet 5 <noreply@anthropic.com>"
```

---

### Task 11: Homepage — AI pitch, products, portfolio, tech stack, process sections

**Files:**
- Modify: `resources/views/frontend/index.blade.php` (current lines 148-452 — AI Pitch Block, Products We've Built, Client Work carousel, Tech Stack, Process)

**Interfaces:**
- Produces: `#portfolio-carousel-v2` structure that Task 5's `initSimple('portfolio-carousel-v2', ...)` call expects (an Embla viewport div containing `.embla__container` with one child per slide).

- [ ] **Step 1: Convert "AI Pitch Block" (current lines 148-203)**

Same card-grid pattern as Task 10 Step 3, dark variant. Replace with:
```blade
<section class="py-20 bg-ink text-white">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-16" data-reveal>
            <span class="text-accent-cyan uppercase text-sm font-semibold">AI Solutions</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">AI That Solves Real Problems</h2>
            <p class="mt-5 text-white/70">AI is most valuable when it improves the way a business operates. We integrate AI into software products, workflows and customer experiences &mdash; from intelligent assistants and automated processes to document analysis, AI search and LLM-powered applications, as built into BotWave, VerifyMe+ and ScanOriginal.</p>
            <a href="/ai-integration" class="theme-btn mt-6" style="background:transparent;border:1px solid #fff;">Explore AI Solutions <i class="fas fa-angle-double-right"></i></a>
        </div>
        <div class="flex flex-wrap gap-8 justify-center">
            @foreach ([
                ['icon' => 'flaticon-technical-support', 'title' => 'AI Assistants', 'text' => 'Intelligent conversational experiences for websites, applications and messaging platforms.'],
                ['icon' => 'flaticon-settings', 'title' => 'AI Agents', 'text' => 'Automated systems capable of handling defined business tasks and workflows.'],
                ['icon' => 'flaticon-search-location', 'title' => 'AI Search', 'text' => 'Smarter search and information retrieval powered by AI.'],
                ['icon' => 'flaticon-checklist', 'title' => 'Document Intelligence', 'text' => 'Extract, analyse and understand information from business documents.'],
                ['icon' => 'flaticon-optimization', 'title' => 'AI Automation', 'text' => 'Reduce repetitive work by connecting AI to business processes.'],
                ['icon' => 'flaticon-web-programming', 'title' => 'LLM Integration', 'text' => 'Integrate modern language models where they create genuine business value.'],
            ] as $item)
            <div class="w-full sm:w-[calc(50%-1rem)] lg:w-[calc(33.333%-1.4rem)] border border-white/15 rounded-lg p-8" data-reveal>
                <div class="text-3xl text-accent-cyan mb-4"><i class="{{ $item['icon'] }}"></i></div>
                <h5 class="font-bold text-lg">{{ $item['title'] }}</h5>
                <p class="mt-2 text-white/70">{{ $item['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
```

- [ ] **Step 2: Convert "Products We've Built" (current lines 205-248)**

```blade
<section class="py-20">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-16" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Proof, Not Promises</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">Products We've Built</h2>
            <p class="mt-5 text-ink/70">We build and operate our own digital products, giving us first-hand experience taking software from concept through development, deployment and continuous improvement.</p>
        </div>
        <div class="flex flex-wrap gap-4 justify-center">
            @foreach ([
                ['href' => '/products#botwave', 'pill' => 'Live — Free Trial', 'title' => 'BotWave', 'text' => 'AI-powered customer support bots (WhatsApp/Telegram/website).'],
                ['href' => '/products#verifyme-plus', 'pill' => 'Live / Evolving', 'title' => 'VerifyMe+', 'text' => 'AI-assisted scam-reporting platform for Nigeria.'],
                ['href' => '/products#scanoriginal', 'pill' => 'Active MVP Development', 'title' => 'ScanOriginal', 'text' => 'Anti-counterfeit verification PWA.'],
                ['href' => '/products#cleanpilot', 'pill' => 'Live', 'title' => 'CleanPilot', 'text' => 'SaaS operating system for UK cleaning businesses.'],
            ] as $item)
            <a href="{{ $item['href'] }}" class="block w-full sm:w-[calc(50%-0.5rem)] lg:w-[calc(25%-0.75rem)] border border-border-soft rounded-lg p-6 no-underline text-ink hover:border-accent" data-reveal>
                <span class="inline-block text-xs font-semibold px-3 py-1 rounded-full bg-accent/10 text-accent">{{ $item['pill'] }}</span>
                <h5 class="mt-3 font-bold">{{ $item['title'] }}</h5>
                <p class="mt-1 text-ink/70">{{ $item['text'] }}</p>
            </a>
            @endforeach
        </div>
        <div class="text-center mt-10">
            <a href="/products" class="theme-btn" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">See All Products <i class="fas fa-angle-double-right"></i></a>
        </div>
    </div>
</section>
```

- [ ] **Step 3: Convert "Client Work" carousel (current lines 251-319) — wires the portfolio Embla carousel**

```blade
<section class="pt-12 pb-20">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-12" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Client Work</span>
            <h3 class="text-2xl md:text-3xl font-bold mt-3">Platforms We've Delivered for Clients</h3>
            <p class="mt-5 text-ink/70">We've helped businesses turn ideas, services and existing processes into modern digital experiences and software platforms. From property and media platforms to marketplaces and service-booking systems, our work is designed around how each business operates.</p>
        </div>
    </div>
    <div id="portfolio-carousel-v2" class="overflow-hidden">
        <div class="embla__container flex gap-6 px-4">
            @foreach ([
                ['img' => 'oracletv.jpg', 'w' => 900, 'h' => 471, 'alt' => 'Oraclefilms TV', 'href' => '/our-work#oraclefilms-tv', 'title' => 'Oraclefilms TV', 'cat' => 'Media / Entertainment Platform'],
                ['img' => 'jjhomes.jpg', 'w' => 900, 'h' => 433, 'alt' => 'JJ Homes London', 'href' => '/our-work#jj-homes-london', 'title' => 'JJ Homes London', 'cat' => 'Property / Real Estate Platform'],
                ['img' => 'marketplace.jpg', 'w' => 900, 'h' => 434, 'alt' => 'Marketplace Naija/Ghana', 'href' => '/our-work#marketplace-group', 'title' => 'Marketplace Naija/Ghana', 'cat' => 'Classifieds Platform'],
            ] as $item)
            <div class="min-w-0 flex-[0_0_85%] sm:flex-[0_0_45%] lg:flex-[0_0_30%]">
                <div class="relative rounded-lg overflow-hidden group">
                    <img src="{{ asset('frontend/images/portfolio/' . $item['img']) }}" width="{{ $item['w'] }}" height="{{ $item['h'] }}" loading="lazy" decoding="async" alt="{{ $item['alt'] }}" class="w-full">
                    <a href="{{ $item['href'] }}" class="absolute inset-0 flex items-center justify-center bg-ink/0 group-hover:bg-ink/40 transition text-white opacity-0 group-hover:opacity-100"><i class="far fa-arrow-right text-2xl"></i></a>
                </div>
                <h4 class="mt-4"><a href="{{ $item['href'] }}" class="hover:text-accent">{{ $item['title'] }}</a></h4>
                <span class="text-ink/60 text-sm">{{ $item['cat'] }}</span>
            </div>
            @endforeach
            <div class="min-w-0 flex-[0_0_85%] sm:flex-[0_0_45%] lg:flex-[0_0_30%]">
                <div class="relative rounded-lg overflow-hidden bg-ink flex items-center justify-center" style="min-height:250px;">
                    <i class="fas fa-bolt text-4xl text-accent-cyan"></i>
                    <a href="/our-work#quickerrands" class="absolute inset-0 flex items-center justify-center bg-ink/0 hover:bg-ink/40 transition text-white opacity-0 hover:opacity-100"><i class="far fa-arrow-right text-2xl"></i></a>
                </div>
                <h4 class="mt-4"><a href="/our-work#quickerrands" class="hover:text-accent">QuickErrands</a></h4>
                <span class="text-ink/60 text-sm">On-Demand Services Booking Platform</span>
            </div>
        </div>
    </div>
    <div class="container-nb text-center mt-10">
        <a href="/our-work" class="theme-btn" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">View All Our Work <i class="fas fa-angle-double-right"></i></a>
    </div>
</section>
```

- [ ] **Step 4: Convert "Tech Stack" (current lines 321-390) and "Process" (current lines 392-452)**

Same repeating-card pattern as Steps 1-2 (use the grid classes `flex flex-wrap gap-8` with `w-full sm:w-1/2 lg:w-1/3` items for Tech Stack's 6 groups, and `w-full sm:w-1/2 lg:w-1/4` for Process's 7 steps). Preserve every heading/list-item/icon-class exactly as the current file (Tech Stack lists: Backend/Frontend/Mobile/Databases/Cloud/AI; Process steps: Discover/Plan/Design/Build/Integrate/Launch/Grow) — do not invent new copy.

- [ ] **Step 5: Rebuild Tailwind CSS**

```bash
cd /home/www/laravel/nobleitservices
npm run build:tailwind-v2
```

- [ ] **Step 6: Verify — portfolio carousel specifically**

```bash
cd /home/www/laravel/nobleitservices
php artisan view:clear
(php artisan serve --port=8963 > /tmp/serve-verify.log 2>&1 &)
sleep 2
curl -s -o /tmp/homepage-v2-check.html http://127.0.0.1:8963/
grep -c "portfolio-carousel-v2" /tmp/homepage-v2-check.html
kill -9 $(pgrep -f "artisan serve --port=8963")
rm -f /tmp/homepage-v2-check.html /tmp/serve-verify.log
```

Expected: count ≥ 1. Then open in a real browser and confirm: the portfolio carousel scrolls/swipes through all 4 items (3 real projects + QuickErrands placeholder), tech stack and process grids render at mobile/tablet/desktop widths matching the current live page's content.

- [ ] **Step 7: Commit**

```bash
cd /home/www/laravel/nobleitservices
git add resources/views/frontend/index.blade.php public/frontend/css/tailwind-v2.css
git commit -m "Migrate homepage AI-pitch/products/portfolio/tech-stack/process sections to Tailwind v2

Co-Authored-By: Claude Sonnet 5 <noreply@anthropic.com>"
```

---

### Task 12: Homepage — testimonials, final CTA, contact sections + close out the page

**Files:**
- Modify: `resources/views/frontend/index.blade.php` (current lines 454-633 — Testimonials, Final CTA, Contact)
- Modify: end of file — replace `@include('frontend.layouts.footer')` with `@include('frontend.layouts.footer-v2')`

**Interfaces:**
- Produces: `#testimonial-carousel-v2` structure Task 5's `initSimple('testimonial-carousel-v2', '.work-prev', '.work-next', ...)` call expects.
- Preserves: `#select-subject` id/name on the contact form select (no functional JS depends on it beyond form submission, but keep the name/id in case anything server-side or a future task references it).

- [ ] **Step 1: Convert "Testimonial Area" (current lines 454-536) — wires the testimonial Embla carousel**

```blade
<section class="py-20 border-t border-border-soft">
    <div class="container-nb">
        <div class="flex flex-wrap items-center justify-between gap-4 mb-12" data-reveal>
            <div>
                <span class="text-accent uppercase text-sm font-semibold">Clients Testimonials</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-3">Clients feedback</h2>
            </div>
            <div class="flex gap-3">
                <button class="work-prev w-11 h-11 rounded-full border border-border-soft flex items-center justify-center" aria-label="Previous testimonial"><i class="far fa-arrow-left"></i></button>
                <button class="work-next w-11 h-11 rounded-full border border-border-soft flex items-center justify-center" aria-label="Next testimonial"><i class="far fa-arrow-right"></i></button>
            </div>
        </div>
        <div id="testimonial-carousel-v2" class="overflow-hidden">
            <div class="embla__container flex gap-8">
                @foreach ([
                    ['quote' => 'Professional, creative, and highly responsive. Our new site has made it much easier for clients to learn about our services and get in touch. Highly recommended.', 'name' => 'Joel Hong', 'role' => 'CEO, JJ Homes Management', 'href' => '/our-work#jj-homes-london'],
                    ['quote' => 'They didn’t just design a website—they built a digital platform that supports our growth. The attention to detail and ongoing support have been outstanding.', 'name' => 'Miriam', 'role' => 'Manager, Furnished Apartments', 'href' => '/our-work#furnished-apartments'],
                    ['quote' => 'I was impressed by how quickly they understood our needs and turned them into a beautiful, functional website. We’ve already seen an increase in inquiries from new customers.', 'name' => 'Mr Okey', 'role' => 'Founder, Oraclefilms Tv', 'href' => '/our-work#oraclefilms-tv'],
                    ['quote' => 'The team delivered a website that perfectly reflects our brand and makes it easy for clients to connect with us. From start to finish, the process was smooth and professional.', 'name' => 'Jerry', 'role' => 'Director, Marketplace Naija', 'href' => '/our-work#marketplace-group'],
                    ['quote' => 'Their expertise transformed our outdated website into a modern, client-friendly platform. We’ve received so many compliments from partners and customers alike.', 'name' => 'Collins', 'role' => 'Director, Quick Errands', 'href' => '/our-work#quickerrands'],
                ] as $t)
                <div class="min-w-0 flex-[0_0_100%] md:flex-[0_0_48%]">
                    <p class="text-lg text-ink/80">&ldquo;{{ $t['quote'] }}&rdquo;</p>
                    <div class="mt-4">
                        <span class="font-bold block">{{ $t['name'] }}</span>
                        <a href="{{ $t['href'] }}" class="text-ink/60 text-sm hover:text-accent">{{ $t['role'] }}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
```

- [ ] **Step 2: Convert "Final CTA" (current lines 538-554)**

```blade
<section class="bg-ink text-white py-16">
    <div class="container-nb flex flex-wrap items-center justify-between gap-8" data-reveal>
        <div class="max-w-2xl">
            <h2 class="text-2xl md:text-3xl font-bold">Have an Idea Worth Building?</h2>
            <p class="mt-3 text-white/70">Whether you're launching a SaaS product, modernising an existing system, automating a business process or exploring what AI can do for your organisation, we can help you turn the idea into working software. Tell us what you're building.</p>
        </div>
        <a href="/start-a-project" class="theme-btn" style="background:transparent;border:1px solid #fff;">Start a Project <i class="fas fa-angle-double-right"></i></a>
    </div>
</section>
```

- [ ] **Step 3: Convert "Contact Area" (current lines 556-631)**

```blade
<section class="bg-ink text-white py-20">
    <div class="container-nb flex flex-wrap justify-between gap-12">
        <div class="w-full lg:w-5/12" data-reveal>
            <h2 class="text-2xl md:text-3xl font-bold mb-8">Have any project on mind! feel free contact with us or <span class="text-accent-cyan">say hello</span></h2>
            <div class="space-y-6">
                <div class="flex gap-4">
                    <i class="fal fa-map-marker-alt text-accent-cyan text-xl"></i>
                    <div>
                        <span class="block text-white/60 text-sm">Location</span>
                        <b class="font-normal">Plot 3 hon Rufus Oyedepo Sangotedo, Lagos</b>
                    </div>
                </div>
                <div class="flex gap-4">
                    <i class="far fa-envelope-open-text text-accent-cyan text-xl"></i>
                    <div>
                        <span class="block text-white/60 text-sm">Email Address</span>
                        <b class="font-normal"><a href="mailto:info@nobleitservices.ng" class="hover:text-accent-cyan">info@nobleitservices.ng</a></b>
                    </div>
                </div>
                <div class="flex gap-4">
                    <i class="far fa-phone text-accent-cyan text-xl"></i>
                    <div>
                        <span class="block text-white/60 text-sm">Phone No</span>
                        <b class="font-normal block"><a href="callto:+234 907 372 9787" class="hover:text-accent-cyan">(+234) 907 372 9787</a></b>
                        <b class="font-normal block"><a href="callto:+234 703 152 5786" class="hover:text-accent-cyan">(+234) 703 152 5786</a></b>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-5/12" data-reveal>
            <form id="contact-area-form" class="text-ink bg-white rounded-lg p-8 flex flex-col gap-4" name="contact-area-form" action="/contact-us" method="post">
                @csrf
                <h4 class="font-bold text-xl mb-2">Send us Message</h4>
                <label for="full-name" class="sr-only">Full Name</label>
                <input type="text" id="full-name" name="name" class="border border-border-soft rounded px-4 py-2" value="" placeholder="Full Name" required>
                <label for="blog-email" class="sr-only">Email Address</label>
                <input type="email" id="blog-email" name="email" class="border border-border-soft rounded px-4 py-2" value="" placeholder="Email Address" required>
                <label for="phone" class="sr-only">Phone Number</label>
                <input type="text" id="phone" name="phone" class="border border-border-soft rounded px-4 py-2" value="" placeholder="Phone Number">
                <label for="select-subject" class="sr-only">Subject</label>
                <select name="subject" id="select-subject" class="border border-border-soft rounded px-4 py-2">
                    <option value="website customize">Website customize</option>
                    <option value="Web Design & Development" selected>Web Design &amp; Development</option>
                    <option value="Mobile Development">Mobile Development</option>
                    <option value="SEO">SEO</option>
                </select>
                <label for="message" class="sr-only">Message</label>
                <textarea name="message" id="message" class="border border-border-soft rounded px-4 py-2" rows="2" placeholder="Write Message" required></textarea>
                <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                @if ($errors->has('g-recaptcha-response'))
                    <span class="text-red-600">{{ $errors->first('g-recaptcha-response') }}</span>
                @endif
                <button type="submit" class="theme-btn justify-center">Send messages <i class="fas fa-angle-double-right"></i></button>
            </form>
        </div>
    </div>
</section>
```

(Note: the option value bug `<option value="website customize"="">` in the original file is fixed to `<option value="website customize">` here — a plain markup-syntax cleanup made while touching this exact line, not a scope expansion.)

- [ ] **Step 4: Swap the footer include**

Replace the file's final line `@include('frontend.layouts.footer')` with `@include('frontend.layouts.footer-v2')`.

- [ ] **Step 5: Rebuild Tailwind CSS**

```bash
cd /home/www/laravel/nobleitservices
npm run build:tailwind-v2
```

- [ ] **Step 6: Full-page verification**

```bash
cd /home/www/laravel/nobleitservices
php artisan view:clear
php artisan view:cache
```

Expected: no Blade compile errors. Then in a real browser, load the homepage end to end at 375/768/1440px and confirm: testimonial carousel prev/next buttons work, contact form fields render correctly with the reCAPTCHA box visible, footer renders (logo, links, newsletter field, social icons with visible focus rings, scroll-to-top button appears after scrolling and scrolls smoothly), WhatsApp widget button appears bottom-left/right and opens its popup. Compare against the current live homepage for any obviously broken section.

- [ ] **Step 7: Commit**

```bash
cd /home/www/laravel/nobleitservices
git add resources/views/frontend/index.blade.php public/frontend/css/tailwind-v2.css
git commit -m "Migrate homepage testimonials/CTA/contact sections and footer-v2; homepage migration complete

Co-Authored-By: Claude Sonnet 5 <noreply@anthropic.com>"
```

Homepage migration is complete after this task. Task 15 does the full cross-page verification pass once all 3 pages are done.

---

### Task 13: `start-a-project.blade.php` migration

**Files:**
- Modify: `resources/views/frontend/start-a-project.blade.php` (entire file)

**Interfaces:**
- The inline `<script>` block (`QuoteFormManager`, lines 193-385 of the current file) is **already pure vanilla JS with no jQuery dependency** — do not modify its logic. It relies on these exact selectors existing in the markup, which must be preserved character-for-character: `.quote-step[data-step="N"]` (N = 0,1,2,3), `#quoteForm`, `.quote-honeypot` (name=`company_website`), `#sessionTokenField`, `#q-name`, `#q-email`, `#q-phone`, `#q-contact-method`, `#q-service`, `#q-description`, `#q-goal`, `#q-budget`, `#q-timeline`, `#q-notes`, `#progressText`, `#progressPercentage`, `#progressBar`, `#prevBtn`, `#nextBtn`, `#submitBtn`, `#reviewSummary`, `#formError`, `.quote-field-error` (class toggled by JS, needs a visual style), `.is-active` (class toggled on `.quote-step`, needs a visual style: only the active step shows).

- [ ] **Step 1: Swap layout includes**

Replace lines 1-2:
```blade
@include('frontend.layouts.header')
@include('frontend.layouts.nav')
```
with:
```blade
@include('frontend.layouts.header-v2')
@include('frontend.layouts.nav-v2')
```

- [ ] **Step 2: Convert the page banner (current lines 4-22)**

```blade
<section class="pt-40 pb-24 text-center bg-ink text-white relative overflow-hidden">
    <div class="container-nb relative z-10">
        <h1 class="text-4xl font-bold" data-reveal>Start a <span class="text-accent-cyan">Project</span></h1>
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="flex justify-center gap-2 text-white/70">
                <li><a href="/" class="hover:text-white">Home</a></li>
                <li>/</li>
                <li class="text-white">Start a Project</li>
            </ol>
        </nav>
    </div>
</section>
```

(Decorative `hero-shape1.png`/`hero-shape2.png` images dropped — pure decoration, no content loss, consistent with the "minor differences OK" tolerance; note for Task 15's review.)

- [ ] **Step 3: Convert the quote wizard shell (current lines 24-44) — add the required interactive-state CSS**

```blade
<section class="py-20">
    <div class="container-nb max-w-3xl mx-auto">
        <div class="border border-border-soft rounded-lg p-8 md:p-12">
            <div class="flex flex-wrap justify-between items-center gap-3 mb-3">
                <h2 class="text-2xl font-bold m-0">Get Your Free Project Scope</h2>
                <span class="text-accent-cyan text-sm font-semibold">Trusted Partner</span>
            </div>
            <p class="text-ink/70 mb-8">Tell us about your vision and receive a tailored response within 24 hours.</p>

            <div class="mb-8">
                <div class="flex justify-between items-center mb-2">
                    <span id="progressText" class="font-bold">Step 1 of 4</span>
                    <span id="progressPercentage" class="text-ink/60">25%</span>
                </div>
                <div class="h-2 bg-surface-alt rounded-full overflow-hidden">
                    <div id="progressBar" class="h-full bg-accent transition-all" style="width: 25%;"></div>
                </div>
            </div>
```

Add to `resources/css/tailwind-v2-components.css` (the `.quote-step`/`.quote-field-error` states the wizard JS relies on):

```css
.quote-step {
  display: none;
}
.quote-step.is-active {
  display: block;
}
.quote-field-error {
  border-color: #dc2626 !important;
}
.quote-honeypot {
  position: absolute;
  left: -9999px;
}
```

- [ ] **Step 4: Convert Step 1 — Contact Information (current lines 45-87)**

```blade
            <div class="quote-wizard-body">
                <form id="quoteForm" novalidate>
                    @csrf
                    <input type="text" name="company_website" class="quote-honeypot" tabindex="-1" autocomplete="off">
                    <input type="hidden" name="session_token" id="sessionTokenField" value="">

                    <div class="quote-step is-active" data-step="0">
                        <h3 class="text-xl font-bold mb-1">Contact Information</h3>
                        <p class="text-ink/60 mb-6">Let's start with your basic information</p>
                        <div class="flex flex-wrap gap-6">
                            <div class="w-full md:w-[calc(50%-0.75rem)]">
                                <label for="q-name" class="block mb-2 font-semibold">Full Name / Business Name *</label>
                                <input type="text" id="q-name" name="name" class="w-full border border-border-soft rounded px-4 py-2.5" placeholder="Enter your name or business name" required>
                            </div>
                            <div class="w-full md:w-[calc(50%-0.75rem)]">
                                <label for="q-email" class="block mb-2 font-semibold">Email Address *</label>
                                <input type="email" id="q-email" name="email" class="w-full border border-border-soft rounded px-4 py-2.5" placeholder="your@email.com" required>
                            </div>
                            <div class="w-full md:w-[calc(50%-0.75rem)]">
                                <label for="q-phone" class="block mb-2 font-semibold">Phone Number *</label>
                                <input type="tel" id="q-phone" name="phone" class="w-full border border-border-soft rounded px-4 py-2.5" placeholder="+1 415 555 0100" pattern="^\+[1-9]\d{6,14}$" title="Enter your number in international format, e.g. +1 415 555 0100" required>
                                <small class="block text-ink/50 text-sm mt-1">Include your country code, e.g. +234, +1, +44</small>
                            </div>
                            <div class="w-full md:w-[calc(50%-0.75rem)]">
                                <label for="q-contact-method" class="block mb-2 font-semibold">Preferred Contact Method *</label>
                                <select id="q-contact-method" name="contact_method" class="w-full border border-border-soft rounded px-4 py-2.5" required>
                                    <option value="">Choose contact method</option>
                                    <option value="email">Email</option>
                                    <option value="phone">Phone Call</option>
                                    <option value="whatsapp">WhatsApp</option>
                                </select>
                            </div>
                        </div>
                    </div>
```

- [ ] **Step 5: Convert Steps 2-4 (current lines 89-168) following the same field pattern as Step 4 above**

Apply the identical label/input/select/textarea Tailwind classes shown in Step 4 to every field in Steps 2 ("Project Overview": `q-service` select with its 8 options, `q-description` and `q-goal` textareas), Step 3 ("Requirements & Budget": `q-budget` and `q-timeline` selects in a 2-column `flex flex-wrap gap-6` row with `w-full md:w-[calc(50%-0.75rem)]` each, `q-notes` textarea), and Step 4 ("Review & Submit": `#reviewSummary` div, the "what happens next" box as a `bg-surface-alt rounded-lg p-6` list, `#formError` paragraph with `hidden` attribute preserved). Preserve every `<option>` value/label exactly (all currency amounts, all service-type values) — these are read by `SERVICE_LABELS`/`BUDGET_LABELS`/`TIMELINE_LABELS` in the untouched JS and must match exactly or the review-summary step breaks.

- [ ] **Step 6: Convert the wizard navigation buttons (current lines 170-179) and close the wizard shell**

```blade
                    <div class="flex justify-between pt-8 border-t border-border-soft mt-8">
                        <button type="button" id="prevBtn" class="theme-btn" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);" hidden>Previous</button>
                        <div class="ml-auto flex gap-3">
                            <button type="button" id="nextBtn" class="theme-btn">Next <i class="fas fa-angle-double-right"></i></button>
                            <button type="submit" id="submitBtn" class="theme-btn" hidden>Submit Request <i class="fas fa-angle-double-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="text-center mt-10">
            <p class="text-ink/60 mb-3">Prefer to reach us directly?</p>
            <a href="https://wa.me/2349073729787" target="_blank" rel="noopener" class="theme-btn" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">
                <i class="fab fa-whatsapp"></i> WhatsApp Us
            </a>
        </div>
    </div>
</section>
```

- [ ] **Step 7: Swap the footer include; leave the `<script>` block untouched**

Replace `@include('frontend.layouts.footer')` with `@include('frontend.layouts.footer-v2')`. Do not modify anything inside the `<script>` tag below it.

- [ ] **Step 8: Rebuild Tailwind CSS and verify**

```bash
cd /home/www/laravel/nobleitservices
npm run build:tailwind-v2
php artisan view:clear
php artisan view:cache
```

Expected: no compile errors. In a real browser: step through all 4 wizard steps (Next/Previous), confirm the progress bar and "Step X of 4" text update, confirm required-field validation highlights empty fields red on Next, fill and submit the form on a local/test environment if possible (or at minimum confirm the Review step populates from entered data), confirm localStorage-based draft save/restore still works (check `quoteSession` in DevTools Application tab).

- [ ] **Step 9: Commit**

```bash
cd /home/www/laravel/nobleitservices
git add resources/views/frontend/start-a-project.blade.php resources/css/tailwind-v2-components.css public/frontend/css/tailwind-v2.css
git commit -m "Migrate start-a-project page to Tailwind v2 layout (wizard JS untouched)

Co-Authored-By: Claude Sonnet 5 <noreply@anthropic.com>"
```

---

### Task 14: `services.blade.php` migration

**Files:**
- Modify: `resources/views/frontend/services.blade.php` (entire file)

**Interfaces:**
- Produces: `.circle-progress-v2[data-percent][data-color][data-empty-color]` elements Task 8's `circle-progress-v2.js` targets, with the exact preserved values: 89%/`#3180fc`/`#eaf2ff` (SEO Service), 76%/`#f1b000`/`#fdf3d9` (Copywriting), 63%/`#16b4f2`/`#e7f7fe` (PPC).

- [ ] **Step 1: Swap layout includes and convert the page banner**

Replace lines 1-2 with `@include('frontend.layouts.header-v2')` / `@include('frontend.layouts.nav-v2')`. Convert the banner (current lines 4-22) using the same pattern as Task 13 Step 2, with title `Our <span class="text-accent-cyan">Services</span>` and breadcrumb `Home / Our Services`.

- [ ] **Step 2: Convert "Service Categories" (current lines 25-105)**

```blade
<section class="py-20">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-16" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">What We Offer</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">Our Service Categories</h2>
        </div>
        <div class="flex flex-wrap gap-6">
            @foreach ([
                ['id' => 'custom-software', 'icon' => 'flaticon-coding-2', 'title' => 'Custom Software', 'href' => '/custom-software', 'text' => 'Bespoke software built around how your business actually works.', 'links' => [['href' => '/custom-software', 'label' => 'Learn More']]],
                ['id' => 'saas-development', 'icon' => 'flaticon-online', 'title' => 'SaaS Development', 'href' => '/saas-development', 'text' => 'Multi-tenant SaaS platforms, from idea to production.', 'links' => [['href' => '/saas-development', 'label' => 'Learn More']]],
                ['id' => 'ai-integration', 'icon' => 'flaticon-idea', 'title' => 'AI Integration', 'href' => '/ai-integration', 'text' => 'AI chatbots, agents, search and automation built into real products.', 'links' => [['href' => '/ai-integration', 'label' => 'Learn More']]],
                ['id' => 'web-mobile-applications', 'icon' => 'flaticon-app-development', 'title' => 'Web & Mobile Applications', 'href' => null, 'text' => 'Responsive web platforms and native/cross-platform mobile apps.', 'links' => [['href' => '/web-development', 'label' => 'Web Development'], ['href' => '/mobile-apps', 'label' => 'Mobile Apps']]],
                ['id' => 'api-integration', 'icon' => 'flaticon-web-programming', 'title' => 'API & System Integration', 'href' => '/api-integration', 'text' => 'Connecting your product to payments, KYC, messaging and third-party systems.', 'links' => [['href' => '/api-integration', 'label' => 'Learn More']]],
                ['id' => 'ui-ux-design', 'icon' => 'flaticon-user-experience', 'title' => 'UI/UX & Product Design', 'href' => '/ui-ux-design', 'text' => 'Interfaces designed for how a product will actually be used.', 'links' => [['href' => '/ui-ux-design', 'label' => 'Learn More']]],
                ['id' => 'cloud-deployment', 'icon' => 'flaticon-technical-support', 'title' => 'Cloud & Deployment', 'href' => '/cloud-deployment', 'text' => 'Reliable hosting, deployment and infrastructure for production software.', 'links' => [['href' => '/cloud-deployment', 'label' => 'Learn More']]],
                ['id' => 'digital-growth', 'icon' => 'flaticon-seo', 'title' => 'Digital Growth', 'href' => null, 'text' => 'SEO, social and email/SMS marketing for businesses that need it.', 'links' => [['href' => '/seo', 'label' => 'SEO'], ['href' => '/social-media', 'label' => 'Social Media'], ['href' => '/email-marketing', 'label' => 'Email Marketing'], ['href' => '/sms-marketing', 'label' => 'SMS Marketing'], ['href' => '/digital-marketing', 'label' => 'Digital Marketing']]],
            ] as $svc)
            <div id="{{ $svc['id'] }}" class="w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(25%-1.125rem)] border border-border-soft rounded-lg p-6" data-reveal>
                <div class="text-3xl text-accent mb-4"><i class="{{ $svc['icon'] }}"></i></div>
                <h5 class="font-bold">@if($svc['href'])<a href="{{ $svc['href'] }}" class="hover:text-accent">{{ $svc['title'] }}</a>@else{{ $svc['title'] }}@endif</h5>
                <p class="mt-2 text-ink/70">{{ $svc['text'] }}</p>
                @foreach ($svc['links'] as $link)
                <a href="{{ $link['href'] }}" class="block mt-2 text-signal-text hover:underline text-sm">{{ $link['label'] }} <i class="fal fa-long-arrow-right"></i></a>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</section>
```

- [ ] **Step 3: Convert "What We Offer" (current lines 107-139) and "Features Area" (current lines 142-184)**

Two-column text section (image dropped in favor of the left/right text pair since no `what-we-offer.png`-equivalent art direction change was requested — actually this section has no image in the original, it's pure text both sides, so this is a direct 1:1 conversion): use `flex flex-wrap justify-between items-center gap-12` with two `w-full lg:w-5/12` (originally `col-xl-5`) children, left side has the heading + CTA, right side has the paragraph + `<ul class="space-y-1 text-ink/70">` list. "Features Area" is a 5-column icon-card row: `flex flex-wrap gap-6 justify-center` with 5x `w-full sm:w-1/2 md:w-1/5` cards, same icon/heading/paragraph pattern as Task 10 Step 3's cards. Preserve all copy exactly, including the placeholder-ish "Project Lunch" / lorem-ipsum-style card text already in the current file — this is existing content debt, not something to silently rewrite as part of a framework migration.

- [ ] **Step 4: Convert "What We Offer Two" and "Responsive Design" sections (current lines 187-244)**

Both are image+text two-column rows (`flex flex-wrap items-center gap-12`, `w-full lg:w-1/2` each side), alternating image-left/text-right and text-left/image-right. Preserve `{{ asset('frontend/images/about/what-we-offer.png') }}` and `{{ asset('frontend/images/about/statistics-five.png') }}` references exactly.

- [ ] **Step 5: Convert "CTA Two" section (current lines 247-268) — fix the broken background-image path while touching this line**

The current code has `style="background-image: url(assets/images/background/cta-two.png)"` — a relative path that does not resolve to a real file (missing the `asset()` helper and the `frontend/` prefix every other image reference uses). Fix to:

```blade
<section class="bg-accent bg-cover text-white py-16 relative" style="background-image: url({{ asset('frontend/images/background/cta-two.png') }})">
```

Keep the rest of the section (image + heading + paragraph + CTA button) in the same two-column pattern as Step 4.

- [ ] **Step 6: Convert "Support & Marketing" section (current lines 271-331) — wires the circle-progress module**

```blade
<section class="py-20">
    <div class="container-nb">
        <div class="flex flex-wrap justify-between items-center gap-12">
            <div class="w-full lg:w-1/2" data-reveal>
                <span class="text-accent uppercase text-sm font-semibold">Support &amp; Marketing</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-3 mb-5">Marketing to Support Your Web Design</h2>
                <p class="text-ink/70 mb-8">Fortunately, we aren't just designers and developers here&mdash;we are writers, strategists, techs and creatives, all working towards the same end goal: our client's success. As a full-service digital marketing agency</p>
                <div class="flex flex-wrap gap-8">
                    <div class="text-center">
                        <div class="circle-progress-v2" data-percent="89" data-color="#3180fc" data-empty-color="#eaf2ff">
                            <div class="circle-progress-v2__value">0%</div>
                        </div>
                        <h5 class="mt-3 font-semibold">SEO Service</h5>
                    </div>
                    <div class="text-center">
                        <div class="circle-progress-v2" data-percent="76" data-color="#f1b000" data-empty-color="#fdf3d9">
                            <div class="circle-progress-v2__value">0%</div>
                        </div>
                        <h5 class="mt-3 font-semibold">Copywriting</h5>
                    </div>
                    <div class="text-center">
                        <div class="circle-progress-v2" data-percent="63" data-color="#16b4f2" data-empty-color="#e7f7fe">
                            <div class="circle-progress-v2__value">0%</div>
                        </div>
                        <h5 class="mt-3 font-semibold">PPC</h5>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2" data-reveal>
                <ul class="space-y-6">
                    <li>
                        <h5 class="font-bold">SEO Services</h5>
                        <p class="text-ink/70">If you're looking to command market your online you need comprehensive SEO strategy</p>
                    </li>
                    <li>
                        <h5 class="font-bold">Copywriting</h5>
                        <p class="text-ink/70">Amplify your brand and control the conversation with a strategic content marketing strategy</p>
                    </li>
                    <li>
                        <h5 class="font-bold">Pay per click</h5>
                        <p class="text-ink/70">PPC management is all about delivering the right ad to your future customers at the exact</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
```

- [ ] **Step 7: Convert "Call to Action Area" (current lines 338-354) and swap the footer include**

Same pattern as Task 12 Step 2 (dark CTA band). Replace `@include('frontend.layouts.footer')` with `@include('frontend.layouts.footer-v2')`.

- [ ] **Step 8: Rebuild Tailwind CSS and verify**

```bash
cd /home/www/laravel/nobleitservices
npm run build:tailwind-v2
php artisan view:clear
php artisan view:cache
```

Expected: no compile errors. In a real browser: scroll to the Support & Marketing section and confirm all 3 circle-progress rings animate from 0 to their target percentage (89/76/63) when they enter the viewport, with the correct colors; confirm the CTA Two background image actually loads (Network tab, no 404); confirm all Service Category cards link correctly and their anchor IDs (`#custom-software` etc, used by `/services#digital-growth` links from other pages) still resolve.

- [ ] **Step 9: Commit**

```bash
cd /home/www/laravel/nobleitservices
git add resources/views/frontend/services.blade.php public/frontend/css/tailwind-v2.css
git commit -m "Migrate services page to Tailwind v2 layout; fix broken CTA background-image path

Co-Authored-By: Claude Sonnet 5 <noreply@anthropic.com>"
```

---

### Task 15: Cross-page verification pass and non-migrated-page regression check

**Files:** none modified — verification only, plus a short written report of anything found.

**Interfaces:** N/A.

- [ ] **Step 1: Confirm no other page was accidentally affected**

```bash
cd /home/www/laravel/nobleitservices
git diff --stat main -- resources/views/frontend/ resources/views/frontend/layouts/
```

Expected: only `index.blade.php`, `start-a-project.blade.php`, `services.blade.php`, `header.blade.php` (Task 1's fix only), and the new `-v2` files appear. No other `.blade.php` file should be in this diff.

- [ ] **Step 2: Spot-check a non-migrated page still works (proves the shared v1 layout is untouched and functional)**

```bash
cd /home/www/laravel/nobleitservices
php artisan view:clear
(php artisan serve --port=8964 > /tmp/serve-verify.log 2>&1 &)
sleep 2
for path in / /start-a-project /services /about-us /our-work /products /contact-us; do
  curl -s -o /dev/null -w "%{http_code} $path\n" http://127.0.0.1:8964$path
done
kill -9 $(pgrep -f "artisan serve --port=8964")
rm -f /tmp/serve-verify.log
```

Expected: `200` for every path. `/about-us`, `/our-work`, `/products`, `/contact-us` are non-migrated pages — a 200 here confirms `header.blade.php`/`nav.blade.php`/`footer.blade.php` (v1) still work correctly for pages not in this migration's scope, i.e. Task 1's edit to `header.blade.php` didn't break anything.

- [ ] **Step 3: Full manual browser pass on all 3 migrated pages**

At 375px, 768px, and 1440px viewport widths, for each of `/`, `/start-a-project`, `/services`:
- No console errors (open DevTools console, reload, check for red errors)
- No broken images (Network tab, filter by image, check for 404s)
- Nav: hamburger opens/closes on mobile, Services dropdown opens on hover (desktop) and tap (mobile), all links go to the right place
- Homepage: hero carousel autoplays and cycles through all 3 slides with working dots, typewriter text cycles through its 3 phrases, portfolio carousel and testimonial carousel both scroll/swipe, all `data-reveal` sections fade in on scroll, contact form fields are all present and the reCAPTCHA box renders
- start-a-project: all 4 wizard steps navigate correctly, validation fires on empty required fields, review step populates correctly, WhatsApp link works
- services: all 8 service category cards link correctly, the 3 circle-progress rings animate to 89%/76%/63% with correct colors when scrolled into view, the CTA Two background image loads

- [ ] **Step 4: Confirm the FB Pixel fix and note the jQuery-for-WhatsApp-widget decision from Task 9**

Re-check that only `PageView` fires (same check as Task 1 Step 3) on all 3 migrated pages. Also confirm with the user whether keeping jQuery solely for the WhatsApp widget (Task 9's documented decision) is acceptable, or whether that should become a follow-up task — this was flagged as a decision made during implementation, not pre-approved in the spec.

- [ ] **Step 5: Report findings**

Summarize: total JS/CSS byte reduction achieved (compare `curl -s http://127.0.0.1:PORT/ | grep -oE 'src="[^"]+\.js"|href="[^"]+\.css"'` output before/after, or note the removed `<script>`/`<link>` tags directly), anything from the visual pass that needs a follow-up fix, and the open decision from Step 4. Do not deploy — deployment (zip + upload) remains the user's own process per their stated workflow.

---

## Summary of what ships vs. what's deferred

**Ships in this plan:** Homepage, `start-a-project`, `services` fully on Tailwind + vanilla JS (Embla for carousels). Bootstrap CSS, jQuery UI plugins (Slick, Magnific Popup, Nice Select, WOW.js, animatedheadline, circleProgress) fully removed from these 3 pages. Facebook Pixel bug fixed sitewide.

**Deferred (explicitly out of scope, confirmed in spec):** all other ~17 pages, icon fonts, GA/reCAPTCHA/WhatsApp widget script itself (though its jQuery dependency remains loaded on v2 pages — flagged in Task 15 for a decision), deleting the v1 Bootstrap/jQuery layout files (only happens once every page is migrated).
