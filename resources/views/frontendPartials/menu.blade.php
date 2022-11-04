<nav id="navbar" class="navbar">
  <ul class="bi bi-list">
    <li><a class="nav-link" href="{{url('/')}}">Home</a></li>
<<<<<<< HEAD
    <li><a class="nav-link scrollto" href="#about">About</a></li>
    <li><a class="nav-link scrollto" href="#services">Downloads</a></li>
    <li><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>
=======
    <li><a class="nav-link scrollto" href="{{url('/')}}#about">About</a></li>
    <li><a class="nav-link scrollto" href="{{url('/')}}#services">Downloads</a></li>
    <li><a class="nav-link" href="{{route('notifications')}}">Notifications</a></li>
    <li><a class="nav-link scrollto" href="{{url('/')}}#services">Gallery</a></li>
    <li><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
>>>>>>> 6e46598496d90112b92808a15a1f141347d939b5
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
