@extends('layouts.sidebarAdmin')

@section('content')
<div class="container">
<div id="content">
					<div class="row">
						<div class="col-md-9">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Metode Pembayaran</h3>
									 <hr>
								</div>
								 <div class="panel-body table-responsive table-full">
									<table class="table table-stripped table-bordered">

										<tr>
											<td class="text-center text-nowrap">Nama Bank</td>
											<td class="text-center text-nowrap">No Rekening</td>
										</tr>

										@foreach($tampil as $data)
										<tr>
											<td class="text-center text-nowrap">{{$data->nama}}</td>
											<td class="text-center text-nowrap">{{$data->noRek}}</td>
											<!-- <td class="text-center text-nowrap">{{$data->status}}</td>
											<td class="text-center text-nowrap">
												<a href="{{ url('/formKesenian/'.$data->id) }}"><button type="ubah" class="btn btn-success"><i class="fa fa-fw fa-list-alt"></i><font color="white">Ubah</font></button></a>
											</td> -->
										</tr>
										@endforeach
										</table>
										<tr>
											<td class="text-center text-nowrap">
												<a href="{{ route('tambahMetod') }}"><button type="ubah" class="btn btn-success"><i class="fa fa-fw fa-list-alt"></i><font color="white">Tambah</font></button></a>
											</td>
										</tr>
										

									
									</div>
									
							</div>
						</div>
					</div>
			</div>
	</div>
@endsection