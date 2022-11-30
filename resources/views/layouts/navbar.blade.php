<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="https://laravel.com/img/logomark.min.svg" width="30" height="30" class="d-inline-block align-top"
        alt="{{ __(config('app.name', 'Laravel')) }}">
      {{ __(config('app.name', 'Laravel')) }}</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">
        <!-- Authentication Links -->
        {{-- @auth
        <li class="nav-item {{ (strpos(Route::currentRouteName(), 'home') === 0) ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('home') }}"><i class="bi bi-house"></i>
            <span>{{ __('Home') }}</span></a>
        </li>
        <li class="nav-item {{ (strpos(Route::currentRouteName(), 'users.index' ) === 0) ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('users.index') }}"><i class="bi bi-people"></i>
            <span>{{ __('Users') }}</span></a>
        </li>
        @endauth --}}
      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        {{-- <a class="nav-item nav-link" href="#"><i class="bi bi-house"></i><span>{{ __('Home') }}</span></a>
        <a class="nav-item nav-link" href="#"><i class="bi bi-gear"></i><span>{{ __('Projects') }}</span></a>
        <a class="nav-item nav-link" href="#"><i class="bi bi-people"></i><span>{{ __('Team') }}</span></a>
        <a class="nav-item nav-link" href="#"><i class="bi bi-pie-chart"></i><span>{{ __('Reports') }}</span></a>
        <a class="nav-item nav-link" href="#"><i class="bi bi-briefcase"></i><span>{{ __('Careers') }}</span></a>
        <a class="nav-item nav-link" href="#"><i class="bi bi-envelope"></i><span>{{ __('Messages') }}</span></a>
        <a class="nav-item nav-link" href="#"><i class="bi bi-bell"></i><span>{{ __('Notifications') }}</span></a> --}}
        @endguest
        <!-- Authentication Links -->
        @auth
        <li class="nav-item {{ (strpos(Route::currentRouteName(), 'home') === 0) ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('home') }}"><i class="bi bi-house"></i>
            <span>{{ __('Home') }}</span></a>
        </li>
        <li class="nav-item {{ (strpos(Route::currentRouteName(), 'users.index' ) === 0) ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('users.index') }}"><i class="bi bi-people"></i>
            <span>{{ __('Users') }}</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            <img src="https://www.tutorialrepublic.com/examples/images/avatar/3.jpg" class="avatar" alt="Avatar">
            <span>{{ Auth::user()->name }}</span></a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#"><i class="bi bi-person"></i>
              {{ __('Profile') }}</a>
            <a class="dropdown-item" href="#"><i class="bi bi-calendar"></i>
              {{ __('Calendar') }}</a>
            <a class="dropdown-item" href="#"><i class="bi bi-sliders"></i>
              {{ __('Settings') }}</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="bi bi-power"></i>
              {{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
