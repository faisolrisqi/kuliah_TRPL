@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>

<div class="row">
<div class="col-sm-3">
<div class="list-group">
  <a href="{{ route('profil') }}" class="list-group-item active">Profil</a>
  <a href="#" class="list-group-item">Sub Menu 2</a>
  <a href="#" class="list-group-item">Sub Menu 3</a>
  <a href="#" class="list-group-item">Sub Menu 4</a>
  <a href="#" class="list-group-item">Sub Menu 5</a>
  <a href="#" class="list-group-item">Sub Menu 6</a>
  <a href="#" class="list-group-item">Sub Menu 7</a>
  <a href="#" class="list-group-item">Sub Menu 8</a>
  <a href="#" class="list-group-item">Sub Menu 9</a>
  <a href="#" class="list-group-item">Sub Menu 10</a>
</div> 
</div>
</div>

</div>
@endsection
