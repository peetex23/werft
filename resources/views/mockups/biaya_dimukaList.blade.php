@extends('layouts.dashboard')
@section('title', 'Biaya Dibayar Dimuka')
@section('page_heading','Data Biaya Dibayar Dimuka')

@section('section')
<div class="col-sm-12">
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
        {{ Session::get('message') }}
    </div>
@endif
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('/biaya_dimuka/create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Biaya Dibayar Dimuka')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Jumlah</th>
						<th>Metode Pembayaran</th>
						<th>Jangka Waktu</th>
						<th>Tanggal</th>
						<th>Catatan</th>
					</tr>
				</thead>
				<tbody>
					<!-- {{ $i = 1 }} -->
					@if(isset($biaya_dimuka))
						@foreach($biaya_dimuka as $dt_biaya_dimuka)
							<tr>
								<td>{{$i}}</td>
								<td>{{($dt_biaya_dimuka->biaya_dimuka_jumlah) ? "Rp.&nbsp;" . currency_format($dt_biaya_dimuka->biaya_dimuka_jumlah) : null}}</td>
								<td>{{($dt_biaya_dimuka->biaya_dimuka_metode_bayar) ? $dt_biaya_dimuka->biaya_dimuka_metode_bayar : null}}</td>
								<td>{{($dt_biaya_dimuka->biaya_dimuka_jangkawaktu) ? $dt_biaya_dimuka->biaya_dimuka_jangkawaktu : null}}</td>
								<td>{{($dt_biaya_dimuka->biaya_dimuka_tanggal) ? formatFromDB($dt_biaya_dimuka->biaya_dimuka_tanggal) : null}}</td>
								<td>{{($dt_biaya_dimuka->biaya_dimuka_catatan) ? stripslashes($dt_biaya_dimuka->biaya_dimuka_catatan) : null}}</td>
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
