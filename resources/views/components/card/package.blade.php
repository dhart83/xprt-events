<div>
    <div
        class="h-full flex flex-col shadow-lg relative z-10 mb-10 overflow-hidden rounded-xl ring-1 dark:ring-black dark:shadow-black ring-slate-200 py-10 px-8 sm:p-12 lg:py-10 lg:px-6 xl:p-12">
        <span class="mb-4 block text-lg font-semibold text-secondary">
            {{ $name }}
        </span>
        <p class="mb-2 pb-8 text-base">
            {{ $description }}
        </p>
        <div class="bg-blue-50 dark:bg-black/20 bg-opacity-50 rounded-lg text-center">
            <p class="text-sm mt-3">Starting at</p>
            <h2 class="mb-5 mt-2 text-[42px] font-semibold font-sans">
                <span class="text-center"><span class="text-[36px]">$</span>{{ $price }}</span>
            </h2>
        </div>
        <div class="mt-8 border-t border-light dark:border-dark">
            <p class="mt-6 font-semibold">Package Includes:</p>
            <div class="mb-7 mt-5">
                <ul class="">
                    @foreach (explode(',', $includes) as $include)
                    <li class="flex">
                        <img class="w-4 mr-3" src={{ asset('assets/images/accents/checkmark.svg') }} alt="">
                        {{ trim($include) }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <a href="{{ $href }}" class="btn btn-{{$featured ? 'primary' : 'secondary'}} mt-auto">
            Choose {{ $name }}
        </a>
        <div class="mt-3 text-[12px] italic text-center">* Pricing subject to change</div>
        <div>
            <span class="absolute right-0 top-7 z-[-1]">
                <img src={{ asset('assets/images/accents/circle-seg-top-left.svg') }} alt="">
            </span>
            <span class="absolute right-4 top-4 z-[-1]">
                <img src={{ asset('assets/images/accents/dot-rectangle.svg') }} alt="">
            </span>
        </div>
    </div>
</div>