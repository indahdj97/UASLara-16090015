@extends('layouts.master')

@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-profile">
				<div class="clearfix">
							<!-- LEFT COLUMN -->
					<div class="profile-left">
								<!-- PROFILE HEADER -->
						<div class="profile-header">
							<div class="overlay"></div>
							<div class="profile-main">
								<img src="{{asset('admin/assets/img/imgs.png')}}" class="img-circle" alt="Avatar">
								<h3 class="name">{{auth()->user()->name}}</h3>
								<span class="online-status status-available">Available</span>
							</div>
						</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
						<div class="profile-detail">
							<div class="profile-info">
								<h4 class="heading">Basic Info</h4>
								<ul class="list-unstyled list-justify">
									<li>Telpon <span>{{auth()->user()->telpon}}</span></li>
									<li>Email <span>{{auth()->user()->email}}</span></li>
									<li>Alamat <span>{{auth()->user()->alamat}}</span></li>
								</ul>
						</div>
					</div>
								<!-- END PROFILE DETAIL -->
				</div>
							<!-- END LEFT COLUMN -->
				<div class="profile-right">
					<div class="row">
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Agenda</h3> 
								</div>
								<div class="panel-body">
									@if(count($data_agenda) > 0)
									<table class="table table-hover">
										<thead>
											<tr>
												<th>No</th>
												<th>Judul</th>
												<th>Tanggal</th>
												<th>Jam</th>
												<th>Peserta</th>
												<th>Lokasi</th>
											</tr>
										</thead>
										<tbody>
											<?php $i = 0 ?>
											@foreach($data_agenda as $agenda)
											<tr>
												<td>{{ ++$i }}</td>
												<td>{{$agenda->judul}}</td>
												<td>{{$agenda->tanggal}}</td>
												<td>
												{{$agenda->jam_mulai}} s/d
												{{$agenda->jam_selesai}}
												</td>
												<td>{{$agenda->peserta}}</td>
												<td>{{$agenda->lokasi}}</td>
											</tr>
										@endforeach
										</tbody>
									</table>
									@else
										<p>Tidak ada data agenda.</p>
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

			<!-- END MAIN CONTENT -->
@stop