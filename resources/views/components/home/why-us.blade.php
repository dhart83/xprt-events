<!-- ====== Experience Section Start ====== -->
<x-layout.section {{ $attributes->merge(['class' => 'scroll-mt-16']) }}>
    <x-layout.container>
        <div class="flex flex-col lg:flex-row items-center gap-16">

            <!-- Image Column -->
            <div class="w-full lg:w-6/12">
                <div class="mx-auto w-full max-w-sm lg:max-w-md">
                    <div class="aspect-[4/5] rounded-2xl overflow-hidden shadow-xl">
                        <img 
                            src="{{ asset('assets/images/salsa/wedding.png') }}" 
                            alt="Guests enjoying XPRT Events photo booth"
                            class="w-full h-full object-cover"
                        />
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="w-full lg:w-6/12">
                <div class="max-w-xl">

                    <p class="eyebrow">
                        Why Couples Choose XPRT Events
                    </p>

                    <h2 class="mb-4">
                        A refined photo booth experience that elevates your reception.
                    </h2>

                    {{-- <p>
                        XPRT Events delivers a clean, modern booth setup designed for upscale weddings
                        with professional execution that keeps your timeline smooth and your guests engaged.
                    </p> --}}

                    <p>XPRT Events delivers a clean, modern booth setup designed for upscale weddings. Professional execution keeps your timeline smooth and your guests engaged.</p>

                    <ul class="feature-list my-10">
                        <li>Crafted to complement elegant venues with a clean, refined aesthetic.</li>
                        <li>Seamless setup and clear communication planners trust.</li>
                        <li>Fast capture with instant digital delivery guests love.</li>
                        <li>Curated online gallery after the event — every moment in one place.</li>
                    </ul>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('contact.index') }}" class="btn btn-primary">
                            Check Availability
                        </a>
                        <a href="#packages" class="btn btn-secondary">
                            View Packages
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </x-layout.container>
</x-layout.section>
<!-- ====== Experience Section End ====== -->