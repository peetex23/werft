@extends('layouts.dashboard')
@section('title', 'Pelunasan Biaya')
@section('page_heading','Data Pelunasan Biaya')

@section('section')
<div class="col-sm-12">
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
        {{ Session::get('message') }}
    </div>
@endif
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('/pelunasan_biaya/create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Pelunasan Biaya')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Jumlah</th>
						<th>Jenis</th>
						<th>Metode Pembayaran</th>
						<th>Tanggal</th>
						<th>Catatan</th>
					</tr>
				</thead>
				<tbody>
					<!-- {{ $i = 1 }} -->
					@if(isset($pelunasan_biaya))
						@foreach($pelunasan_biaya as $dt_pelunasan_biaya)
							<tr>
								<td>{{$i}}</td>
								<td>{{($dt_pelunasan_biaya->pelunasan_biaya_nilai) ? "Rp.&nbsp;" . currency_format($dt_pelunasan_biaya->pelunasan_biaya_nilai) : null}}</td>
								<td>{{($dt_pelunasan_biaya->pelunasan_biaya_jenis) ? $dt_pelunasan_biaya->pelunasan_biaya_jenis : null}}</td>
								<td>{{($dt_pelunasan_biaya->pelunasan_biaya_metode_bayar) ? $dt_pelunasan_biaya->pelunasan_biaya_metode_bayar : null}}</td>
								<td>{{($dt_pelunasan_biaya->pelunasan_biaya_tanggal) ? formatFromDB($dt_pelunasan_biaya->pelunasan_biaya_tanggal) : null}}</td>
								<td>{{($dt_pelunasan_biaya->pelunasan_biaya_catatan) ? stripslashes($dt_pelunasan_biaya->pelunasan_biaya_catatan) : null}}</td>
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
