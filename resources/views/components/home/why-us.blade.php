<!-- ====== About Section Start -->
<x-layout.section {{ $attributes->merge(['class' => '', 'id' => ''])}}>
    <x-layout.container>
        <div class="-mx-4 flex flex-wrap items-center justify-between">
            <div class="w-full px-4 lg:w-6/12">
                <div class="-mx-3 flex items-center sm:-mx-4">
                    <div class="w-full px-3 sm:px-4 xl:w-1/2">
                        <div class="py-3 sm:py-4">
                            <img src={{ asset('assets/images/salsa/features/photo-without-filter.jpeg') }} alt=""
                                class="w-full rounded-2xl" />
                        </div>
                        <div class="py-3 sm:py-4">
                            <video autoplay loop muted playsinline class="w-full rounded-2xl">
                                <source src={{ asset('assets/images/salsa/features/gif-no-filter.mp4') }}
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <div class="w-full px-3 sm:px-4 xl:w-1/2">
                        <div class="relative z-10 my-4">
                            <video autoplay loop muted playsinline class="w-full rounded-2xl">
                                <source src={{ asset('assets/images/salsa/features/video-no-filter.mp4') }}
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <span class="absolute -right-7 -bottom-7 z-[-1]">
                                <img src={{ asset('assets/images/accents/dot-square.svg') }} alt="">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                <div class="mt-10 lg:mt-0">
                    <x-banner.heading subHeading="Why Choose Us" class="mb-8 lg:mb-8 text-start ml-0">
                        Experience the Difference with XPRT Events.
                    </x-banner.heading>
                    <p class="text-body-color mb-8 text-base">
                        Discover a world of possibilities with our state-of-the-art photo booths, the perfect
                        companions for weddings, proms,
                        corporate gatherings, birthdays, and chic soirées. Equipped with cutting-edge technology and
                        an array of entertaining
                        add-ons, we ensure that every moment is captured in its full glory.
                    </p>
                    <p class="text-body-color mb-12 text-base">
                        Our photo booths offer immersive green screen adventures, captivating boomerang gifs, and a
                        touch of glamour with our
                        skin-smoothing filters. Get ready to shine, and let us make your memories unforgettable.
                    </p>
                </div>
                {{-- <div class="flex flex-col md:flex-row gap-3">
                    <a class="btn btn-primary" href="{{ route('contact.index') }}">Book Now</a>
                    <a class="btn btn-secondary" href="#section2">Learn More</a>
                </div> --}}
            </div>
        </div>
    </x-layout.container>
</x-layout.section>
<!-- ====== About Section End -->