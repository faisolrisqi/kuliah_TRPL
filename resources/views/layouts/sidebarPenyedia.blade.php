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
                                        <a href="{{ route('profilPenyedia') }}">
                                            Profil
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('profilPenyedia') }}">
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
    <a href="{{ route('profilPenyedia') }}" class="list-group-item active">Profil</a>
    <a href="{{ route('viewKesenian') }}" class="list-group-item">Kesenian Saya</a>
    <a href="{{ route('viewTransaksi') }}" class="list-group-item">Transaksi</a>
    <a href="#" class="list-group-item">Notifikasi</a>
</div>
</div>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="width: 800px;height: 150px;">
    <span class="close">&times;</span>
    <form class="form-horizontal" action="{{url('updatePassword/'.Auth::user()->id)}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Password Baru</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                    Ganti
                    </button>
            </div>
        </div>        

    </form>

  </div>

</div>
        @yield('content')
    </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>