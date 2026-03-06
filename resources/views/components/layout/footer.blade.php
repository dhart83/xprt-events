<!-- ====== Footer Start ====== -->
<footer class="border-t border-black/10 bg-white py-16">
    <x-layout.container>
        <div class="grid gap-12 lg:grid-cols-3">

            <!-- Brand -->
            <div>
                <a href="{{ route('home') }}" class="inline-block">
                    <img class="w-28" src="{{ asset('assets/images/branding/logo.svg') }}" alt="XPRT Events logo">
                </a>

                <p class="mt-5 text-body-color">
                    Premium photo booth experiences for weddings in Jacksonville and surrounding areas.
                </p>

                <p class="mt-5 text-sm text-body-color">
                    <span class="font-semibold text-gray-900">Service Area:</span>
                    Jacksonville, FL + surrounding areas
                </p>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="mb-5 text-lg font-semibold">Contact</h4>

                <ul class="space-y-3 text-body-color">
                    <li class="flex items-center gap-3">
                        <span class="text-brand-text">
                            <x-icon.mail />
                        </span>
                        <a class="hover:text-brand-goldText transition" href="mailto:contact@xprtevents.com">
                            contact@xprtevents.com
                        </a>
                    </li>

                    {{-- Add phone when you're ready --}}
                    {{-- 
                    <li class="flex items-center gap-3">
                        <span class="text-brand-text">
                            <x-icon.phone />
                        </span>
                        <a class="hover:text-gray-900 transition" href="tel:+1904XXXXXXX">
                            (904) XXX-XXXX
                        </a>
                    </li> 
                    --}}

                    <li class="pt-2">
                        <a href="{{ route('contact.index') }}" class="btn btn-secondary">
                            Check Availability
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Links -->
            <div>
                <h4 class="mb-5 text-lg font-semibold">Quick Links</h4>

                <ul class="space-y-3 text-body-color">
                    <li>
                        <a class="hover:text-brand-goldText transition" href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a class="hover:text-brand-goldText transition" href="#packages">Packages</a>
                    </li>
                    <li>
                        <a class="hover:text-brand-goldText transition" href="#reviews">Google Reviews</a>
                    </li>
                    <li>
                        <a class="hover:text-brand-goldText transition" href="{{ route('contact.index') }}">Contact</a>
                    </li>

                    {{-- Update these when you have URLs --}}
                    <li class="pt-2">
                        <a class="hover:text-brand-goldText transition" href="#" target="_blank" rel="noopener">
                            Instagram
                        </a>
                    </li>
                    <li>
                        <a class="hover:text-brand-goldText transition" href="#" target="_blank" rel="noopener">
                            View All Google Reviews
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="mt-12 flex flex-col gap-4 border-t border-black/10 pt-8 text-sm text-body-color md:flex-row md:items-center md:justify-between">
            <p>&copy; {{ date('Y') }} XPRT Events LLC. All rights reserved.</p>

            <div class="flex gap-6">
                {{-- Add real pages later if you create them --}}
                {{-- <a class="hover:text-gray-900 transition" href="{{ route('privacy') }}">Privacy</a>
                <a class="hover:text-gray-900 transition" href="{{ route('terms') }}">Terms</a> --}}
            </div>
        </div>
    </x-layout.container>
</footer>
<!-- ====== Footer End ====== -->