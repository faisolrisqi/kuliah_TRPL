@extends('layouts.sidebarPenyedia')

@section('content')
<div class="container">
<div id="content">
					<div class="row">
						<div class="col-md-9">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Daftar Penyedia Jasa</h3>
									 <hr>
								</div>
								 <div class="panel-body table-responsive table-full">
									<table class="table table-stripped table-bordered">

									<tr>
											<td class="text-center text-nowrap">Nama Kesenian</td>
											<td class="text-center text-nowrap">Jenis</td>
											<td class="text-center text-nowrap">Status</td>
											<td class="text-center text-nowrap">Action</td>
										</tr>

										@foreach($tampil as $data)
										<tr>
											<td class="text-center text-nowrap">{{$data->namaKesenian}}</td>
											<td class="text-center text-nowrap">{{$data->JenisKesenian}}</td>
											<td class="text-center text-nowrap">{{$data->status}}</td>
											<td class="text-center text-nowrap">
												<a href="{{ url('/formKesenian/'.$data->id) }}"><button type="ubah" class="btn btn-success"><i class="fa fa-fw fa-list-alt"></i><font color="white">Ubah</font></button></a>
											</td>
										</tr>
										@endforeach

									</table>
									</div>
									<div style="margin-left: 50px; height: 50px; ">
										<a href="{{ route('formKesenianTambah') }}"><button type="ubah" class="btn btn-success"><i class="fa fa-fw fa-list-alt"></i><font color="white">Tambah</font></button></a>
									</div>
							</div>
						</div>
					</div>
			</div>
	</div>
@endsection