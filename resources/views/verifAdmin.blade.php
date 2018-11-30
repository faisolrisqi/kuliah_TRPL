@extends('layouts.sidebarAdmin')

@section('content')
			<div class="col-sm-5">
		    <div class="card">
		        <div class="card-body">
		            <div class="row" style="background: white;width: 830px;">
		                <div class="col-md-12">
		                    <h4>Kesenianmu</h4>
		                    <hr>
		                </div>
                    <dir><h3>{{ Auth::user()->name }} {{ Auth::user()->nameB }}</h3></dir>
		            </div>
                <div style="width: 800px;">
		            <div class="row" style="background: white">
		                <div class="col-md-12">
		                    <form action="{{url('/updateVerif/'.$viewkes->id)}}" method="POST" style="padding-left: 10px;padding-right: 10px;">
                          {{ csrf_field() }}
                              <div class="form-group row">
                                <label for="namaKesenian" class="col-4 col-form-label">Nama Kesenian</label> 
                                <div class="col-8">
                                  <input id="namaKesenian" name="namaKesenian" value="{{ $viewkes->namaKesenian }}" class="form-control here" disabled type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="JenisKesenian" class="col-4 col-form-label">Jenis Kesenian</label> 
                                <div class="col-8">
                                  <input id="JenisKesenian" name="JenisKesenian" value="{{ $viewkes->JenisKesenian }}" class="form-control here" disabled type="text">
                                </div>
                              </div>
                              
                     
                              <div class="form-group row">
                                <label for="tarifSewa" class="col-4 col-form-label">Tarif Sewa</label> 
                                <div class="col-8">
                                  <input id="tarifSewa" name="tarifSewa" value="{{ $viewkes->tarifSewa }}" class="form-control here" disabled type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="noTelp" class="col-4 col-form-label">No. Telepon</label> 
                                <div class="col-8">
                                  <input id="noTelp" name="noTelp" value="{{ $viewkes->noTelp }}" class="form-control here" disabled type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="alamat" class="col-4 col-form-label">Alamat</label> 
                                <div class="col-8">
                                  <input id="alamat" name="alamat" value="{{ $viewkes->alamat }}" class="form-control here" disabled type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="deskripsi" class="col-4 col-form-label">deskripsi</label> 
                                <div class="col-8">
                                  <input id="deskripsi" name="deskripsi" value="{{ $viewkes->deskripsi }}" class="form-control here" disabled type="text">
                                </div>
                              </div>
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
                              
                              <div class="form-group">
                              <div class="col-sm-6">
                                <input type="hidden"  class="form-control" name="status" id="status" value="Terverifikasi">
                              </div>
                              </div>
                              <div class="form-group">
                              <div class="col-sm-6">
                                <input type="hidden"  class="form-control" name="statusSewa" id="statusSewa" value="Belum disewa">
                              </div>
                              </div>
                              <br><br><br>
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-primary">Verivikasi Kesenian</button>
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