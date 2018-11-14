@extends('layouts.sidebarPenyewa')

@section('content')
			<div class="col-sm-5">
		    <div class="card">
		        <div class="card-body">
		            <div class="row" style="background: white;width: 830px;">
		                <div class="col-md-12">
		                    <h4>Kesenianmu</h4>
		                    <hr>
		                </div>
                    <dir><h3>Ini Data Kesenian</h3></dir>
		            </div>
                <div style="width: 800px;">
		            <div class="row" style="background: white">
		                <div class="col-md-12">
		                    <form style="padding-left: 10px;padding-right: 10px;">
                          {{ csrf_field() }}
                          <table>
                            <tr>
                              <td>
                                <p>Nama Kesenian .</p>
                              </td>
                              <td>
                                <p> = {{ $viewkes->namaKesenian }}</p>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <p>Jenis Kesenian </p>
                              </td>
                              <td>
                                <p> = {{ $viewkes->JenisKesenian }}</p>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <p>Tarif Sewa </p>
                              </td>
                              <td>
                                <p> = {{ $viewkes->tarifSewa }}</p>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <p>No. Telepon </p>
                              </td>
                              <td>
                                <p> = {{ $viewkes->noTelp }}</p>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <p>Alamat </p>
                              </td>
                              <td>
                                <p> = {{ $viewkes->alamat }}</p>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <p>Deskripsi </p>
                              </td>
                              <td>
                                <p> = {{ $viewkes->deskripsi }}</p>
                              </td>
                            </tr>
                          </table>
                              <div class="form-group row">
                                <label class="col-sm-4 control-label">Foto Kesenian</label>
                                <div class="col-sm-6">
                                  <span><img id="fotoSeni" src="{{ asset('image/seni/'.$viewkes->fotoSeni ) }}" class="img-responsive" width="300px" height="300px" align=center></span>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-4 control-label">Foto Sertifikat</label>
                                <div class="col-sm-6">
                                  <span><img id="foto" src="{{ asset('image/seni/'.$viewkes->foto ) }}" class="img-responsive" width="300px" height="300px" align=center></span>
                                </div>
                              </div>
                              <br><br><br>
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <a href="#"><button type="submit" class="btn btn-success"><i class="fa fa-fw fa-list-alt"></i><font color="white">Sewa</font></button></a>
                                </div>
                              </div>
                            </form>
                            </div>
		                </div>
		              </div>
		            </div>
		        </div>
		    </div>
		</div>
<script src="{{ asset('js/app.js') }}"></script>
<script>

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#foto').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inpfoto").change(function () {

        readURL(this);
    });

</script>
@endsection