<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>{{ __(config('app.name', 'Laravel')) }}</title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
  @stack('styles')
</head>

<body>
  <div id="app">
    @include('layouts.navbar')

    <main class="py-4">
      <div class="container">
        <div class="row justify-content-center">
          @yield('content')
        </div>
      </div>
    </main>

  </div>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  @stack('scripts')
</body>

</html>
