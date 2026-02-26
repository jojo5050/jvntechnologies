<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="A leading software development company in Nigeria. Headquartered in the heart of the Federal Capital Territory, Abuja">

        <title>JVN Technologies</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        
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

    .animate-marquee:hover {
        animation-play-state: paused;
    }
     }

     .nav-link {
        color: #ffffff; 
        position: relative;
        transition: color 0.3s ease;
        text-decoration: none;
    }

    .nav-link.active {
        color: #2563eb !important; 
        font-weight: 700;
    }

    .nav-link.active::after {
        content: '';
        position: absolute;
        bottom: -4px;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: #2563eb;
    }

  
    .nav-link:hover {
        color: #2563eb;
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