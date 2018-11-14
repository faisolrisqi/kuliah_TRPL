@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama Depan</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nameB') ? ' has-error' : '' }}">
                            <label for="nameB" class="col-md-4 control-label">Nama Belakang</label>

                            <div class="col-md-6">
                                <input id="nameB" type="text" class="form-control" name="nameB" value="{{ old('nameB') }}" required autofocus>

                                @if ($errors->has('nameB'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nameB') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" required autofocus>

                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('kodeP') ? ' has-error' : '' }}">
                            <label for="kodeP" class="col-md-4 control-label">Kode Pos</label>

                            <div class="col-md-6">
                                <input id="kodeP" type="text" class="form-control" name="kodeP" value="{{ old('kodeP') }}" required autofocus>

                                @if ($errors->has('kodeP'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kodeP') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('noHp') ? ' has-error' : '' }}">
                            <label for="noHp" class="col-md-4 control-label">No. Telepon</label>

                            <div class="col-md-6">
                                <input id="noHp" type="text" class="form-control" name="noHp" value="{{ old('noHp') }}" required autofocus>

                                @if ($errors->has('noHp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('noHp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{$errors->has ('level') ? 'has-error':''}}">
                            <label class="col-md-4 control-label">Sebagai</label>

                        <div class="col-md-6">
                            <select name="level" class="form-control">
                                <option value="2">Penyedia Jasa</option>
                                <option value="3">Penyewa Jasa</option>
                            </select>
                        </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} required="Harus Setuju gan"> 
                                        Terima semua ketentuan yg berlaku
                                    </label>
                                </div>
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
@endsection
