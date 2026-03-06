<!-- ====== How It Works Section Start ====== -->
<x-layout.section {{ $attributes->merge(['class' => 'scroll-mt-16']) }}>
    <x-layout.container>

        <div class="flex flex-col lg:flex-row items-start gap-16">

            <!-- Content -->
            <div class="">
                <div class="max-w-xl">

                    <p class="eyebrow">
                        How It Works
                    </p>

                    <h2 class="mb-4">
                        Simple booking. Seamless setup. Guests love it.
                    </h2>

                    <p>
                        We keep the process straightforward so you get a premium experience without extra planning work.
                        From the first message to the final gallery, everything is handled professionally and on time.
                    </p>
                </div>
                <div class="mt-10 w-full grid lg:grid-cols-2 gap-6">
                        <!-- Step 1 -->
                        <div class="rounded-2xl border border-black/10 p-6">
                            <p class="text-xs tracking-wide uppercase text-brand-goldText mb-2">Step 1</p>
                            <h3 class="mb-2 font-serif text-xl">Check availability</h3>
                            <p class="text-body-color text-base">
                                Send your date, venue, and estimated guest count. We’ll confirm availability and recommend the best package.
                            </p>
                        </div>

                        <!-- Step 2 -->
                        <div class="rounded-2xl border border-black/10 p-6">
                            <p class="text-xs tracking-wide uppercase text-brand-goldText mb-2">Step 2</p>
                            <h3 class="mb-2 font-serif text-xl">Customize the look</h3>
                            <p class="text-body-color text-base">
                                Choose your backdrop style and we’ll design a clean overlay that fits your wedding aesthetic.
                            </p>
                        </div>

                        <!-- Step 3 -->
                        <div class="rounded-2xl border border-black/10 p-6">
                            <p class="text-xs tracking-wide uppercase text-brand-goldText mb-2">Step 3</p>
                            <h3 class="mb-2 font-serif text-xl">We run the booth</h3>
                            <p class="text-body-color text-base">
                                We arrive early, set up, and manage the booth so guests have an effortless experience all night.
                            </p>
                        </div>

                        <!-- Step 4 -->
                        <div class="rounded-2xl border border-black/10 p-6">
                            <p class="text-xs tracking-wide uppercase text-brand-goldText mb-2">Step 4</p>
                            <h3 class="mb-2 font-serif text-xl">Receive your gallery</h3>
                            <p class="text-body-color text-base">
                                After your event, you get a curated online gallery of every moment captured.
                            </p>
                        </div>
                    </div>

                    <div class="mt-10 flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('contact.index') }}" class="btn btn-primary">
                            Check Availability
                        </a>
                        <a href="#packages" class="btn btn-secondary">
                            View Packages
                        </a>
                    </div>
            </div>
        </div>

    </x-layout.container>
</x-layout.section>
<!-- ====== How It Works Section End ====== -->