<nav id="navbar" class="navbar">
  <ul>
    <li><a class="nav-link" href="{{url('/')}}">Home</a></li>
    <li><a class="nav-link scrollto" href="{{url('/')}}#about">About</a></li>
    <li><a class="nav-link scrollto" href="{{url('/')}}#services">Downloads</a></li>
    <li><a class="nav-link scrollto" href="{{url('/')}}#services">Notifications</a></li>
    <li><a class="nav-link scrollto" href="{{url('/')}}#services">Gallery</a></li>
    <li><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
    <li>
      @auth
      <a class="getstarted scrollto" href={{url('/login')}}>Dashboard</a>
      @endauth
      @guest
      <a class="getstarted scrollto" href={{url('/login')}}>Login</a>
      @endguest
    </li>
  </ul>
  <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->
