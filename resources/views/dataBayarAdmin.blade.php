@extends('layouts.sidebarAdmin')

@section('content')
<div class="container">
<div id="content">
					<div class="row">
						<div class="col-md-9">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Data Pembayaran</h3>
									 <hr>
								</div>
								 <div class="panel-body table-responsive table-full">
									<table class="table table-stripped table-bordered">

									<tr>
											<td class="text-center text-nowrap">ID Pesanan</td>
											<td class="text-center text-nowrap">Total Bayar</td>
											<td class="text-center text-nowrap">Metode Pembayaran</td>
											<td class="text-center text-nowrap">Status</td>
										</tr>
										<tr>
											<td class="text-center text-nowrap">
												<a href="#"><button type="ubah" class="btn btn-success"><i class="fa fa-fw fa-list-alt"></i><font color="white">Verifikasi</font></button></a>
											</td>
										</tr>
										

									</table>
									</div>
									
							</div>
						</div>
					</div>
			</div>
	</div>
@endsection