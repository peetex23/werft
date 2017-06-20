@extends('layouts.dashboard')
@section('title', 'Pelunasan Pembelian Kredit')
@section('page_heading','Data Pelunasan Pembelian Kredit')

@section('section')
<div class="col-sm-12">
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
        {{ Session::get('message') }}
    </div>
@endif
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('/pelunasan_pembelian_kredit/create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Pelunasan Pembelian Kredit')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Jumlah</th>
						<th>Metode Pembayaran</th>
						<th>Pemasok</th>
						<th>Tanggal</th>
						<th>Catatan</th>
					</tr>
				</thead>
				<tbody>
					<!-- {{ $i = 1 }} -->
					@if(isset($pelunasan_pembelian_kredit))
						@foreach($pelunasan_pembelian_kredit as $dt_pelunasan_pembelian_kredit)
							<tr>
								<td>{{$i}}</td>
								<td>{{($dt_pelunasan_pembelian_kredit->pelunasan_pembelian_kredit_jumlah) ? "Rp.&nbsp;" . currency_format($dt_pelunasan_pembelian_kredit->pelunasan_pembelian_kredit_jumlah) : null}}</td>
								<td>{{($dt_pelunasan_pembelian_kredit->pelunasan_pembelian_kredit_metode_bayar) ? $dt_pelunasan_pembelian_kredit->pelunasan_pembelian_kredit_metode_bayar : null}}</td>
								<td>{{($dt_pelunasan_pembelian_kredit->pemasok_nama) ? $dt_pelunasan_pembelian_kredit->pemasok_nama : null}}</td>
								<td>{{($dt_pelunasan_pembelian_kredit->pelunasan_pembelian_kredit_tanggal) ? formatFromDB($dt_pelunasan_pembelian_kredit->pelunasan_pembelian_kredit_tanggal) : null}}</td>
								<td>{{($dt_pelunasan_pembelian_kredit->pelunasan_pembelian_kredit_catatan) ? stripslashes($dt_pelunasan_pembelian_kredit->pelunasan_pembelian_kredit_catatan) : null}}</td>
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