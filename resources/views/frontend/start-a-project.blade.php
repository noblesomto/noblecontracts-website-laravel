@include('frontend.layouts.header-v2')
@include('frontend.layouts.nav-v2')

<!-- Page Banner Start -->
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
<!-- Page Banner End -->

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

            <div class="quote-wizard-body">
                <form id="quoteForm" novalidate>
                    @csrf
                    <input type="text" name="company_website" class="quote-honeypot" tabindex="-1" autocomplete="off">
                    <input type="hidden" name="session_token" id="sessionTokenField" value="">

                    <!-- Step 1: Contact Information -->
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

                    <!-- Step 2: Project Overview -->
                    <div class="quote-step" data-step="1">
                        <h3 class="text-xl font-bold mb-1">Project Overview</h3>
                        <p class="text-ink/60 mb-6">Help us understand what you're looking to build</p>
                        <div class="mb-6">
                            <label for="q-service" class="block mb-2 font-semibold">What do you need? *</label>
                            <select id="q-service" name="service_type" class="w-full border border-border-soft rounded px-4 py-2.5" required>
                                <option value="">Select the type of service you need</option>
                                <option value="custom_software">Custom Software</option>
                                <option value="saas_development">SaaS Development</option>
                                <option value="ai_integration">AI Integration</option>
                                <option value="web_mobile">Web &amp; Mobile Applications</option>
                                <option value="api_integration">API &amp; System Integration</option>
                                <option value="ui_ux_design">UI/UX &amp; Product Design</option>
                                <option value="cloud_deployment">Cloud &amp; Deployment</option>
                                <option value="digital_growth">Digital Growth (SEO, Social, Email/SMS)</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="q-description" class="block mb-2 font-semibold">Project Description *</label>
                            <textarea id="q-description" name="description" rows="4" class="w-full border border-border-soft rounded px-4 py-2.5" placeholder="Describe your project in detail. What should it do, and for whom?" required></textarea>
                        </div>
                        <div class="mb-6">
                            <label for="q-goal" class="block mb-2 font-semibold">Main Goal or Problem to Solve</label>
                            <textarea id="q-goal" name="goal" rows="3" class="w-full border border-border-soft rounded px-4 py-2.5" placeholder="What business problem are you trying to solve, or what's the goal?"></textarea>
                        </div>
                    </div>

                    <!-- Step 3: Requirements & Budget -->
                    <div class="quote-step" data-step="2">
                        <h3 class="text-xl font-bold mb-1">Requirements &amp; Budget</h3>
                        <p class="text-ink/60 mb-6">Let's discuss your timeline and budget expectations</p>
                        <div class="flex flex-wrap gap-6">
                            <div class="w-full md:w-[calc(50%-0.75rem)]">
                                <label for="q-budget" class="block mb-2 font-semibold">Estimated Budget (&#8358;)</label>
                                <select id="q-budget" name="budget" class="w-full border border-border-soft rounded px-4 py-2.5">
                                    <option value="">Select your budget range</option>
                                    <option value="under_1m">Under &#8358;1,000,000</option>
                                    <option value="1m_5m">&#8358;1,000,000 &ndash; &#8358;5,000,000</option>
                                    <option value="5m_15m">&#8358;5,000,000 &ndash; &#8358;15,000,000</option>
                                    <option value="15m_above">&#8358;15,000,000 and above</option>
                                    <option value="not_sure">Not sure yet &mdash; need guidance</option>
                                </select>
                            </div>
                            <div class="w-full md:w-[calc(50%-0.75rem)]">
                                <label for="q-timeline" class="block mb-2 font-semibold">Expected Timeline</label>
                                <select id="q-timeline" name="timeline" class="w-full border border-border-soft rounded px-4 py-2.5">
                                    <option value="">When do you need this completed?</option>
                                    <option value="urgent">ASAP (rush job)</option>
                                    <option value="1_month">Within 1 month</option>
                                    <option value="2_3_months">2&ndash;3 months</option>
                                    <option value="flexible">Flexible timeline</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="q-notes" class="block mb-2 font-semibold">Additional Requirements or Notes</label>
                            <textarea id="q-notes" name="additional_notes" rows="3" class="w-full border border-border-soft rounded px-4 py-2.5" placeholder="Any specific technologies, integrations or special requirements?"></textarea>
                        </div>
                    </div>

                    <!-- Step 4: Review & Submit -->
                    <div class="quote-step" data-step="3">
                        <h3 class="text-xl font-bold mb-1">Review &amp; Submit</h3>
                        <p class="text-ink/60 mb-6">Please review your information before submitting</p>
                        <div id="reviewSummary" class="mb-6"></div>
                        <div class="bg-surface-alt rounded-lg p-6">
                            <strong>What happens next?</strong>
                            <ul class="list-disc list-inside mt-3 space-y-1 text-ink/70">
                                <li>We'll review your requirements within a few hours</li>
                                <li>You'll receive a tailored response within 24 hours</li>
                                <li>We'll schedule a call to discuss the details</li>
                            </ul>
                        </div>
                        <p id="formError" class="text-red-600 mt-4" hidden></p>
                    </div>

                    <!-- Navigation -->
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

@include('frontend.layouts.footer-v2')


<script>
document.addEventListener('DOMContentLoaded', function () {
    const SERVICE_LABELS = {
        custom_software: 'Custom Software', saas_development: 'SaaS Development', ai_integration: 'AI Integration',
        web_mobile: 'Web & Mobile Applications', api_integration: 'API & System Integration',
        ui_ux_design: 'UI/UX & Product Design', cloud_deployment: 'Cloud & Deployment', digital_growth: 'Digital Growth'
    };
    const BUDGET_LABELS = {
        under_1m: 'Under ₦1,000,000', '1m_5m': '₦1,000,000 – ₦5,000,000',
        '5m_15m': '₦5,000,000 – ₦15,000,000', '15m_above': '₦15,000,000 and above', not_sure: 'Not sure yet'
    };
    const TIMELINE_LABELS = { urgent: 'ASAP', '1_month': 'Within 1 month', '2_3_months': '2–3 months', flexible: 'Flexible' };

    class QuoteFormManager {
        constructor() {
            this.steps = Array.from(document.querySelectorAll('.quote-step'));
            this.currentStep = 0;
            this.totalSteps = this.steps.length;
            this.form = document.getElementById('quoteForm');
            this.bindEvents();
            this.ensureSessionToken();
            this.showStep(0);
            this.loadSavedData();
        }

        // Set a session token up front, before any network round trip, so a slow or
        // failed draft-save call can never leave the final submit without one.
        ensureSessionToken() {
            let token = localStorage.getItem('quoteSession');
            if (!token) {
                token = (window.crypto && crypto.randomUUID)
                    ? crypto.randomUUID()
                    : 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, (c) => {
                        const r = Math.random() * 16 | 0;
                        return (c === 'x' ? r : (r & 0x3 | 0x8)).toString(16);
                    });
                localStorage.setItem('quoteSession', token);
            }
            document.getElementById('sessionTokenField').value = token;
        }

        bindEvents() {
            document.getElementById('nextBtn').addEventListener('click', () => this.handleNext());
            document.getElementById('prevBtn').addEventListener('click', () => this.handlePrevious());
            this.form.addEventListener('submit', (e) => this.handleSubmit(e));
            this.steps.forEach((step) => {
                step.querySelectorAll('input, select, textarea').forEach((field) => {
                    field.addEventListener('input', () => field.classList.remove('quote-field-error'));
                });
            });
        }

        showStep(index) {
            this.steps.forEach((step, i) => step.classList.toggle('is-active', i === index));
            const progress = Math.round(((index + 1) / this.totalSteps) * 100);
            document.getElementById('progressBar').style.width = progress + '%';
            document.getElementById('progressText').textContent = `Step ${index + 1} of ${this.totalSteps}`;
            document.getElementById('progressPercentage').textContent = progress + '%';
            document.getElementById('prevBtn').hidden = index === 0;
            const isLast = index === this.totalSteps - 1;
            document.getElementById('nextBtn').hidden = isLast;
            document.getElementById('submitBtn').hidden = !isLast;
            if (isLast) this.populateReviewSummary();
        }

        validateStep(index) {
            let valid = true;
            this.steps[index].querySelectorAll('[required]').forEach((field) => {
                const value = field.value.trim();
                let fieldValid = !!value;
                if (fieldValid && field.id === 'q-phone') {
                    fieldValid = /^\+[1-9]\d{6,14}$/.test(value.replace(/[\s().-]/g, ''));
                }
                field.classList.toggle('quote-field-error', !fieldValid);
                if (!fieldValid) valid = false;
            });
            return valid;
        }

        collectFormData() {
            const data = {};
            new FormData(this.form).forEach((value, key) => {
                if (key !== 'company_website' && key !== '_token') data[key] = value;
            });
            return data;
        }

        async saveStepData(stepIndex) {
            try {
                const data = this.collectFormData();
                const response = await fetch('/api/save-quote-step', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value, 'Accept': 'application/json' },
                    body: JSON.stringify({ ...data, step_number: stepIndex + 1 }),
                });
                if (response.ok) {
                    const json = await response.json();
                    if (json.session_token) {
                        localStorage.setItem('quoteSession', json.session_token);
                        document.getElementById('sessionTokenField').value = json.session_token;
                    }
                }
            } catch (e) { console.warn('Could not save step', e); }
        }

        async loadSavedData() {
            const token = localStorage.getItem('quoteSession');
            if (!token) return;
            try {
                const response = await fetch(`/api/get-quote-draft/${token}`);
                if (!response.ok) return;
                const json = await response.json();
                if (json.draft) {
                    document.getElementById('sessionTokenField').value = token;
                    Object.entries(json.draft).forEach(([key, value]) => {
                        const field = this.form.querySelector(`[name="${key}"]`);
                        if (field && value) field.value = value;
                    });
                    if (json.draft.step_number) {
                        this.currentStep = Math.min(json.draft.step_number - 1, this.totalSteps - 1);
                        this.showStep(this.currentStep);
                    }
                }
            } catch (e) { console.warn('Could not load draft', e); }
        }

        populateReviewSummary() {
            const d = this.collectFormData();
            document.getElementById('reviewSummary').innerHTML = `
                <dl class="case-study-facts">
                    <dt>Name</dt><dd>${d.name || 'Not provided'}</dd>
                    <dt>Email</dt><dd>${d.email || 'Not provided'}</dd>
                    <dt>Phone</dt><dd>${d.phone || 'Not provided'}</dd>
                    <dt>Service</dt><dd>${SERVICE_LABELS[d.service_type] || 'Not provided'}</dd>
                    <dt>Budget</dt><dd>${BUDGET_LABELS[d.budget] || 'Not specified'}</dd>
                    <dt>Timeline</dt><dd>${TIMELINE_LABELS[d.timeline] || 'Not specified'}</dd>
                    <dt>Description</dt><dd>${d.description || 'Not provided'}</dd>
                </dl>`;
        }

        async handleNext() {
            if (!this.validateStep(this.currentStep)) return;
            await this.saveStepData(this.currentStep);
            if (this.currentStep < this.totalSteps - 1) {
                this.currentStep++;
                this.showStep(this.currentStep);
            }
        }

        handlePrevious() {
            if (this.currentStep > 0) {
                this.currentStep--;
                this.showStep(this.currentStep);
            }
        }

        async handleSubmit(e) {
            e.preventDefault();
            if (!this.validateStep(this.currentStep)) return;

            const submitBtn = document.getElementById('submitBtn');
            const original = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = 'Submitting&hellip;';

            try {
                const data = this.collectFormData();
                const response = await fetch('/api/submit-quote', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value, 'Accept': 'application/json' },
                    body: JSON.stringify(data),
                });
                const json = await response.json();
                if (response.ok && json.success) {
                    localStorage.removeItem('quoteSession');
                    window.location.href = json.redirect || '/thank-you';
                    return;
                }
                throw new Error(json.message || 'Submission failed');
            } catch (err) {
                const box = document.getElementById('formError');
                box.textContent = err.message || 'Sorry, there was an error submitting your request. Please try again or contact us directly.';
                box.hidden = false;
            } finally {
                submitBtn.disabled = false;
                submitBtn.innerHTML = original;
            }
        }
    }

    new QuoteFormManager();
});
</script>
