<!-- ====== Pricing Section Start -->
<x-layout.section>
    <x-layout.container>
        <x-banner.heading subHeading="Our Packages"
            description="Each package offers a curated selection of services and features, making it easy to find your ideal celebration fit.">
            All inclusive event packages</x-banner.heading>
        {{-- <div class="-mx-4 flex flex-wrap justify-center"> --}}
            <div class="grid gap-9 lg:grid-cols-3">
                <x-card.package name="Value Package" price='299'
                    description="Ideal for small gatherings, birthday parties, and casual events, this package delivers everything you need for an unforgettable experience without breaking the bank."
                    includes="2 Hours of Photo Fun, Unlimited Digital Photos, Instant Sharing, 1 Filter" href="{{
                        route('contact.index') }}">
                </x-card.package>
                <x-card.package name="Premium Package" price='599'
                    description="Perfect for those who want to elevate their event experience, this package offers everything in our Value package plus additional features to make your occasion truly special."
                    includes="4 Hours of Photo Fun, Unlimited Digital Photos, Access to a Live Gallery, Instant Sharing, Fun Props, Stylish Backdrop, 2 Filters, 1 Face Mask, GIFs, Photo Overlay"
                    href="{{ route('contact.index') }}" featured>
                </x-card.package>
                <x-card.package name="Luxury Package" price='799'
                    description="For those who want the best of the best, our Luxury Package offers everything in our Premium package plus even more exciting features to make your event unforgettable."
                    includes="4 Hours of Photo Fun, Unlimited Digital Photos, Access to a Live Gallery, Instant Sharing, Fun Props, Stylish Backdrop, 4 Filters, 4 Face Masks, GIFs, Boomerangs, Looping Videos, Animated Photo Overlay, Attendant"
                    href="{{ route('contact.index') }}">
                </x-card.package>

            </div>
    </x-layout.container>
</x-layout.section>
<!-- ====== Pricing Section End -->