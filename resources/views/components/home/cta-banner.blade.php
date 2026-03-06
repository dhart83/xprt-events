<!-- ====== Final CTA Section Start ====== -->
<x-layout.section id="cta" {{ $attributes->merge(['class' => 'scroll-mt-16 bg-[#f6f3ee]']) }}>
    <x-layout.container>
        <div class="mx-auto max-w-4xl text-center">

            <h2 class="mx-auto mb-4 max-w-lg">
                Let’s make your wedding unforgettable.
            </h2>

            <p>
                Check availability for your date and learn how XPRT Events can bring a fun,
                modern photo booth experience to your celebration.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('contact.index') }}" class="btn btn-primary">
                    Check Availability
                </a>

                <a href="#packages" class="btn btn-secondary">
                    View Packages
                </a>
            </div>

        </div>
    </x-layout.container>
</x-layout.section>
<!-- ====== Final CTA Section End ====== -->