<x-layout.app
    title="XPRT Events | Premium Wedding Photo Booth in Jacksonville, FL"
    description="Premium wedding photo booth experiences in Jacksonville, Florida. Modern digital booth rentals with instant sharing, elegant styling, and professional on-site service."
    :canonical="url()->current()"
    ogImage="{{ asset('images/seo/home-og.jpg') }}"
>
    <x-home.hero id="hero" />
    <x-home.trust-strip />
    <x-home.why-us id="why-us" />
    <x-home.how-it-works id="how-it-works" />
    <x-home.packages id="packages" />
    <x-home.testimonials id="testimonials" />
    <x-home.cta-banner id="cta-banner" />
    <x-home.faq id="faq" />

    <x-layout.section>
        <x-layout.container>
            <x-form.contact />
        </x-layout.container>
    </x-layout.section>
</x-layout.app>