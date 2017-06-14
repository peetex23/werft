@extends('layouts.dashboard')
@section('title', 'Pelanggan')
@section('page_heading','Data Pelanggan')

@section('section')
<div class="col-sm-12">
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
        {{ Session::get('message') }}
    </div>
@endif
<div class="row">
	<div class="col-sm-11">
	<input type="hidden" name="_token" value="{{ Session::token() }}">

	<a href="{{url('/pelanggan/create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Pelanggan')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Telepon</th>
						<th>Kontak Lain</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<!-- {{ $i = 1 }} -->
					@if(isset($pelanggan))
						@foreach($pelanggan as $dt_pelanggan)
							<tr>
								<td>{{$i}}</td>
								<td>{{($dt_pelanggan->pelanggan_nama) ? $dt_pelanggan->pelanggan_nama : null}}</td>
								<td>{{($dt_pelanggan->pelanggan_alamat) ? $dt_pelanggan->pelanggan_alamat : null}}</td>
								<td>{{($dt_pelanggan->pelanggan_telepon) ? $dt_pelanggan->pelanggan_telepon : null}}</td>
								<td>{{($dt_pelanggan->pelanggan_kontaklain) ? $dt_pelanggan->pelanggan_kontaklain : null}}</td>
								<td>{{($dt_pelanggan->pelanggan_email) ? $dt_pelanggan->pelanggan_email : null}}</td>
							</tr>
							<!-- {{ $i++ }} -->
						@endforeach
					@endif
				</tbody>
			</table>
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'stable'))
	</div>
</div>
</div>
@stop