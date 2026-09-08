
## Role & Context

You are working in the existing codebase for **nobleitservices.ng**, a Laravel site (Blade templates, Alpine.js, Tailwind CSS; Livewire and Filament v3 may be present for admin/dynamic areas — confirm actual usage before assuming). Do not assume the stack blind: your first step is to inspect the repo and confirm what's actually there before writing any code.

The company is currently positioned on-site as a generic "Website development and Digital Marketing company... since 2009." That positioning is outdated. Noble IT Services now builds and operates its own live/in-development SaaS and AI products, in addition to client web/mobile work. The goal of this task is to restructure the site's information architecture, navigation, page content and visual direction so it reads as a **software development / SaaS / AI company**, while preserving everything that currently generates business (lead form, SEO, existing client-facing pages).

Do not do a full visual redesign in the first pass. Ship content/IA/positioning changes first (cheap, high-impact, reversible), then layer in visual/UX work. This is spelled out in the phased plan below — follow the phase order unless told otherwise.

## Hard Constraints (do not violate)

1. **Preserve the existing lead-generation flow.** The site has a working 4-step quote form at `quote.nobleitservices.ng`. Do not replace or break it. Point all new "Start a Project" CTAs at this existing flow unless explicitly asked to rebuild it. If you can't find it in this codebase (it may be a separate subdomain/app), flag that clearly rather than guessing at its implementation.
2. **Do not remove Digital Marketing / SEO services from the site.** They currently generate real client revenue. They move to a secondary "Digital Growth" position in the nav/services hierarchy — they do not disappear from anywhere a prospect could look.
3. **Do not break existing SEO.** Preserve or 301-redirect any existing indexed URLs that change. Preserve meta titles/descriptions patterns unless you're improving them as part of this task. Check `robots.txt` and any sitemap before restructuring routes.
4. **Mobile-first, accessible.** Test every new/changed page at mobile width. Use semantic HTML, proper heading hierarchy, accessible form labels and button states.
5. **Match existing code conventions.** Look at how existing Blade components, routes, and Tailwind usage are structured before adding new files — follow the established patterns rather than introducing a second style.
6. **Show your work incrementally.** After each phase, list the files changed/added and give me a way to preview (e.g. local dev server URL/route list) before moving to the next phase.

## Positioning (apply everywhere)

- **Positioning statement:** "Noble IT Services — Software, SaaS & AI Solutions for Modern Businesses."
- **Hero message:** "Build Software. Launch SaaS. Integrate AI."
- **Service hierarchy** (reflect this in nav order, homepage section order, and any service-listing page):
  1. Software Development — Primary
  2. SaaS Development — Primary
  3. AI Integration — Primary
  4. Web & Mobile Applications — Supporting
  5. UI/UX & Product Design — Supporting
  6. Digital Marketing / SEO — Secondary, labeled "Digital Growth," still one click away in the Services dropdown

## Site Navigation (implement exactly this structure)

**Top-level nav:** Home · Services (dropdown) · Products · Our Work · About · Contact — primary CTA button "Start a Project" linking to the existing quote flow.

**Services dropdown:**
- Custom Software
- SaaS Development
- AI Integration
- Web & Mobile Applications
- API & System Integration
- UI/UX & Product Design
- Cloud & Deployment
- Digital Growth (SEO, Social, Email/SMS Marketing)

**Products** (new top-level page — see Products Page section below): Noble IT's own SaaS products, distinct from client work.

**Our Work** (existing/expanded): client case studies — see Case Studies section below.

Do not duplicate SaaS Development or AI Integration as both a top-level nav item and a dropdown item — they live in the dropdown only; top-level stays uncluttered.

## Homepage — Section-by-Section Content

Build/update these sections in this order. Use the copy below as the content source; adapt tone to match existing site voice, but keep the substance.

### 1. Hero
- Headline: "Build Software. Launch SaaS. Integrate AI."
- Subhead: "We design and develop custom software, scalable SaaS platforms and AI-powered solutions that turn business ideas into real digital products."
- CTAs: "Start a Project" (→ quote flow), "View Our Work" (→ Our Work page)

### 2. Capability strip
"From Business Idea to Production Software" / "We build the technology behind modern businesses." — four items: Custom Software, SaaS Platforms, AI Solutions, Mobile Applications.

