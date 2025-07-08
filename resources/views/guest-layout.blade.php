@props([
'title' => 'CMS Project'
])

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | CMS Project</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">CMS Project</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"
                    aria-controls="offcanvas" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas"
                    aria-labelledby="offcanvasExampleLabel">

                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" {{
                                    request()->routeIs('home') ? 'aria-current="page"' : '' }} href="{{ route('home')
                                    }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" {{
                                    request()->routeIs('about') ? 'aria-current="page"' : '' }} href="{{ route('about')
                                    }}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" {{
                                    request()->routeIs('contact') ? 'aria-current="page"' : '' }} href="{{
                                    route('contact')
                                    }}">Contact</a>
                            </li>
                            @guest
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}" {{
                                    request()->routeIs('register') ? 'aria-current="page"' : '' }} href="{{
                                    route('register') }}">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" {{
                                    request()->routeIs('login') ? 'aria-current="page"' : '' }} href="{{ route('login')
                                    }}">Login</a>
                            </li>
                            @endguest

                        </ul>
                        @auth
                        <form class="logout-button-navbar" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">
                                <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                <span class="btn-text">{{ __('Logout') }}</span>
                            </button>
                        </form>
                        <form class="logout-button-canvas" action="{{ route('logout') }}" mehtod="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">
                                <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                <span class="btn-text">{{ __('Logout') }}</span>
                            </button>
                        </form>
                        @endauth

                    </div>
                </div>

            </div>
        </nav>
    </header>
    {{ $slot }}
</body>

</html>