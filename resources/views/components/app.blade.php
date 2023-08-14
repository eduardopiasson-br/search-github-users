<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Title --}}
    <title>{{$title}} | Github Users</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- Custom CSS --}}
    @yield('styles')
    {{-- Vite Incorporation --}}
    @vite(['resources/css/app.css', 'resources/css/bootstrap.min.css', 'resources/css/fontawesome.min.css',
     'resources/css/datatables.min.css', 'resources/js/jquery-3.7.0.slim.min.js', 'resources/js/datatables.min.js',
     'resources/js/fontawesome.min.js'])

</head>

<body class="antialiased">
    {{-- Default Nav --}}
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav m-auto">
                <li class="nav-item active mx-1" title="Pesquisar via JS">
                  <a class="btn btn-warning" href="{{ route('search.js') }}"><i class="fa-brands fa-square-js mr-1"></i> JS</a>
                </li>
                <li class="nav-item active mx-1" title="Pesquisar via PHP">
                  <a class="btn btn-primary" href="{{ route('search.php') }}"><i class="fa-brands fa-php mr-1"></i> PHP</a>
                </li>
            </div>
          </nav>
    </header>
    {{-- Content Page --}}
    @yield('content')

    {{-- Custom JS --}}
    @yield('scripts')
</body>

</html>
