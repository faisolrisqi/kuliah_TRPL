@extends('layouts.sidebarPenyedia')

@section('content')
<div class="container">
    <div class="row">
        <form action="daftarKesenian" method="POST">
         {{ csrf_field() }}
         <form method="POST" action="daftarKesenian"></form>
         <div class="form-group">
             <label>ini nama Kesenian</label>
             <input type="text" name="namaKesenian" placeholder="Isi Nama Kesenian" class="form-control">
         </div>
        </form>
    </div> 

</div>
@endsection
