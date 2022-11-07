<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link" href="{{ url('/') }}">Home</a></li>
        {{-- if not in home page --}}
        @if (Request::path() != '/')
            <li><a class="nav-link" href="{{ url('/') }}#about">About</a></li>
            <li><a class="nav-link" href="{{ url('/') }}#services">Downloads</a></li>
        @else
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto" href="#services">Downloads</a></li>
        @endif
        <li><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
        <li><a class="nav-link" href="{{ route('notifications') }}">Notifications</a></li>
        <li>
            @auth
                <a class="scrollto nav-link" href={{ url('/login') }}>Dashboard</a>
            @endauth
            @guest
                <a class="scrollto nav-link" href={{ url('/login') }}>Login</a>
            @endguest
        </li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->
