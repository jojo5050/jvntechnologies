<header class="bg-gray-800 text-white shadow">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="{{ url('/') }}">
            <img src="{{ asset('images/JVN1_trans_bg.png') }}" alt="Site Logo" style="height: 50px; width: auto;">
         
        </a>
        <nav>
            <ul class="flex space-x-8">
                <li>
                    <a href="{{ url('/') }}" 
                    class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                    Home
                    </a>
                </li>
                <li>
                    <a href="{{ url('/about') }}" 
                    class="nav-link {{ request()->is('about') ? 'active' : '' }}">
                    About
                    </a>
                </li>
                <li>
                    <a href="{{ url('/our-projects') }}" 
                    class="nav-link {{ request()->is('our-projects') ? 'active' : '' }}">
                    Projects
                    </a>
                </li>
                <li>
                    <a href="{{ url('/contact_page') }}" 
                    class="nav-link {{ request()->is('contact_page') ? 'active' : '' }}">
                    Contact
                    </a>
                </li>
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
