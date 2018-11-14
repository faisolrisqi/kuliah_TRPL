<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Lapakseni</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        body{
            background: url("{{ asset('image/bg-batik2.jpg') }}") no-repeat;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container" style="height: 65px">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        Lapakseni
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
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name}} {{ Auth::user()->nameB}} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('profilAdmin') }}">
                                            Profil
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('profilAdmin') }}">
                                            Transaksi
                                        </a>
                                    </li>
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
<div class="row" style="margin-left: 20px">
<div>
<div class="col-sm-3">
<div class="list-group" id='cssmenu'>
    <a href="{{ route('profilAdmin') }}" class="list-group-item active">Profil</a>
    <ul>
    <li class='active has-sub'><a href='#'><span>Data User</span></a>
      <ul>
         <li class='has-sub'><a href="{{ route('userPenyediaJasa') }}"><span>Penyedia Jasa</span></a>
         </li>
         <li class='has-sub'><a href="{{ route('userCostumer') }}"><span>Customer</span></a>
         </li>
      </ul>
   </li>
   </ul>
    <a href="{{ route('viewKesenianAdmin') }}" class="list-group-item">Data Kesenian</a>
    <ul>
    <li class='active has-sub'><a href='#'><span>Pembayaran</span></a>
      <ul>
         <li class='has-sub'><a href="{{ route('metod') }}"><span>Metode Pembayaran</span></a>
         </li>
         <li class='has-sub'><a href="{{ route('bayar') }}"><span>Data Pembayaran</span></a>
         </li>
      </ul>
    </li>
    </ul>
    <a href="#" class="list-group-item">Notifikasi</a>
</div>
</div>
</div>
        @yield('content')
    </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>