<x-layout.app
    title="Privacy Policy | XPRT Events"
    description="Learn how XPRT Events collects, uses, and protects information submitted through our website when you inquire about our wedding photo booth services."
    :canonical="url()->current()"
    ogImage="{{ asset('images/seo/legal-og.jpg') }}"
>

    <x-layout.section class="mt-16 scroll-mt-16 bg-[#f6f3ee]">
        <x-layout.container>
            <div class="mx-auto max-w-4xl">
                <p class="eyebrow">Legal</p>
                <h1 class="mb-4 max-w-3xl">Privacy Policy</h1>
                <p class="max-w-3xl text-base leading-8 text-brand-text sm:text-lg">
                    XPRT Events respects your privacy. This page explains what information we collect,
                    how we use it, and how we protect it when you visit our website or contact us about our services.
                </p>
            </div>
        </x-layout.container>
    </x-layout.section>

    <x-layout.section>
        <x-layout.container>
            <div class="mx-auto max-w-4xl space-y-10">
                <section class="space-y-3">
                    <h2>Information We Collect</h2>
                    <p>
                        When you submit an inquiry through our website, we may collect information such as your name,
                        email address, phone number, event date, venue details, and any additional information you provide.
                    </p>
                    <p>
                        We may also collect limited technical information automatically, such as browser type,
                        device information, and general website usage data.
                    </p>
                </section>

                <section class="space-y-3">
                    <h2>How We Use Your Information</h2>
                    <p>We use the information you provide to:</p>
                    <ul class="feature-list">
                        <li>Respond to inquiries and confirm availability</li>
                        <li>Provide pricing, package details, and service information</li>
                        <li>Communicate about bookings and event logistics</li>
                        <li>Improve the performance and usability of our website</li>
                    </ul>
                </section>

                <section class="space-y-3">
                    <h2>How We Protect Your Information</h2>
                    <p>
                        We take reasonable steps to protect the information submitted through our website.
                        However, no online system can guarantee absolute security, so you provide information at your own risk.
                    </p>
                </section>

                <section class="space-y-3">
                    <h2>Sharing of Information</h2>
                    <p>
                        We do not sell or rent your personal information. We may share information only when necessary
                        to operate our business, comply with legal obligations, or work with trusted service providers
                        that help us run our website or communications.
                    </p>
                </section>

                <section class="space-y-3">
                    <h2>Cookies and Analytics</h2>
                    <p>
                        Our website may use cookies or similar technologies to improve user experience, understand traffic,
                        and analyze site performance. You can usually manage cookie settings through your browser.
                    </p>
                </section>

                <section class="space-y-3">
                    <h2>Your Choices</h2>
                    <p>
                        You may contact us at any time if you would like us to update or delete the information you submitted,
                        subject to any legal or business recordkeeping requirements.
                    </p>
                </section>

                <section class="space-y-3">
                    <h2>Contact</h2>
                    <p>
                        If you have any questions about this Privacy Policy, please contact us at
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