<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @section('title')
        @show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Styles -->

    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Courgette|Anton|Baloo+Tamma|Marvel|Katibeh" rel="stylesheet">
    @section('header_styles')
    @show
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header title-nav">
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        Borrowin
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li ><a href="{{ route('login') }}">Login</a></li>
                            <li ><a href="{{ route('register') }}">Register</a></li>
                            <li {!! (Request::is('contacto')? 'class="active"':"") !!}><a href="{{URL::to('contacto')}} ">Contacto</a></li>
                              <li {!! (Request::is('about')? 'class="active"':"") !!}><a href="{{URL::to('about')}} ">FAQs</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->


    @yield('footer_scripts')
    <script src="{{ asset('js/app.js') }}"></script>
    <footer class="">
      <img src="assets/img/logo.svg" alt="" width="40px">
      <p><a href="#">Condiciones de uso</a></p>
      <p class="footer">Borrowin 2017</p>
    </footer>
</body>
</html>
