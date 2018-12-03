@extends('layouts.sidebarPenyewa')

@section('content')
			<div class="col-sm-5">
		    <div class="card">
		        <div class="card-body">
		            <div class="row" style="background: white;width: 830px;">
		                <div class="col-md-12">
		                    <h4>Kesenian Yang akan disewa</h4>
		                    <hr>
		                </div>
                    <dir><h3>{{ Auth::user()->name }} {{ Auth::user()->nameB }}</h3></dir>
		            </div>
                <div style="width: 800px;">
		            <div class="row" style="background: white">
		                <div class="col-md-12">
		                    <form action="{{url('/transaksi/'.$viewkes->id)}}" method="POST" style="padding-left: 10px;padding-right: 10px;">
                          {{ csrf_field() }}
                              <div class="form-group row">
                                <label class="col-sm-4 control-label">Foto Kesenian</label>
                                <div class="col-sm-6">
                                  <span><img id="fotoSeni" src="{{ asset('image/seni/'.$viewkes->fotoSeni ) }}" class="img-responsive" width="300px" height="300px" align=center></span>
                                </div>
                              </div>

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
                                <label for="tarifSewa" class="col-4 col-form-label">Durasi Sewa</label> 
                                <div class="col-8">
                                  <input id="tarifSewa" name="durasiSewa" value="" class="form-control here" type="text" required>
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="tarifSewa" class="col-4 col-form-label">Tanggal Sewa</label> 
                                <div class="col-8">
                                  <input id="tarifSewa" name="tanggalSewa" class="form-control here" type="date" required>
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="alamat" class="col-4 col-form-label">Alamat Penyewa</label> 
                                <div class="col-8">
                                  <input id="alamat" name="alamatPenyewa" value="" class="form-control here" type="text" required>
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="noTelp" class="col-4 col-form-label">No. Telepon</label> 
                                <div class="col-8">
                                  <input id="noTelp" name="noTelp" value="{{ Auth::user()-> noHp }}" class="form-control here" disabled type="text">
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <label for="deskripsi" class="col-4 col-form-label">Catatan</label> 
                                <div class="col-8">
                                  <textarea id="deskripsi" name="catatan" class="form-control here" required></textarea>
                                </div>
                              </div>

                              <div class="radio">
                                <label><input type="radio" name="optradio" checked>COD</label>
                              </div>
                              <div class="radio">
                                <label><input type="radio" name="optradio" checked>Transfer</label>
                              </div>

                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-primary">Sewa</button>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-8">
                                  <input id="alamat" name="status" value="Belum Diterima" class="form-control here" type="hidden">
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-8">
                                  <input id="alamat" name="statusBayar" value="Belum Dibayar" class="form-control here" type="hidden">
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-8">
                                  <input id="alamat" name="user_id" value="{{ $viewkes->user_id }}" class="form-control here" type="hidden">
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-8">
                                  <input id="alamat" name="seni_id" value="{{ $viewkes->id }}" class="form-control here" type="hidden">
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