<header class="fixed top-0 z-50 w-full border-b border-white/10 bg-black/70 backdrop-blur-2xl">
    <x-layout.container>
        <div class="flex items-center justify-between py-3">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="block w-24">
                <img src="{{ asset('assets/images/branding/logo-dm.svg') }}" alt="XPRT Events Logo">
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden xl:block">
                <ul class="flex items-center">
                    @foreach ($links as $link)
                        <li>
                            <a href="{{ route($link['href']) }}"
                               class="ml-10 text-sm font-medium tracking-wide text-white/80 transition hover:text-white">
                                {{ $link['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>

            <!-- Mobile Hamburger -->
            <button id="nav-open"
                class="xl:hidden rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-white/30"
                aria-label="Open menu"
                aria-controls="mobile-nav"
                aria-expanded="false"
                type="button">
                <span class="my-1.5 block h-0.5 w-7 rounded bg-white/90"></span>
                <span class="my-1.5 block h-0.5 w-7 rounded bg-white/90"></span>
                <span class="my-1.5 block h-0.5 w-7 rounded bg-white/90"></span>
            </button>

        </div>
    </x-layout.container>
</header>

<!-- Mobile Overlay -->
<div id="nav-overlay"
     class="fixed inset-0 z-40 hidden bg-black/60 xl:hidden">
</div>

<!-- Mobile Slide Panel -->
<aside id="mobile-nav"
       class="fixed right-0 top-0 z-50 h-dvh w-80 max-w-[85vw]
              translate-x-full border-l border-white/10
              bg-black/90 backdrop-blur-xl p-6
              transition-transform duration-200 ease-out xl:hidden">

    <div class="flex items-center justify-between">
        <span class="text-sm font-medium tracking-wide text-white/80 uppercase">Menu</span>
        <button id="nav-close"
                class="rounded-lg p-2 text-white/80 hover:text-white focus:outline-none focus:ring-2 focus:ring-white/30"
                aria-label="Close menu"
                type="button">
            ✕
        </button>
    </div>

    <ul class="mt-8 space-y-4">
        @foreach ($links as $link)
            <li>
                <a href="{{ route($link['href']) }}"
                   class="block text-base font-medium tracking-wide text-white/80 transition hover:text-white">
                    {{ $link['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</aside>