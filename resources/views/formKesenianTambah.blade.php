@extends('layouts.sidebarPenyedia')

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
                        <form action="{{url('create')}}" method="POST" enctype="multipart/form-data" style="padding-left: 10px;padding-right: 10px;">
                          {{ csrf_field() }}
                              <div class="form-group row">
                                <label for="namaKesenian" class="col-4 col-form-label">Nama Kesenian</label> 
                                <div class="col-8">
                                  <input id="namaKesenian" name="namaKesenian" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="JenisKesenian" class="col-4 col-form-label">Jenis Kesenian</label> 
                                <div class="col-8">
                                  <input id="JenisKesenian" name="JenisKesenian" class="form-control here" type="text">
                                </div>
                              </div>
                              
                     
                              <div class="form-group row">
                                <label for="tarifSewa" class="col-4 col-form-label">Tarif Sewa</label> 
                                <div class="col-8">
                                  <input id="tarifSewa" name="tarifSewa" class="form-control here" required="required" type="number">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="noTelp" class="col-4 col-form-label">No. Telepon</label> 
                                <div class="col-8">
                                  <input id="noTelp" name="noTelp" minlength="11" maxlength="12" pattern="[0-9]{4}[0-9]{4}[0-9]{3,4}" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="alamat" class="col-4 col-form-label">Alamat</label> 
                                <div class="col-8">
                                  <input id="alamat" name="alamat" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="deskripsi" class="col-4 col-form-label">deskripsi</label> 
                                <div class="col-8">
                                  <input id="deskripsi" name="deskripsi" class="form-control here" type="text">
                                </div>
                              </div>

                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Scan Sertifikat</label>
                                 <div class="col-sm-9">
                                 <input class="filestyle" id="foto" name="foto" type="file" required accept="image/*">
                              </div>
                              </div>
                              <br><br><br>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Foto Kesenian</label>
                                 <div class="col-sm-9">
                                 <input class="filestyle" id="fotoSeni" name="fotoSeni" type="file" required accept="image/*">
                              </div>
                              </div>
                      <div class="form-group">
                      <div class="col-sm-6">
                        <input type="hidden"  class="form-control" name="status" id="status" value="Tidak Disetujui" required>
                      </div>
                      </div>
                      <div class="form-group">
                      <div class="col-sm-6">
                        <input type="hidden"  class="form-control" name="statusSewa" id="statusSewa" value="Belum disewa" required>
                      </div>
                      </div>
                      <div class="form-group">
                      <div class="col-sm-6">
                        <input type="hidden"  class="form-control" name="id_user"  value="{{ Auth::user()->id }}" required>
                      </div>
                      </div>
                      <br><br><br>
                              <div class="form-group row">
                                <div class="offset-4 col-8"><br>
                                  <button name="submit" type="submit" class="btn btn-primary">Tambah Kesenian</button>
                                </div>
                              </div>
                            </form>
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

    $("#foto").change(function () {

        readURL(this);
    });

</script>

@endsection