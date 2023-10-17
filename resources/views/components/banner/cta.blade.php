<!-- ====== Call To Action Section Start -->
<x-layout.section>
    <div class="relative z-10 overflow-hidden rounded bg-secondary py-12 px-8 md:p-[70px] text-center md:text-left">
        <x-layout.container>
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4 lg:w-1/2">
                    <span class="mb-2 font-semibold text-white">
                        Schedule Your Next Dream Event
                    </span>
                    <h2 class="mb-6 text-3xl font-bold leading-tight text-white sm:mb-8 sm:text-[38px] lg:mb-0">
                        <span class="xs:block">Schedule your event today </span>
                        and we'll take care of the rest
                    </h2>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div class="flex flex-col-reverse md:flex-row lg:justify-end">
                        <a class="btn btn-secondary text-light hover:shadow-lg md:px-9 md:py-4"
                            href="{{ route('contact.index') }}">
                            See More Features
                        </a>
                        <a class="btn btn-primary hover:shadow-lg mb-3 md:mb-0 md:ml-4 md:px-9 md:py-4"
                            href="{{ route('contact.index') }}">
                            Schedule Your Event
                        </a>
                    </div>
                </div>
            </div>

            <div>
                <span class="absolute top-0 left-0 z-[-1]">
                    <svg width="189" height="162" viewBox="0 0 189 162" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="16" cy="-16.5" rx="173" ry="178.5" transform="rotate(180 16 -16.5)"
                            fill="url(#paint0_linear)" />
                        <defs>
                            <linearGradient id="paint0_linear" x1="-157" y1="-107.754" x2="98.5011" y2="-106.425"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" stop-opacity="0.07" />
                                <stop offset="1" stop-color="white" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                    </svg>
                </span>
                <span class="absolute bottom-0 right-0 z-[-1]">
                    <svg width="191" height="208" viewBox="0 0 191 208" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="173" cy="178.5" rx="173" ry="178.5" fill="url(#paint0_linear)" />
                        <defs>
                            <linearGradient id="paint0_linear" x1="-3.27832e-05" y1="87.2457" x2="255.501" y2="88.5747"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" stop-opacity="0.07" />
                                <stop offset="1" stop-color="white" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                    </svg>
                </span>
            </div>
        </x-layout.container>
    </div>
</x-layout.section>
<!-- ====== Call To Action Section End -->