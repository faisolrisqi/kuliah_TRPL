@extends('layouts.sidebarAdmin')

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
											 <td class="text-center text-nowrap">Nama Depan</td>
											<td class="text-center text-nowrap">Nama Belakang</td>
											<td class="text-center text-nowrap">Email</td>
											<td class="text-center text-nowrap">Alamat</td>
											<td class="text-center text-nowrap">Kode Pos</td>
											<td class="text-center text-nowrap">No. Telepon</td>
										</tr>

										@foreach($tampil as $data)
										<tr>
											<td class="text-center text-nowrap">{{$data->name}}</td>
											<td class="text-center text-nowrap">{{$data->nameB}}</td>
											<td class="text-center text-nowrap">{{$data->email}}</td>
											<td class="text-center text-nowrap">{{$data->alamat}}</td>
											<td class="text-center text-nowrap">{{$data->kodeP}}</td>
											<td class="text-center text-nowrap">{{$data->noHp}}</td>

										</tr>
										@endforeach

									</table>
									</div>

							</div>
						</div>
					</div>
			</div>
	</div>
@endsection