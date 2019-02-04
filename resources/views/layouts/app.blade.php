<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DevMarketer</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">    
</head>
<body>
    <div id="app">
        <nav class="navbar has-shadow">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="{{ route('home') }}">
                        <img src=" {{ asset('images/devmarketer-logo.png') }} " alt="DevMarketer Logo">
                    </a>
                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <div class="navbar-menu">
                    <div class="navbar-start">   
                        <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
                        <a href="#" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
                        <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>                                         
                    </div>
                
                    <div class="navbar-end">
                        @if (Auth::guest())
                            <a href=" {{route('login')}} " class="navbar-item is-tab">Login</a>
                            <a href=" {{route('register')}} " class="navbar-item is-tab">Join the Community</a>
                        @else
                            <b-dropdown hoverable v-model="navigation" position="is-bottom-left">
                                <a class="navbar-item" slot="trigger">
                                    <span>Hello Luiz</span>
                                    <b-icon icon="menu-down"></b-icon>
                                </a> 
                                <b-dropdown-item value="home">
                                    <b-icon icon="home"></b-icon>
                                    Home
                                </b-dropdown-item>
                                <b-dropdown-item value="products">
                                    <b-icon icon="cart"></b-icon>
                                    Products
                                </b-dropdown-item>
                                <b-dropdown-item value="blog" disabled>
                                    <b-icon icon="book-open"></b-icon>
                                    Blog
                                </b-dropdown-item>
                                <hr class="dropdown-divider">
                                <b-dropdown-item value="settings">
                                    <b-icon icon="settings"></b-icon>
                                    Settings
                                </b-dropdown-item>
                                <b-dropdown-item value="logout">
                                    <b-icon icon="logout"></b-icon>
                                    Logout
                                </b-dropdown-item>
                            </b-dropdown>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
