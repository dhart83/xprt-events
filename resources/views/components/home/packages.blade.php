<!-- ====== Pricing Section Start -->
<x-layout.section>
    <x-layout.container>
        <x-banner.heading subHeading="Our Packages"
            description="Each package offers a curated selection of services and features, making it easy to find your ideal celebration fit.">
            All inclusive event packages</x-banner.heading>
        {{-- <div class="-mx-4 flex flex-wrap justify-center"> --}}
            <div class="grid gap-9 lg:grid-cols-3">
                <x-card.package name="Value" price='599'
                    description="Photobooth rental for your event with basic props and backdrops."
                    includes="2 hours of service, unlimited photo prints, online photo gallery." href="{{
                        route('contact.index') }}">
                </x-card.package>
                <x-card.package name="Premium" price='999'
                    description="Premium photobooth rental with premium props and backdrops."
                    includes="4 hours of service, unlimited photo prints, customized experience, guest book."
                    href="{{ route('contact.index') }}" featured>
                </x-card.package>
                <x-card.package name="Luxury" price='1299'
                    description="Luxury photobooth rental with luxury props and backdrops."
                    includes="6 hours of service, unlimited photo prints, VIP experience, guest book, custom templates."
                    href="{{ route('contact.index') }}">
                </x-card.package>

            </div>
    </x-layout.container>
</x-layout.section>
<!-- ====== Pricing Section End -->