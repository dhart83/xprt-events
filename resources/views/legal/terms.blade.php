<x-layout.app
    title="Terms of Service | XPRT Events"
    description="Read the terms governing use of the XPRT Events website and inquiries about our photo booth services."
    :canonical="url()->current()"
    ogImage="{{ asset('images/seo/legal-og.jpg') }}"
>

    <x-layout.section class="mt-16 scroll-mt-16 bg-[#f6f3ee]">
        <x-layout.container>
            <div class="mx-auto max-w-4xl">
                <p class="eyebrow">Legal</p>
                <h1 class="mb-4 max-w-3xl">Terms of Service</h1>
                <p class="max-w-3xl text-base leading-8 text-brand-text sm:text-lg">
                    These Terms of Service govern your use of the XPRT Events website and your interaction
                    with our services. By using this site or contacting us through it, you agree to these terms.
                </p>
            </div>
        </x-layout.container>
    </x-layout.section>

    <x-layout.section>
        <x-layout.container>
            <div class="mx-auto max-w-4xl space-y-10">
                <section class="space-y-3">
                    <h2>Use of This Website</h2>
                    <p>
                        This website is provided for general information about XPRT Events and our photo booth services.
                        You agree not to misuse the website, attempt unauthorized access, or interfere with its normal operation.
                    </p>
                </section>

                <section class="space-y-3">
                    <h2>Service Information</h2>
                    <p>
                        We make reasonable efforts to keep information on this site accurate and up to date.
                        However, package details, pricing, availability, and service offerings may change without notice.
                    </p>
                </section>

                <section class="space-y-3">
                    <h2>Inquiries and Bookings</h2>
                    <p>
                        Submitting an inquiry through our website does not guarantee availability or create a binding booking.
                        Services are only confirmed once both parties agree to the booking terms and any required payment or contract steps are completed.
                    </p>
                </section>

                <section class="space-y-3">
                    <h2>Intellectual Property</h2>
                    <p>
                        All content on this website, including branding, text, graphics, logos, and design elements,
                        is the property of XPRT Events unless otherwise noted. You may not copy, reproduce, or reuse site content
                        without prior written permission.
                    </p>
                </section>

                <section class="space-y-3">
                    <h2>Third-Party Links</h2>
                    <p>
                        This website may include links to third-party websites or platforms, such as social media or review pages.
                        We are not responsible for the content, policies, or practices of those third-party sites.
                    </p>
                </section>

                <section class="space-y-3">
                    <h2>Limitation of Liability</h2>
                    <p>
                        To the fullest extent permitted by law, XPRT Events is not liable for any indirect, incidental,
                        or consequential damages resulting from the use of this website or reliance on information provided here.
                    </p>
                </section>

                <section class="space-y-3">
                    <h2>Changes to These Terms</h2>
                    <p>
                        We may update these Terms of Service from time to time. Continued use of the website after changes are posted
                        means you accept the revised terms.
                    </p>
                </section>

                <section class="space-y-3">
                    <h2>Contact</h2>
                    <p>
                        If you have questions about these Terms of Service, contact us at
                        <a href="mailto:contact@xprtevents.com" class="font-medium text-brand-goldText hover:underline">
                            contact@xprtevents.com
                        </a>.
                    </p>
                </section>

                <section class="border-t border-brand-navy/10 pt-6">
                    <p class="text-sm text-brand-text/65">
                        Last updated: {{ now()->format('F j, Y') }}
                    </p>
                </section>
            </div>
        </x-layout.container>
    </x-layout.section>
</x-layout.app>