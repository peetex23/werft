@extends('layouts.dashboard')
@section('title', 'Jasa Tunai')
@section('page_heading','Data Jasa Tunai')

@section('section')
<div class="col-sm-12">
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
        {{ Session::get('message') }}
    </div>
@endif
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('/jasa_tunai/create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Jasa Tunai')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Deskripsi</th>
						<th>Metode Pembayaran</th>
						<th>Biaya</th>
						<th>Pelanggan</th>
						<th>Tanggal</th>
						<th>Catatan</th>
					</tr>
				</thead>
				<tbody>
					<!-- {{ $i = 1 }} -->
					@if(isset($jasa_tunai))
						@foreach($jasa_tunai as $dt_jasa_tunai)
							<tr>
								<td>{{$i}}</td>
								<td>{{($dt_jasa_tunai->jasa_tunai_deskripsi) ? $dt_jasa_tunai->jasa_tunai_deskripsi : null}}</td>
								<td>{{($dt_jasa_tunai->jasa_tunai_biaya) ? "Rp.&nbsp;" . currency_format($dt_jasa_tunai->jasa_tunai_biaya) : null}}</td>
								<td>{{($dt_jasa_tunai->jasa_tunai_metode) ? $dt_jasa_tunai->jasa_tunai_metode : null}}</td>
								<td>{{($dt_jasa_tunai->pelanggan_nama) ? $dt_jasa_tunai->pelanggan_nama : null}}</td>
								<td>{{($dt_jasa_tunai->jasa_tunai_tanggal) ? formatFromDB($dt_jasa_tunai->jasa_tunai_tanggal) : null}}</td>
								<td>{{($dt_jasa_tunai->jasa_tunai_catatan) ? stripslashes($dt_jasa_tunai->jasa_tunai_catatan) : null}}</td>
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