### 3. SaaS pitch block
- Heading: "Have a SaaS Idea? We Can Build It."
- Body: "From your first concept to a production-ready SaaS platform — CleanOS and BotWave are proof this isn't aspirational."
- Feature list: Product planning, UI/UX, Architecture, Backend/frontend development, Authentication, Subscription billing, Admin dashboards, APIs, Third-party integrations, Deployment.

### 4. AI pitch block
- Heading: "Make Your Software Smarter"
- Body: "AI should be a practical business capability, not simply a buzzword. Integrate AI into products, workflows and customer experiences — as built into BotWave, VerifyMe+ and ScanOriginal."
- Feature list: AI Chatbots, AI Agents, AI Search, Document Intelligence, AI Automation, LLM Integrations.

### 5. Products We've Built (primary proof section — lead with owned products, not client screenshots)
Show as cards, in this order, each linking to the Products page or its own product detail if you build one:
1. **BotWave** — AI-powered customer support bots (WhatsApp/Telegram/website). Status: In development / pitch stage.
2. **VerifyMe+** — AI-assisted scam-reporting platform for Nigeria. Status: Live / evolving.
3. **ScanOriginal** — Anti-counterfeit verification PWA. Status: Active MVP development.
4. **CleanOS** — SaaS operating system for UK cleaning businesses. Status: Planned build.

Follow with a secondary, visually lighter row: client work — Marketplace Naija/Ghana, JJ Homes London, Oraclefilms, QuickErrands — linking to Our Work.

### 6. Credibility strip
"Experienced. Practical. Product-Focused." with stats: years of experience, software products built and operated, businesses served, technology/integration expertise. (Pull real numbers from existing site content — do not invent figures.)

### 7. Tech stack, grouped by function (not a flat list)
- Backend — Laravel, Django, FastAPI
- Frontend — Alpine.js, Livewire, React
- Mobile — React Native / Flutter
- Databases — MySQL, PostgreSQL, Redis
- Cloud & Infrastructure — Contabo VPS, Hetzner Cloud, Nginx
- AI — LLM integration, AI microservices

Adjust this list if it doesn't match what's actually used/marketed elsewhere on the site — confirm against existing content first.

