@extends('layouts.sidebarAdmin')

@section('content')
<div class="container">
<div id="content">
					<div class="row">
						<div class="col-md-9">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Daftar Penyewaan</h3>
									 <hr>
								</div>
								 <div class="panel-body table-responsive table-full">
									<table class="table table-stripped table-bordered">

										<tr>
											<td class="text-center text-nowrap">ID Transaksi</td>
											<td class="text-center text-nowrap">Nama Kesenian</td>
											<td class="text-center text-nowrap">Nama Penyeawa</td>
											<td class="text-center text-nowrap">Nama Penyedia</td>
											<td class="text-center text-nowrap">ID Kesenian</td>
											<td class="text-center text-nowrap">Status</td>
											<td class="text-center text-nowrap">Action</td>
										</tr>

										@foreach($muncul as $data)
										<tr>
											<td class="text-center text-nowrap">{{$data->id_Sewa}}</td>
											<td class="text-center text-nowrap">{{$data->datakesenian->namaKesenian}}</td>
											<td class="text-center text-nowrap">{{$data->penyedia}}</td>
											<td class="text-center text-nowrap">{{$data->datakesenian->id}}</td>
											<td class="text-center text-nowrap">{{$data->status}}</td>
											<td class="text-center text-nowrap">
												<a href="{{ url('/terimaTransaksi/'.$data->id_Sewa) }}"><button type="submit" class="btn btn-success"> <font color="white">Setujui</font></button></a>
												<a href=""><button type="submit" class="btn btn-danger"> <font color="white">Tolak</font></button></a>
											</td>
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