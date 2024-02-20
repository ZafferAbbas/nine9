<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard - Vertical Navigation') - YourAppName</title>

    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Include Feather Icons -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    {{-- Link to your app's CSS --}}

    <style>
        /* Custom styles for full-height navigation */
        .vh-100 {
            height: 100vh;
        }

        .nav-link.active {
            background-color: #f8f9fa !important;
        }
    </style>

    {{-- Additional head content (for dynamically adding CSS/JS or other head elements) --}}
    @stack('head')
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <!-- Vertical navigation -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar vh-100">
                <div class="position-sticky pt-3">
                    <!-- Logo -->
                    <div class="sidebar-header text-center py-3">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('') }}" alt="YourAppName" style="max-height: 50px;">
                        </a>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link{{ Route::currentRouteNamed('dashboard') ? ' active' : '' }}"
                                aria-current="page" href="{{ route('dashboard') }}">
                                <i data-feather="home"></i>
                                Dashboard
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Page content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                {{-- Main content --}}
                <div class="container-fluid">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <!-- Include Bootstrap Bundle with Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <script>
        // Activate Feather icons
        feather.replace();
    </script>

    {{-- Additional scripts (for dynamically adding JS scripts at the end of the body) --}}
    @stack('scripts')

</body>

</html>