### 8. Process
"How We Build": Discover → Plan → Design → Build → Integrate → Launch → Scale (short one-line description per step; see Development Process section below for the fuller copy if you're also building a dedicated process/about section).

### 9. Testimonials
Keep existing testimonials; where possible, link each testimonial to the specific project/product it references instead of showing them generically.

### 10. Final CTA
- Heading: "Have a Software Idea? Let's Turn It Into a Product."
- Body: "Whether building a SaaS startup, automating a business or adding AI to an existing platform, tell us what you want to build."
- CTA: "Start a Project" → existing quote flow.

## Products Page (new)

Build a dedicated `/products` (or existing route convention) page. This is not a placeholder — populate it now with real entries. For each product, use this structure and content:

**BotWave** — Status: In development / pitch stage
AI-powered customer support bots for WhatsApp, Telegram and websites. A Nigerian SaaS platform positioned against Wati, Intercom, Chatbase and Respond.io, with a Naira-priced three-tier subscription model.

**VerifyMe+** — Status: Live / evolving
AI-assisted scam-reporting platform for Nigeria. Laravel front end with a FastAPI AI microservice for report analysis; being explored as an extension into a verified artisan/vocational marketplace.

**ScanOriginal** — Status: Active MVP development
Anti-counterfeit product verification, built as a PWA. Laravel 12 and Alpine.js front end with a FastAPI AI microservice, Filament admin, Africa's Talking USSD, Dojah KYC and Paystack — launching lean with manually seeded NAFDAC product records.

**CleanOS** — Status: Planned build
The operating system for running a UK cleaning business. SaaS platform with GoCardless Direct Debit, Xero/Sage sync, Airbnb turnover automation and UK compliance features as differentiators; tiered pricing from £19–£149/month.

**Marketplace Group** — Status: Live in Nigeria & Ghana, expanding
Network of country-specific classifieds platforms (marketplace.ng, marketplace.com.gh live; Ethiopia and Uganda in development), built on a shared multi-tenant codebase with per-country databases.

Each product card/section should show: name, one-line description, problem solved, key features, technology/AI used, status badge (Live / Beta / In Development), and a link or demo where one genuinely exists — do not fabricate live links for products that aren't live.

## Our Work (Case Studies) — Restructure

Reorder existing case study content: owned products (above) get the primary visual weight; client work is secondary and reframed to show engineering substance, not generic "we built a website" language.

Client case studies to include: JJ Homes London (property/real estate web platform), Oraclefilms TV (media/entertainment platform), QuickErrands (on-demand services booking platform, Laravel), and any other verified delivered projects already on the site.

**Case study format** (apply consistently to every entry, whether product or client project):
1. Project title
2. Product type
3. Client/business context (or "Owned Product")
4. Challenge
5. Solution
6. Key features
7. Technology stack
8. Integrations
9. Outcome/result
10. Screenshots or product walkthrough
11. CTA: "Build Something Similar" → quote flow

Do not invent challenge/outcome details you don't have — pull from existing project pages/notes where available, and mark clearly (in your own working notes, not on the live page) any fields you couldn't source so we can fill them in together.

## About Page

Update About copy to:

> "Noble IT Services is a software development company focused on building custom software, SaaS platforms and AI-powered solutions for businesses and entrepreneurs. We work with companies from the early idea stage through development, launch and continuous improvement — turning complex business requirements into reliable, scalable digital products. We also operate our own SaaS products, including BotWave, VerifyMe+, ScanOriginal, CleanOS and Marketplace Group, giving us first-hand experience with everything we build for clients."

Keep any existing founder/team/history content that's still accurate; don't strip real history in favor of generic copy.

## Visual & UX Direction (Phase 3 — do not start until content/IA phases are approved)

- Modern software-company/product-studio aesthetic — not a generic template look.
- Large, confident typography; generous whitespace.
- Clean light or a sophisticated dark mode direction (pick one primary, don't try to do both half-heartedly).
- Subtle gradients, restrained motion — no gratuitous animation.
- Real project/product screenshots instead of stock imagery wherever possible.
- Modern card and interface components consistent with an actual dashboard/product aesthetic, not a marketing-brochure look.
- Strong mobile responsiveness verified on real breakpoints, not just the browser resizing.
- Fast loading — audit and optimize images/fonts as part of this phase, not as an afterthought.
- Accessible buttons, forms, navigation, and heading structure throughout.

## Phased Execution Plan — follow this order

**Phase 1 — Positioning & Proof (do this first, ship independently)**
- Rewrite homepage, About, and service page copy per the sections above.
- Build the Products page and populate it with the five products above.
- Reorder Our Work to lead with owned products, client work secondary.
- Deliverable: a reviewable diff/preview with no navigation or visual changes yet.

**Phase 2 — Information Architecture**
- Implement the revised navigation structure (top-level + Services dropdown) exactly as specified above.
- Add routes/sitemap entries for the new Products page.
- Confirm and wire up how "Start a Project" CTAs across the site point at the existing quote flow.
- Set up 301 redirects for any URLs that moved.
- Deliverable: full route list and a nav walkthrough for review.

**Phase 3 — Visual Redesign**
- Apply the visual/UX direction above to homepage, Products, Our Work, About, and Services pages.
- Optimize images, fonts, and Core Web Vitals as part of this pass.
- Deliverable: before/after screenshots at desktop and mobile widths for each changed page.

**Phase 4 — QA & Launch**
- Cross-browser check (Chrome, Safari, Firefox at minimum).
- Mobile device testing.
- Accessibility pass (headings, alt text, form labels, color contrast, keyboard navigation).
- SEO check: meta titles/descriptions on all changed/new pages, sitemap updated, redirects verified.
- Performance check (Lighthouse or equivalent) before calling it done.

## How to run this

- **Recommended:** run one phase at a time. After I paste this prompt, start with "Begin Phase 1 only. Show me what you plan to touch before writing code." Review and approve before I say "proceed to Phase 2."
- **If running end-to-end in one session:** work through the phases in order without skipping ahead to Phase 3 visual work before Phase 1/2 content and IA changes are in place, and pause for confirmation at the end of each phase rather than pushing straight through to launch.
- Ask me directly, rather than guessing, whenever you need: real stats for the credibility strip, confirmation of the quote flow's actual implementation/route, existing testimonial-to-project mappings, or anything in the case studies you can't source from the current codebase/content.
