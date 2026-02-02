<header class="bg-gray-800 text-white shadow">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="{{ url('/') }}">
            <img src="{{ asset('site-logo.png') }}" alt="Site Logo" style="height: 50px; width: auto;">
        </a>
        <nav>
            <ul class="flex items-center space-x-4 md:space-x-6">
                <li><a href="{{url('/')}}" class="hover:underline">Home</a></li>
                <li><a href="{{ url('/about') }}" class="hover:underline">About</a></li>
                <li><a href="{{ url('/#') }}" class="hover:underline">Contact</a></li>
                
            </ul>
        </nav>
    </div>
</header>

<style>
    /* Responsive tweaks to ensure the header doesn't overflow on mobile */
    @media (max-width: 540px) {
        header .container {
            flex-direction: column;
            gap: 30px;
        }
        header ul {
            flex-wrap: wrap;
            justify-content: center;
            space-x-2;
        }
        header ul li {
            margin-bottom: 5px;
        }
    }
</style>
