<header x-data="{navbarOpen: false}" class="sticky py-3 top-0 flex w-full items-center z-50 bg-inherit">
    <x-layout.container>
        <div class="relative flex items-center justify-between">
            <a href="{{ route('home') }}" class="block w-20">
                <img class="hidden dark:flex" src={{ asset('assets/images/branding/logo-dm.svg')}} alt="logo">
                <img class="flex dark:hidden" src={{ asset('assets/images/branding/logo.svg') }} alt="logo">
            </a>
            <div class="flex w-full items-center justify-between">
                <div>
                    <nav :class="!navbarOpen && 'hidden'"
                        class="absolute right-4 top-full w-full max-w-xs rounded-lg py-4 px-6 xl:py-0 shadow bg-light dark:bg-dark xl:static xl:block xl:w-full xl:max-w-full xl:shadow-none xl:bg-inherit">
                        <ul class="block xl:flex">

                            @foreach ($links as $link)
                            <li>
                                <a href="{{ route($link['href']) }}"
                                    class="py-2 font-medium text-base lg:ml-9 lg:inline-flex hover:text-primary transition ease-in-out delay-[50ms] duration-300">
                                    {{ $link['name'] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
                <div class="flex justify-between">
                    <div class="flex items-center text-lg font-medium">
                        <div class="hidden md:block">
                            <p class="block dark:hidden text-base">Dark Mode</p>
                            <p class="hidden dark:block text-base">Light Mode</p>
                        </div>

                        <x-mode-toggle />
                    </div>
                    <button @click=" navbarOpen=!navbarOpen" class="my-auto ml-6 rounded-lg p-2 focus:ring-2 xl:hidden">
                        <span class="bg-black dark:bg-gray-100 my-1.5 block h-0.5 w-7 rounded"></span>
                        <span class="bg-black dark:bg-gray-100 my-1.5 block h-0.5 w-7 rounded"></span>
                        <span class="bg-black dark:bg-gray-100 my-1.5 block h-0.5 w-7 rounded"></span>
                    </button>
                </div>
            </div>
        </div>
    </x-layout.container>
</header>