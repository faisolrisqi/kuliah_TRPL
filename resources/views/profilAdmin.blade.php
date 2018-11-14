@extends('layouts.sidebarAdmin')

@section('content')
			<div class="col-sm-5">
		    <div class="card">
		        <div class="card-body">
		            <div class="row" style="background: white;width: 830px;">
		                <div class="col-md-12">
		                    <h4>Your Profile</h4>
		                    <hr>
		                </div>
                    <dir><h3>{{ Auth::user()->name }} {{ Auth::user()->nameB }}</h3></dir>
		            </div>
                <div style="width: 800px;">
		            <div class="row" style="background: white">
		                <div class="col-md-12">
		                    <form action="{{url('updateProfil/'.Auth::user()->id)}}" method="POST" style="padding-left: 10px;padding-right: 10px;">
                          {{ csrf_field() }}
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">Nama Depan</label> 
                                <div class="col-8">
                                  <input id="name" name="name" value="{{ Auth::user()->name }}" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="nameB" class="col-4 col-form-label">Nama Belakang</label> 
                                <div class="col-8">
                                  <input id="nameB" name="nameB" value="{{ Auth::user()->nameB }}" class="form-control here" type="text">
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">E-mail</label> 
                                <div class="col-8">
                                  <input id="email" name="email" value="{{ Auth::user()->email }}" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="noHp" class="col-4 col-form-label">No. Telepon</label> 
                                <div class="col-8">
                                  <input id="noHp" name="noHp" value="{{ Auth::user()->noHp }}" placeholder="Format Ex: 081234432234" minlength="11" maxlength="12" pattern="[0-9]{4}[0-9]{4}[0-9]{3,4}" class="form-control here" required="required" type="tel">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="alamat" class="col-4 col-form-label">Alamat</label> 
                                <div class="col-8">
                                  <input id="alamat" name="alamat" value="{{ Auth::user()->alamat }}" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="kodeP" class="col-4 col-form-label">Kode Pos</label> 
                                <div class="col-8">
                                  <input id="kodeP" name="kodeP" value="{{ Auth::user()->kodeP }}" minlength="5" maxlength="5" pattern="[0-9]{5}" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
		            </div>
		        </div>
		    </div>
		</div>

@endsection