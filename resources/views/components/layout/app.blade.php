@props([
    'title' => 'XPRT Events | Premium Wedding Photo Booth in Jacksonville, FL',
    'description' => 'Premium wedding photo booth experiences in Jacksonville, Florida. Modern digital booth rentals with instant sharing, elegant styling, and professional on-site service.',
    'canonical' => url()->current(),
    'robots' => 'index, follow',
    'ogImage' => asset('images/seo/home-og.jpg'),
    'siteName' => 'XPRT Events',
])

<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="scroll-smooth"
>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <meta name="robots" content="{{ $robots }}">
    <link rel="canonical" href="{{ $canonical }}">

    <meta name="application-name" content="{{ $siteName }}">
    <meta name="apple-mobile-web-app-title" content="{{ $siteName }}">
    <meta name="theme-color" content="#F6F3EE">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ $siteName }}">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:url" content="{{ $canonical }}">
    <meta property="og:image" content="{{ $ogImage }}">

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta name="twitter:image" content="{{ $ogImage }}">

    {{-- Favicons: wire these up once the files exist --}}
    
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
   

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "EventService",
            "name": "XPRT Events LLC",
            "image": "https://xprtevents.com/images/seo/home-og.jpg",
            "url": "https://xprtevents.com",
            "telephone": "",
            "email": "contact@xprtevents.com",
            "priceRange": "$$",
            "address": {
              "@type": "PostalAddress",
              "addressLocality": "Jacksonville",
              "addressRegion": "FL",
              "addressCountry": "US"
            },
            "areaServed": {
                "@type": "City",
                "name": "Jacksonville"
            },
            "serviceType": [
                "Wedding Photo Booth Rental",
                "Corporate Event Photo Booth",
                "Birthday Party Photo Booth",
                "Event Photo Booth Services"
            ],
            "sameAs": [
                "https://www.instagram.com/xprtevents",
                "https://www.facebook.com/xprtevents",
                "https://maps.app.goo.gl/BJorPBcsZhDWCb9V7"
            ]
        }
    </script>

    <!-- Alpine Plugins -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>

    <!-- Alpine Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Lottie Player -->
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
</head>

<body class="flex min-h-screen flex-col bg-brand-bg font-sans antialiased text-brand-text">
    <x-layout.navbar />

    <main>
        {{ $slot }}
    </main>

    <x-layout.footer />
</body>
</html>