<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<link href="http://localhost/laravelapp/public/css/app.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="http://localhost/coba/public">
                        SEPIKAN
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
                                                    <li><a href="http://localhost/coba/public/login">Login</a></li>
                            <li><a href="http://localhost/coba/public/register">Register</a></li>
                                            </ul>
                </div>
            </div>
        </nav>

        <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="http://localhost/coba/public/register">
                        <input type="hidden" name="_token" value="fzksI7xZMWtz2FSRDrM4X3iCqsIRlsZKWrNLEvjP">

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nama Lengkap</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="" required autofocus>

                                                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Alamat Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required>

                                                            </div>
                        </div>

                        <div class="form-group">
                            <label for="noTelepon" class="col-md-4 control-label">No. Telepon</label>

                            <div class="col-md-6">
                                <input id="noTelepon" type="text" class="form-control" name="noTelepon" value="" required autofocus>

                                                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="" required autofocus>

                                                            </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label">Kecamatan</label>

                          <div class="col-md-6">
                               <input type="text" class="form-control" name="kecamatan" value="">

                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-md-4 control-label">Kabupaten</label>

                          <div class="col-md-6">
                               <input type="text" class="form-control" name="kabupaten" value="">

                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-md-4 control-label">Provinsi</label>

                          <div class="col-md-6">
                               <input type="text" class="form-control" name="provinsi" value="">

                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-md-4 control-label">Nomor Rekening</label>

                          <div class="col-md-6">
                               <input type="text" class="form-control" name="noRek" value="">

                          </div>
                      </div>

                      <div class="form-group">
                          <label for="password" class="col-md-4 control-label">Password</label>

                          <div class="col-md-6">
                              <input id="password" type="password" class="form-control" name="password" required>

                                                        </div>
                      </div>

                      <div class="form-group">
                          <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                          <div class="col-md-6">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                          </div>
                      </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label">Sebagai</label>

                        <div class="col-md-6">
                            <select name="level" class="form-control">
                                <option value="1">Agen</option>
                                <option value="2">Pengusaha</option>
                            </select>
                        </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
    <!-- Scripts -->
    <script src="http://localhost/laravelapp/public/js/app.js"></script>
</body>
</html>