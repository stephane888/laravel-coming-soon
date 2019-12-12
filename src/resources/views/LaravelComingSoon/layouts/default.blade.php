<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- style -->
    @stack('styles')
</head>
<body>
<!-- 
    https://github.com/Okipa/laravel-bootstrap-components
    https://colorlib.com/wp/coming-soon-website-templates/ 
    http://laaris.com/coming-soon-16/03.html
-->

        <main id="app" class="@yield('container_class') d-flex flex-column justify-content-between h-100"> 
            @yield('content')
        </main>
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"
  	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  	crossorigin="anonymous"></script>
  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <!-- Script -->
  @stack('scripts')
</body>
</html>