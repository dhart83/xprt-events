<div {{ $attributes->merge([]) }}>
    <div class="relative overflow-hidden rounded-lg">
        <img src={{ $src }} alt="image" class="w-full" />
        <div class="absolute bottom-5 left-0 w-full text-center">
            <div class="relative mx-5 overflow-hidden rounded-lg bg-light dark:bg-dark py-5 px-3">
                <p class="font-semibold text-sm">{{ $slot }}</p>
                <div>
                    <span class="absolute left-0 bottom-0">
                        <svg width="61" height="30" viewBox="0 0 61 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="16" cy="45" r="45" fill="#13C296" fill-opacity="0.11" />
                        </svg>
                    </span>
                    <span class="absolute top-0 right-0">
                        <img src={{ asset("assets/images/accents/dot-square.svg") }} class="w-12" alt="">
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>