<x-layout.app
    title="Jacksonville Wedding Photo Booth Rental | XPRT Events"
    description="Elegant wedding and event photo booth rentals in Jacksonville, Florida. Modern digital booths with instant sharing, custom overlays, and professional on-site service."
    :canonical="url()->current()"
    ogImage="{{ asset('images/seo/home-og.jpg') }}"
>
    {{-- Hero / Intro --}}
    <x-layout.section class="mt-16 scroll-mt-16 bg-[#f6f3ee]">
        <x-layout.container>
            <div class="mx-auto max-w-4xl">
                <p class="eyebrow">Jacksonville Photo Booth</p>

                <h1 class="mb-5 max-w-3xl">
                    Wedding and event photo booth rental in Jacksonville, Florida.
                </h1>

                <p class="max-w-3xl text-base leading-8 text-brand-text sm:text-lg">
                    XPRT Events provides modern digital photo booth experiences for weddings, corporate events,
                    private parties, and celebrations throughout Jacksonville. Our booth is designed to look clean,
                    feel easy to use, and give guests instant photo sharing without adding stress to your event.
                </p>
            </div>
        </x-layout.container>
    </x-layout.section>

    {{-- Local Service Area --}}
    <x-layout.section>
        <x-layout.container>
            <div class="mx-auto max-w-4xl">
                <p class="eyebrow">Local Service Area</p>

                <h2 class="mb-4">Serving Jacksonville weddings and events.</h2>

                <p class="mb-4">
                    We work with couples, planners, and hosts across Jacksonville who want a polished photo booth
                    experience that fits seamlessly into the event instead of feeling like an afterthought.
                    From elegant wedding receptions to private celebrations and professional gatherings,
                    our goal is to deliver a setup that looks refined and runs smoothly from start to finish.
                </p>

                <p>
                    XPRT Events also serves nearby areas including Ponte Vedra, St. Augustine, Orange Park,
                    Atlantic Beach, and other surrounding Northeast Florida locations. If your event is outside
                    Jacksonville, we can confirm travel availability based on your venue and event date.
                </p>
            </div>
        </x-layout.container>
    </x-layout.section>

    {{-- Why Jacksonville Clients Book --}}
    <x-layout.section class="bg-white">
        <x-layout.container>
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <div>
                    <p class="eyebrow">Why Jacksonville Clients Book XPRT Events</p>

                    <h2 class="mb-4">A clean, modern booth experience that fits the occasion.</h2>

                    <p class="mb-6">
                        Jacksonville events range from upscale waterfront weddings to relaxed private celebrations,
                        and the booth experience should feel like it belongs there. We focus on presentation,
                        smooth guest experience, and reliable setup so your booth adds energy to the event
                        without creating extra work for you.
                    </p>

                    <ul class="feature-list">
                        <li>Elegant digital photo booth setup designed to complement modern events</li>
                        <li>Instant text and email sharing guests actually use</li>
                        <li>Professional attendant included with every package</li>
                        <li>Custom overlays that match your wedding or event aesthetic</li>
                        <li>Curated online gallery after the event</li>
                    </ul>
                </div>

                {{-- <div>
                    <img
                        src="{{ asset('images/home/why-us.jpg') }}"
                        alt="Guests using the XPRT Events photo booth at a Jacksonville event"
                        class="w-full rounded-3xl object-cover shadow-sm"
                    >
                </div> --}}
            </div>
        </x-layout.container>
    </x-layout.section>

    {{-- Local Venue Context --}}
    <x-layout.section>
        <x-layout.container>
            <div class="mx-auto max-w-4xl">
                <p class="eyebrow">Jacksonville Venues</p>

                <h2 class="mb-4">Designed to fit a wide range of Jacksonville-area venues.</h2>

                <p class="mb-6">
                    Jacksonville celebrations take place in all kinds of spaces, from elegant ballrooms and waterfront
                    venues to private event spaces and modern industrial settings. Our booth setup is designed to work
                    cleanly within a venue layout while still creating a strong guest experience.
                </p>

                <p class="mb-6">
                    If you already have a venue selected, we can help confirm spacing, placement, and the package
                    that best fits your guest count and event style.
                </p>

                <div class="rounded-2xl border border-brand-navy/10 bg-white p-6 shadow-sm">
                    <p class="font-semibold text-brand-navy">Popular event settings in the Jacksonville area include:</p>
                    <ul class="feature-list mt-4">
                        <li>Wedding venues and reception halls</li>
                        <li>Hotels and private event spaces</li>
                        <li>Waterfront and club venues</li>
                        <li>Corporate event spaces and holiday party venues</li>
                        <li>Private homes and outdoor celebrations</li>
                    </ul>
                </div>
            </div>
        </x-layout.container>
    </x-layout.section>

    {{-- Packages --}}
    <x-home.packages id="packages" />

    {{-- Jacksonville FAQ --}}
    <x-layout.section class="bg-white">
        <x-layout.container>
            <div class="mx-auto max-w-4xl">
                <div class="mx-auto mb-12 max-w-2xl text-center">
                    <p class="eyebrow">Jacksonville FAQ</p>
                    <h2 class="mb-4">Common questions from Jacksonville couples and hosts.</h2>
                    <p class="text-brand-text">
                        A few quick answers for local events, venues, and booking expectations.
                    </p>
                </div>

                <div class="space-y-4">
                    <details class="group rounded-2xl border border-brand-navy/10 bg-white px-6 py-5 shadow-sm transition hover:shadow-md">
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                            <span class="pr-4 font-semibold text-brand-navy">Do you provide photo booth rentals throughout Jacksonville?</span>
                            <span class="shrink-0 text-xl leading-none text-brand-gold transition duration-200 group-open:rotate-45">+</span>
                        </summary>
                        <p class="mt-4 max-w-2xl text-base leading-8 text-brand-text">
                            Yes. XPRT Events serves Jacksonville and surrounding areas for weddings, private parties,
                            corporate events, and other celebrations.
                        </p>
                    </details>

                    <details class="group rounded-2xl border border-brand-navy/10 bg-white px-6 py-5 shadow-sm transition hover:shadow-md">
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                            <span class="pr-4 font-semibold text-brand-navy">How far in advance should we book a Jacksonville wedding photo booth?</span>
                            <span class="shrink-0 text-xl leading-none text-brand-gold transition duration-200 group-open:rotate-45">+</span>
                        </summary>
                        <p class="mt-4 max-w-2xl text-base leading-8 text-brand-text">
                            Popular dates can book well in advance, especially during peak wedding season.
                            If you already have your venue and date selected, it’s smart to reach out early.
                        </p>
                    </details>

                    <details class="group rounded-2xl border border-brand-navy/10 bg-white px-6 py-5 shadow-sm transition hover:shadow-md">
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                            <span class="pr-4 font-semibold text-brand-navy">Do you travel outside Jacksonville?</span>
                            <span class="shrink-0 text-xl leading-none text-brand-gold transition duration-200 group-open:rotate-45">+</span>
                        </summary>
                        <p class="mt-4 max-w-2xl text-base leading-8 text-brand-text">
                            Yes. We also serve nearby areas such as Ponte Vedra, St. Augustine, Orange Park,
                            Atlantic Beach, and other surrounding locations depending on the event.
                        </p>
                    </details>

                    <details class="group rounded-2xl border border-brand-navy/10 bg-white px-6 py-5 shadow-sm transition hover:shadow-md">
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                            <span class="pr-4 font-semibold text-brand-navy">Can the booth fit comfortably at most Jacksonville venues?</span>
                            <span class="shrink-0 text-xl leading-none text-brand-gold transition duration-200 group-open:rotate-45">+</span>
                        </summary>
                        <p class="mt-4 max-w-2xl text-base leading-8 text-brand-text">
                            In most cases, yes. We recommend a modest footprint and can help confirm the best setup
                            location with your venue or planner before the event.
                        </p>
                    </details>
                </div>
            </div>
        </x-layout.container>
    </x-layout.section>

    {{-- Testimonials --}}
    <x-home.testimonials id="testimonials" />

    {{-- CTA --}}
    <x-home.cta-banner id="cta-banner" />

    {{-- Contact Form --}}
    <x-layout.section>
        <x-layout.container>
            <x-form.contact />
        </x-layout.container>
    </x-layout.section>
</x-layout.app>