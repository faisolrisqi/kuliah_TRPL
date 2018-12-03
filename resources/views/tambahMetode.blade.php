@extends('layouts.sidebarAdmin')

@section('content')
			<div class="col-sm-5">
		    <div class="card">
		        <div class="card-body">
		            <div class="row" style="background: white;width: 830px;">
		                <div class="col-md-12">
		                    <h4>Metode Sewa</h4>
		                    <hr>
		                </div>
                    <dir><h3>{{ Auth::user()->name }} {{ Auth::user()->nameB }}</h3></dir>
		            </div>
                <div style="width: 800px;">
		            <div class="row" style="background: white">
		                <div class="col-md-12">
		                    <form action="{{url('createRekening')}}" method="POST" style="padding-left: 10px;padding-right: 10px;">
                          {{ csrf_field() }}
                              <div class="form-group row">
                                <label for="namaKesenian" class="col-4 col-form-label">Nama Bank</label> 
                                <div class="col-8">
                                  <input id="namaKesenian" name="nama" placeholder="Format Ex: BNI, BRI, Bank Jatim" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="noTelp" class="col-4 col-form-label">No. Rekening</label> 
                                <div class="col-8">
                                  <input id="noTelp" name="noRek" placeholder="Format Ex: " class="form-control here" type="text">
                                </div>
                              </div>
                              <br><br><br>
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-primary">Tambah</button>
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

@endsection