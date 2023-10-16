<section class="h-[calc(100vh-70px)] text-white">
    {{-- h-full --}}
    <x-layout.container class="h-full flex items-center">
        <div class='absolute inset-0 -z-10'>
            {{-- w-full h-full --}}
            <video class='absolute h-full w-full object-cover' src={{asset('assets/videos/hero-video.mp4')}}
                typeof='video/mp4' autoPlay loop muted></video>
            {{-- w-full h-full --}}
            <div class='absolute w-full h-full bg-black opacity-70'></div>
        </div>
        <div class="relative">
            {{-- grid md:grid-cols-4 xl:grid-cols-5 --}}
            <div class='text-center md:col-span-3 md:text-left'>
                <h2 class="font-sans font-normal text-lg md:text-2xl mb-12">
                    Jacksonville's Top-Tier Photo Booth Provider
                </h2>
                <h1 class="mb-9">
                    We Craft Unforgettable <span
                        class="block mt-6 font-vibes font-normal text-7xl lg:text-8xl tracking-wide">Photobooth
                        Experiences</span>
                </h1>
                <p class="text-white md:text-2xl mb-6">
                    Elevate Weddings & Corporate Events with Our Custom Taylored Premium Photobooth Services
                </p>
                <div class="mt-9 flex flex-col md:flex-row gap-3">
                    <a class="btn btn-primary" href="{{ route('contact.index') }}">Book Now</a>
                    <a class="btn btn-secondary text-white" href="#section1">Learn More</a>
                </div>
            </div>
        </div>
    </x-layout.container>
</section>