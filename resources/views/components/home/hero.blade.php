<section class="h-[calc(100vh-0px)] text-white">

    <x-layout.container class="h-full flex items-center">
        
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <!-- Background Image -->
            <img 
                src="{{ asset('assets/images/hero-image.png') }}"
                alt="Elegant wedding reception atmosphere"
                class="absolute h-full w-full object-cover object-top blur-[3px] brightness-65 contrast-90"
                loading="eager"
                fetchpriority="high"
            />

            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/40"></div>

            <!-- Optional: soft gradient for better text contrast -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/55 via-black/30 to-transparent"></div>
        </div>

        <div class="relative">
            <div class='text-center md:col-span-3 md:text-left'>
                <h2 class="eyebrow font-sans font-medium uppercase text-sm md:text-base mb-10 tracking-wider text-white/80">
                    Jacksonville Wedding Photo Booth
                </h2>
                <h1 class="mb-9 font-normal text-gray-200">
                    Elevate Your <span
                        class="block mt-6 font-vibes font-normal text-brand-gold text-6xl md:text-7xl leading-none">Wedding Reception</span>
                </h1>
                <p class="text-white/90 md:text-2xl mb-20 max-w-2xl">
                    Elegant backdrops, instant sharing, and professional on-site service for weddings across Jacksonville.
                </p>
                <div class="mt-9 flex flex-col md:flex-row gap-3">
                    <a class="btn btn-primary" href="{{ route('contact.index') }}">Check Availability</a>
                    <a class="btn btn-secondary text-brand-gold" href="#packages">View Packages</a>
                </div>
            </div>
        </div>
        
    </x-layout.container>
</section>