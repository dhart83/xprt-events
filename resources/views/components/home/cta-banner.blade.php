<!-- ====== Final CTA Section Start ====== -->
<x-layout.section id="cta" {{ $attributes->merge(['class' => 'scroll-mt-16 bg-[#f6f3ee] py-24 sm:py-28']) }}>
    <x-layout.container>
        <div class="mx-auto max-w-4xl text-center">

            <h2 class="mx-auto mb-5 max-w-2xl">
                Let’s make your wedding unforgettable.
            </h2>

            <p class="mx-auto max-w-3xl text-base leading-8 text-brand-text sm:text-lg">
                Check availability for your date and see how XPRT Events can elevate your celebration.
            </p>

            <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                <a
                    href="{{ route('contact.index') }}"
                    class="btn btn-primary w-full sm:w-auto min-w-[220px]"
                >
                    Check Availability
                </a>

                <a
                    href="#packages"
                    class="btn btn-secondary w-full sm:w-auto min-w-[220px]"
                >
                    View Packages
                </a>
            </div>

            <p class="mt-5 text-sm text-brand-text/70">
                Quick response, usually within one business day.
            </p>

        </div>
    </x-layout.container>
</x-layout.section>
<!-- ====== Final CTA Section End ====== -->