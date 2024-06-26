<!-- ====== Footer Section Start -->
<footer class="relative z-10 pt-20 pb-4 mt-auto lg:pt-28">
    <x-layout.container>
        {{-- <div class="flex flex-wrap"> --}}
            <div class="grid gap-4 md:gap-12 md:grid-cols-2">
                <div class="">
                    <div class="mb-10 flex flex-col md:items-end">
                        <a href="{{ route('home') }}" class="mb-6 block w-20">
                            <img class="hidden dark:flex" src={{ asset('assets/images/branding/logo-dm.svg')}}
                                alt="logo">
                            <img class="flex dark:hidden" src={{ asset('assets/images/branding/logo.svg') }} alt="logo">
                        </a>
                        <p class="flex items-center text-sm font-medium mb-5">
                            <span class="mr-3">
                                <x-icon.mail />
                            </span>
                            <span>contact@xprtevents.com</span>
                        </p>
                        {{-- <p class="flex items-center text-sm font-medium">
                            <span class="mr-3">
                                <x-icon.phone />
                            </span>
                            <span>(904) 555-5555</span>
                        </p> --}}
                    </div>
                </div>
                <div class="">
                    <div class="mb-10 w-full">
                        <h4 class="mb-9 text-lg font-semibold">Links</h4>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}" class="mb-2 inline-block leading-loose">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact.index') }}" class="mb-2 inline-block leading-loose">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <p class="text-center">&copy; {{ date('Y') }} XPRT Events LLC. All rights reserved.
    </x-layout.container>
    <div>
        <span class="absolute left-0 bottom-0 z-[-1]">
            <svg width="217" height="229" viewBox="0 0 217 229" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M-64 140.5C-64 62.904 -1.096 1.90666e-05 76.5 1.22829e-05C154.096 5.49924e-06 217 62.904 217 140.5C217 218.096 154.096 281 76.5 281C-1.09598 281 -64 218.096 -64 140.5Z"
                    fill="url(#paint0_linear_1179_5)" />
                <defs>
                    <linearGradient id="paint0_linear_1179_5" x1="76.5" y1="281" x2="76.5" y2="1.22829e-05"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#3056D3" stop-opacity="0.08" />
                        <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                    </linearGradient>
                </defs>
            </svg>
        </span>
        <span class="absolute top-10 right-10 z-[-1]">
            <svg width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M37.5 -1.63918e-06C58.2107 -2.54447e-06 75 16.7893 75 37.5C75 58.2107 58.2107 75 37.5 75C16.7893 75 -7.33885e-07 58.2107 -1.63918e-06 37.5C-2.54447e-06 16.7893 16.7893 -7.33885e-07 37.5 -1.63918e-06Z"
                    fill="url(#paint0_linear_1179_4)" />
                <defs>
                    <linearGradient id="paint0_linear_1179_4" x1="-1.63917e-06" y1="37.5" x2="75" y2="37.5"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#13C296" stop-opacity="0.31" />
                        <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                    </linearGradient>
                </defs>
            </svg>
        </span>
    </div>
</footer>
<!-- ====== Footer Section End -->