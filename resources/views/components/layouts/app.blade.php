<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? 'Event RSVP System' }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  @livewireStyles
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg bg-dark border-bottom border-body mb-5" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('dashboard') }}">Event RSVP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" aria-current="page"
              href="{{ route('dashboard') }}">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('events') ? 'active' : '' }}" aria-current="page"
              href="{{ route('events') }}">Event List</a>
          </li>
          <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li> -->
        </ul>
        <form class="d-flex" role="search">
          @guest
        @if (Route::has('login'))
      <a class="btn btn-success" href="{{ route('login') }}" role="button">Login</a>
    @endif
      @endguest
          @auth
        <a class="btn btn-primary" href="{{ route('logout') }}" role="button">Logout</a>
      @endauth
        </form>
      </div>
    </div>
  </nav>
  <div class="m-5 p-1">
    {{ $slot }}
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  @livewireScripts
</body>

</html>