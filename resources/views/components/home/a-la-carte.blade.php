<!-- ====== A La Carte Section Start -->
<x-layout.section>
    <x-layout.container>
        {{-- <div class="text-center mb-20">
            <h2>Get started in 3 easy steps</h2>
        </div> --}}
        <x-banner.heading subHeading="A la Carte"
            description="Mix and match to create a personalized adventure that perfectly suits your event's unique style">
            Create your custom experience in 3 easy steps</x-banner.heading>

        <x-step-segment step="1" title="Explore our base package">
            <x-slot name="left">
                <p>Begin your photobooth journey by reviewing our comprehensive base package. Discover all the exciting
                    features and
                    inclusions that form the foundation of your memorable event.</p>
            </x-slot>
            <x-slot name="right">
                <a href="">
                    <div class="relative w-52 h-80 hover:scale-105 transition ease-in-out delay-[50ms] duration-300">
                        <img class="absolute object-cover w-full h-full" src={{
                            asset('assets/images/salsa/salsa-head.svg') }} alt="">
                        <img class="absolute object-cover w-full h-full -translate-x-1 -translate-y-4 scale-105"
                            type="image/svg+xml" src={{ asset('assets/images/salsa/salsa-led-ring.svg') }} alt="">
                        <video class="absolute object-cover h-[125px] translate-x-[53px] translate-y-[80px]" autoplay
                            loop muted>
                            <source src={{ asset('assets/images/salsa/salsa-video.m4v') }} type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </a>
            </x-slot>
            <x-slot name="cta">
                <p>Learn more about our
                    <a href="/"
                        class="text-secondary underline underline-offset-2 hover:text-primary transition ease-in-out delay-[50ms] duration-300">base
                        package</a>
                </p>
            </x-slot>
        </x-step-segment>


        <x-step-segment step="2" title="Tailor Your Experience">
            <x-slot name="left">
                <p>
                    Take your event to the next level by customizing your photobooth experience with our wide range of
                    add-ons. Whether it's
                    extra hours, themed props, or unique backdrops, our add-ons allow you to personalize your photobooth
                    rental to suit your
                    event's unique style and needs.
                </p>
            </x-slot>
            <x-slot name="cta">
                <p>Explore our
                    <a href="/"
                        class="text-secondary underline underline-offset-2 hover:text-primary transition ease-in-out delay-[50ms] duration-300">customizations</a>
                </p>
            </x-slot>
        </x-step-segment>


        <x-step-segment step="3" title="Book Your Event">
            <x-slot name="left">
                <p>
                    Ready to make your event unforgettable? It's time to book your date with us! Get in touch with our
                    friendly
                    team to
                    discuss your event details, check availability, and secure your photobooth rental.
                </p>
            </x-slot>
            <x-slot name="right">
                <div
                    class="rounded-lg overflow-hidden shadow-lg dark:shadow-black hover:shadow-xl transition ease-in-out delay-[50ms] duration-300">
                    <a href="{{ route('contact.index') }}">
                        <img class="block dark:hidden object-cover w-full h-full" src={{
                            asset('assets/images/contact-form.JPG') }} alt="">
                        <img class="hidden dark:block object-cover w-full h-full" src={{
                            asset('assets/images/contact-form-dark.JPG') }} alt="">
                    </a>
                </div>
            </x-slot>
            <x-slot name="cta">
                <div class="mt-6">
                    <a class="btn btn-primary" href="{{ route('contact.index') }}">Book Now</a>
                </div>
            </x-slot>
        </x-step-segment>


    </x-layout.container>
</x-layout.section>
<!-- ====== A La Carte Section End -->