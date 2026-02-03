<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JVN Technologies</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        
    </head>

    <style>
        @layer utilities {
    @keyframes marquee {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }

    .animate-marquee {
        display: flex;
        width: max-content;
        animation: marquee 30s linear infinite;
    }

    /* Pause animation on hover */
    .animate-marquee:hover {
        animation-play-state: paused;
    }
     }
    </style>

<body class="bg-gray-100 min-h-screen">

    {{-- Header --}}
    @include('layouts.header')

    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

</body>
</html>