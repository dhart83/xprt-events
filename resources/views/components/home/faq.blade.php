<!-- ====== FAQ Section Start ====== -->
<x-layout.section {{ $attributes->merge(['class' => 'scroll-mt-16']) }}>
    <x-layout.container>

        <div class="mx-auto mb-16 max-w-2xl text-center">
            <p class="eyebrow">FAQ</p>

            <h2 class="mb-4">Quick answers to common questions.</h2>

            <p class="mx-auto max-w-2xl text-base leading-8 text-brand-text sm:text-lg">
                Still have questions? Reach out — we respond quickly with clear details.
            </p>
        </div>

        <div class="mx-auto max-w-3xl space-y-4">

            <details class="group rounded-2xl border border-brand-navy/10 bg-white px-6 py-5 shadow-sm transition hover:shadow-md">
                <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                    <span class="pr-4 font-semibold text-brand-navy">How much space does the photo booth require?</span>
                    <span class="shrink-0 text-xl leading-none text-brand-gold transition duration-200 group-open:rotate-45">+</span>
                </summary>
                <p class="mt-4 max-w-2xl text-base leading-8 text-brand-text">
                    We typically recommend a small footprint that fits comfortably into most reception layouts.
                    Before the event, we’ll confirm the best placement with your venue or planner.
                </p>
            </details>

            <details class="group rounded-2xl border border-brand-navy/10 bg-white px-6 py-5 shadow-sm transition hover:shadow-md">
                <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                    <span class="pr-4 font-semibold text-brand-navy">Do you offer prints?</span>
                    <span class="shrink-0 text-xl leading-none text-brand-gold transition duration-200 group-open:rotate-45">+</span>
                </summary>
                <p class="mt-4 max-w-2xl text-base leading-8 text-brand-text">
                    We focus on instant digital sharing rather than prints, so guests can receive their photos immediately by text or email.
                </p>
            </details>

            <details class="group rounded-2xl border border-brand-navy/10 bg-white px-6 py-5 shadow-sm transition hover:shadow-md">
                <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                    <span class="pr-4 font-semibold text-brand-navy">Do you provide an attendant?</span>
                    <span class="shrink-0 text-xl leading-none text-brand-gold transition duration-200 group-open:rotate-45">+</span>
                </summary>
                <p class="mt-4 max-w-2xl text-base leading-8 text-brand-text">
                    Yes. Every package includes a professional attendant to manage the booth, assist guests, and keep everything running smoothly.
                </p>
            </details>

            <details class="group rounded-2xl border border-brand-navy/10 bg-white px-6 py-5 shadow-sm transition hover:shadow-md">
                <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                    <span class="pr-4 font-semibold text-brand-navy">How long does setup take?</span>
                    <span class="shrink-0 text-xl leading-none text-brand-gold transition duration-200 group-open:rotate-45">+</span>
                </summary>
                <p class="mt-4 max-w-2xl text-base leading-8 text-brand-text">
                    We arrive early and handle both setup and breakdown so your timeline stays on track. Exact timing depends on the venue and selected package.
                </p>
            </details>

            <details class="group rounded-2xl border border-brand-navy/10 bg-white px-6 py-5 shadow-sm transition hover:shadow-md">
                <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                    <span class="pr-4 font-semibold text-brand-navy">How do guests get their photos?</span>
                    <span class="shrink-0 text-xl leading-none text-brand-gold transition duration-200 group-open:rotate-45">+</span>
                </summary>
                <p class="mt-4 max-w-2xl text-base leading-8 text-brand-text">
                    Guests can receive their photos instantly by text or email. After the event, you’ll also receive a curated online gallery.
                </p>
            </details>

            <details class="group rounded-2xl border border-brand-navy/10 bg-white px-6 py-5 shadow-sm transition hover:shadow-md">
                <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                    <span class="pr-4 font-semibold text-brand-navy">Can we customize the overlay to match our wedding?</span>
                    <span class="shrink-0 text-xl leading-none text-brand-gold transition duration-200 group-open:rotate-45">+</span>
                </summary>
                <p class="mt-4 max-w-2xl text-base leading-8 text-brand-text">
                    Yes. We can create a clean, modern overlay that matches your wedding aesthetic and includes details like your names, date, or monogram.
                </p>
            </details>

            <details class="group rounded-2xl border border-brand-navy/10 bg-white px-6 py-5 shadow-sm transition hover:shadow-md">
                <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                    <span class="pr-4 font-semibold text-brand-navy">Do you travel outside of Jacksonville?</span>
                    <span class="shrink-0 text-xl leading-none text-brand-gold transition duration-200 group-open:rotate-45">+</span>
                </summary>
                <p class="mt-4 max-w-2xl text-base leading-8 text-brand-text">
                    Yes. We serve Jacksonville and surrounding areas, and travel fees may apply depending on distance.
                </p>
            </details>
        </div>

        <div class="mt-10 text-center">
            <p class="text-sm text-brand-text/70">
                Still have questions? <a href="{{ route('contact.index') }}" class="font-medium text-brand-navy underline underline-offset-4 hover:text-brand-goldText">Check availability</a> and we’ll walk you through everything.
            </p>
        </div>

    </x-layout.container>
</x-layout.section>
<!-- ====== FAQ Section End ====== -->