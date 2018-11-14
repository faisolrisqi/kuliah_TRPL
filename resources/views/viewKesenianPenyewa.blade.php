@extends('layouts.sidebarPenyewa')

@section('content')
<div class="container">
<div id="content">
					<div class="row">
						<div class="col-md-9">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Daftar Kesenian</h3>
									 <hr>
								</div>
								 <div class="panel-body table-responsive table-full">
									<!-- <table class="table table-stripped table-bordered"> -->

									<!-- <tr>
											<td class="text-center text-nowrap">Nama Kesenian</td>
											<td class="text-center text-nowrap">Jenis</td>
											<td class="text-center text-nowrap">Tarif Sewa</td>
											<td class="text-center text-nowrap">Action</td>
										</tr> -->

										@foreach($tampil as $data)
										<div class="col-sm-4">
										<span><img id="fotoSeni" src="{{ asset('image/seni/'.$data->fotoSeni ) }}" class="img-responsive" width="300px" height="300px" align=center></span>
										<table>
											<tr>
												<td>
													<p>Nama</p>
												</td>
												<td>
													<p> = {{$data->namaKesenian}}</p>
												</td>
											</tr>
											<tr>
												<td>
													<p>Jenis Kesenian &nbsp</p>
												</td>
												<td>
													<p> = {{$data->JenisKesenian}}</p>
												</td>
											</tr>
											<tr>
												<td>
													<p>Tarif sewa </p>
												</td>
												<td>
													<p>= {{$data->tarifSewa}}</p>
												</td>
											</tr>
											<tr>
												<td class="text-left text-nowrap">
												<a href="{{ url('/sewaSeni/'.$data->id) }}"><button type="ubah" class="btn btn-success"><i class="fa fa-fw fa-list-alt"></i><font color="white">Lihat</font></button></a>
											</td>
											</tr>
										</table>
										</div>
										<!-- <tr>
											<td class="text-center text-nowrap">{{$data->namaKesenian}}</td>
											<td class="text-center text-nowrap">{{$data->JenisKesenian}}</td>
											<td class="text-center text-nowrap">{{$data->tarifSewa}}</td>
											<td class="text-center text-nowrap">
												<a href="{{ url('/sewaSeni/'.$data->id) }}"><button type="ubah" class="btn btn-success"><i class="fa fa-fw fa-list-alt"></i><font color="white">Lihat</font></button></a>
											</td>
										</tr> -->
										@endforeach

									<!-- </table> -->
									</div>
									
							</div>
						</div>
					</div>
			</div>
	</div>
@endsection