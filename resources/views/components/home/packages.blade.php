<!-- ====== Packages Section Start ====== -->
<x-layout.section {{ $attributes->merge(['class' => 'scroll-mt-16']) }}>
    <x-layout.container>

        <div class="text-center max-w-2xl mx-auto mb-10 md:mb-16">

            <p class="eyebrow">Wedding Packages</p>

            <h2 class="mb-4">Investment designed for elegant celebrations.</h2>

            <p>
                Transparent options. Professional execution. Every package includes full setup, on-site management, and instant digital sharing.
            </p>

        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Essential -->
            <div class="rounded-2xl border border-gray-200 bg-white p-8 flex flex-col shadow-sm transition hover:shadow-md">
                <h3 class="font-serif text-2xl text-brand-goldText mb-4">Essential</h3>
                <p class="text-3xl text-brand-navy font-semibold mb-6">
                    Starting at $1,295
                </p>

                <ul class="space-y-4 text-body-color mt-6 mb-10 flex-1">
                    <li class="flex gap-3">
                        <svg class="w-5 h-5 text-brand-gold mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        3 Hours of Booth Coverage
                    </li>
                    <li class="flex gap-3">
                        <svg class="w-5 h-5 text-brand-gold mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        Elegant Backdrop Selection
                    </li>
                    <li class="flex gap-3">
                        <svg class="w-5 h-5 text-brand-gold mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        Unlimited Digital Photos
                    </li>
                    <li class="flex gap-3">
                        <svg class="w-5 h-5 text-brand-gold mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        Instant Text & Email Sharing
                    </li>
                    <li class="flex gap-3">
                        <svg class="w-5 h-5 text-brand-gold mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        On-Site Professional Attendant
                    </li>
                </ul>

                <a href="{{ route('contact.index') }}" class="btn btn-secondary w-full text-center">
                    Check Availability
                </a>
            </div>

            <!-- Signature (Most Popular) -->
            <div class="rounded-2xl border-2 border-brand-gold bg-white p-8 flex flex-col shadow-lg relative transition hover:shadow-xl">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-brand-gold text-white text-xs px-4 py-1 rounded-full tracking-wide">
                    Most Popular
                </div>

                <h3 class="font-serif text-2xl text-brand-goldText mb-4">Signature</h3>
                <p class="text-3xl text-brand-navy font-semibold mb-6">
                    Starting at $1,795
                </p>

                <ul class="space-y-4 text-body-color mt-6 mb-10 flex-1">
                    <li  class="flex gap-3">
                        <svg class="w-5 h-5 text-brand-gold mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        4 Hours of Booth Coverage
                    </li>
                    <li  class="flex gap-3">
                        <svg class="w-5 h-5 text-brand-gold mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        Premium Backdrop Collection
                    </li>
                    <li  class="flex gap-3">
                        <svg class="w-5 h-5 text-brand-gold mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        Custom Overlay Design
                    </li>
                    <li  class="flex gap-3">
                        <svg class="w-5 h-5 text-brand-gold mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        GIF + Boomerang Capture
                    </li>
                    <li  class="flex gap-3">
                        <svg class="w-5 h-5 text-brand-gold mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        Online Gallery Access
                    </li>
                    <li  class="flex gap-3">
                        <svg class="w-5 h-5 text-brand-gold mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        Setup & Breakdown Included
                    </li>
                </ul>

                <a href="{{ route('contact.index') }}" class="btn btn-primary w-full text-center">
                    Check Availability
                </a>
            </div>

            <!-- Luxury -->
            <div class="rounded-2xl border border-gray-200 bg-white p-8 flex flex-col shadow-sm transition hover:shadow-md">
                <h3 class="font-serif text-2xl text-brand-goldText mb-4">Luxury</h3>
                <p class="text-3xl text-brand-navy font-semibold mb-6">
                    Starting at $2,395
                </p>

                <ul class="space-y-4 text-body-color mt-6 mb-10 flex-1">
                    <li class="flex gap-3">
                        <svg class="w-5 h-5 text-brand-gold mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        5 Hours of Booth Coverage
                    </li>
                    <li class="flex gap-3">
                        <svg class="w-5 h-5 text-brand-gold mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        Luxury Backdrop or Green Screen
                    </li>
                    <li class="flex gap-3">
                        <svg class="w-5 h-5 text-brand-gold mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        Advanced Capture Effects
                    </li>
                    <li class="flex gap-3">
                        <svg class="w-5 h-5 text-brand-gold mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        Custom Branding Experience
                    </li>
                    <li class="flex gap-3">
                        <svg class="w-5 h-5 text-brand-gold mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        Guest Book Station Option
                    </li>
                    <li class="flex gap-3">
                        <svg class="w-5 h-5 text-brand-gold mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        Priority Support & Planning
                    </li>
                </ul>

                <a href="{{ route('contact.index') }}" class="btn btn-secondary w-full text-center">
                    Check Availability
                </a>
            </div>

        </div>

        <p class="text-center text-gray-600 text-sm mt-4 lg:mt-16">
            * Custom packages available for larger weddings and multi-day events.
        </p>

    </x-layout.container>
</x-layout.section>
<!-- ====== Packages Section End ====== -->