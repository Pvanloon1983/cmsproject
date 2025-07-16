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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="d-flex">
        {{-- Sidebar for desktop, hidden on mobile --}}
        <aside id="sidebar" class="d-none d-lg-flex flex-column sidebar-toggle">
            <div class="sidebar-logo">
                <a href="#">Logo</a>
            </div>
            {{-- Navigation sidebar --}}
            <ul class="sidebar-nav p-0">
                <li class="sidebar-header">Tools</li>
                <li class="sidebar-item">
                    <a href="{{ route('profile.edit')}}" class="sidebar-link">
                        <i class="fa-solid fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('blogposts') }}" class="sidebar-link">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <span>Blog posts</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-list"></i>
                        <span>Categories</span>
                    </a>
                </li>
                <li class="sidebar-header">Pages</li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="true" aria-controls="auth">
                        <i class="fa-solid fa-shield"></i>
                        <span>Auth</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Login</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Register</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <span>Notifications</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-gears"></i>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>

        {{-- Offcanvas sidebar for mobile --}}
        <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="mobileSidebar"
            aria-labelledby="mobileSidebarLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn btn-link text-white p-0 ms-auto" data-bs-dismiss="offcanvas"
                    aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="offcanvas-body p-0">
                <ul class="sidebar-nav p-0">
                    <li class="sidebar-header">Tools</li>
                    <li class="sidebar-item">
                        <a href="{{ route('profile.edit') }}" class="sidebar-link">
                            <i class="fa-solid fa-user"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ route('blogposts') }}" class="sidebar-link">
                            <i class="fa-solid fa-pen-to-square"></i>
                            <span>Blog posts</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-list"></i>
                            <span>Categories</span>
                        </a>
                    </li>
                    <li class="sidebar-header">Pages</li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                            data-bs-target="#authMobile" aria-expanded="true" aria-controls="authMobile">
                            <i class="fa-solid fa-shield"></i>
                            <span>Auth</span>
                        </a>
                        <ul id="authMobile" class="sidebar-dropdown list-unstyled collapse"
                            data-bs-parent="#mobileSidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Login</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Register</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-pen-to-square"></i>
                            <span>Notifications</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-gears"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
                <div class="sidebar-footer">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="main flex-grow-1">
            <header>
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container">
                        {{-- Sidebar toggler for mobile --}}
                        <button class="toggler-btn d-lg-none me-2" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#mobileSidebar" aria-controls="mobileSidebar">
                            <i class="fa-solid fa-align-left"></i>
                        </button>
                        <a class="navbar-brand" href="#">CMS Project</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas" aria-controls="offcanvas" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas"
                            aria-labelledby="offcanvasExampleLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" {{
                                            request()->routeIs('home') ? 'aria-current="page"' : '' }} href="{{
                                            route('home')
                                            }}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}" {{
                                            request()->routeIs('blog') ? 'aria-current="page"' : '' }} href="{{
                                            route('blog')
                                            }}">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" {{
                                            request()->routeIs('about') ? 'aria-current="page"' : '' }} href="{{
                                            route('about')
                                            }}">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" {{
                                            request()->routeIs('contact') ? 'aria-current="page"' : '' }} href="{{
                                            route('contact')
                                            }}">Contact</a>
                                    </li>
                                    @auth
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" {{
                                            request()->routeIs('dashboard') ? 'aria-current="page"' : '' }} href="{{
                                            route('dashboard')
                                            }}">Dashboard</a>
                                    </li>
                                    @endauth
                                    @guest
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}" {{
                                            request()->routeIs('register') ? 'aria-current="page"' : '' }} href="{{
                                            route('register') }}">Register</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" {{
                                            request()->routeIs('login') ? 'aria-current="page"' : '' }} href="{{
                                            route('login')
                                            }}">Login</a>
                                    </li>
                                    @endguest
                                </ul>
                                @auth
                                <form class="logout-button-navbar" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">
                                        <span class="spinner-border spinner-border-sm d-none" role="status"
                                            aria-hidden="true"></span>
                                        <span class="btn-text">{{ __('Logout') }}</span>
                                    </button>
                                </form>
                                <form class="logout-button-canvas" action="{{ route('logout') }}" mehtod="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">
                                        <span class="spinner-border spinner-border-sm d-none" role="status"
                                            aria-hidden="true"></span>
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
        </div>
    </div>
</body>

</html>