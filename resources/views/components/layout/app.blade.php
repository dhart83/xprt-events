<!DOCTYPE html>
<html x-data="{isDark: $persist(false)}" lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    :class="isDark && 'dark'" class="scroll-smooth">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{--
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> --}}


        <meta name="description"
            content="XPRT Events LLC: Elevate your events with our state-of-the-art photobooth experiences. Weddings, corporate gatherings, birthdays, and more. Unforgettable memories, innovative technology">
        <meta name="keywords"
            content="Photobooth Rentals, Event Photography, Photo Booth Services, Customized Photobooths, Wedding Photobooths, Corporate Events, Birthday Parties, Photobooth Technology, Professional Photography, Event Memories, Event Entertainment, Digital Photo Templates, Props and Accessories, Backdrop Selection, Green Screen Technology, Custom Event Experiences, Instant Photo Prints, Event Souvenirs, Social Media Sharing, Unforgettable Moments">
        <meta name="author" content="Donnie H.">
        <meta name="robots" content="index, follow">

        {{--
        <link rel="icon" href="favicon.ico" type="image/x-icon"> TODO: Update icon image --}}

        <meta property="og:title" content="XPRT Events LLC - Capturing Memorable Moments">
        <meta property="og:description"
            content="XPRT Events LLC is your trusted partner in capturing memorable moments at your special events. We offer top-tier photo booth services and more. Contact us today!" />
        {{--
        <meta property="og:image" content="image_url"> --}}
        <meta property="og:url" content="https://xprtevents.com">

        <meta name="twitter:card" content="summary_large_image">
        {{--
        <meta name="twitter:site" content="@your_twitter_handle"> --}}
        <meta name="twitter:title" content="XPRT Events LLC - Capturing Memorable Moments">
        <meta name="twitter:description"
            content="XPRT Events LLC is your trusted partner in capturing memorable moments at your special events. We offer top-tier photo booth services and more. Contact us today!" />
        {{--
        <meta name="twitter:image" content="image_url"> --}}

        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{--
        <link rel="canonical" href="preferred_url"> --}}





        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Alpine Plugins -->
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>

        <!-- Alpine Core -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Lottie Player -->
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module">
        </script>

    </head>

    <body {{--
        class="font-sans antialiased flex flex-col min-h-screen bg-white text-gray-950 dark:bg-gray-950 dark:text-gray-200">
        --}}
        class="font-sans antialiased flex flex-col min-h-screen bg-light text-dark dark:bg-dark dark:text-light">

        <x-layout.navbar />

        <main>
            {{ $slot }}
        </main>

        <x-layout.footer />

    </body>

</html>