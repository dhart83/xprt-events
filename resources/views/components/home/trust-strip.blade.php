<x-layout.section class="bg-white border-y border-gray-200 py-6 md:py-8">
    <x-layout.container>
        <div class="flex flex-col items-center gap-5">

            {{-- top trust line --}}
            <div class="flex flex-col items-center justify-center gap-3 text-center sm:flex-row sm:text-left">
                <div class="flex items-center gap-3">
                    <span class="text-sm tracking-[0.2em] text-brand-goldText">
                        ★★★★★
                    </span>
                    <span class="text-sm font-medium text-brand-navy">
                        5.0 rating on Google
                    </span>
                </div>

                <div class="hidden h-4 w-px bg-gray-300 sm:block"></div>

                <p class="text-sm text-gray-600">
                    Trusted by couples across Jacksonville
                </p>
            </div>

            {{-- feature strip --}}
            <div class="grid w-full grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4 lg:gap-6">
                <div class="flex items-center justify-center gap-2 text-center">
                    <svg class="h-5 w-5 shrink-0 text-brand-goldText" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span class="text-sm text-gray-700">Setup &amp; Breakdown Included</span>
                </div>

                <div class="flex items-center justify-center gap-2 text-center">
                    <svg class="h-5 w-5 shrink-0 text-brand-goldText" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span class="text-sm text-gray-700">Professional On-Site Attendant</span>
                </div>

                <div class="flex items-center justify-center gap-2 text-center">
                    <svg class="h-5 w-5 shrink-0 text-brand-goldText" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span class="text-sm text-gray-700">Unlimited Digital Photos</span>
                </div>

                <div class="flex items-center justify-center gap-2 text-center">
                    <svg class="h-5 w-5 shrink-0 text-brand-goldText" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span class="text-sm text-gray-700">Instant Text &amp; Email Sharing</span>
                </div>
            </div>
        </div>
    </x-layout.container>
</x-layout.section>