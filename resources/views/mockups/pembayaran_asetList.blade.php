@extends('layouts.dashboard')
@section('title', 'Penjualan Aset')
@section('page_heading','Data Penjualan Aset')

@section('section')
<div class="col-sm-12">
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
        {{ Session::get('message') }}
    </div>
@endif
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('/pembayaran_aset/create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Pembayaran Piutang')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Aset</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Total</th>
						<th>Pemasok</th>
						<th>Tanggal</th>
						<th>Catatan</th>
					</tr>
				</thead>
				<tbody>
					<!-- {{ $i = 1 }} -->
					@if(isset($pembayaran_aset))
						@foreach($pembayaran_aset as $dt_pembayaran_aset)
							<tr>
								<td>{{$i}}</td>
								<td>{{($dt_pembayaran_aset->pembayaran_aset_nama) ? $dt_pembayaran_aset->pembayaran_aset_nama : null}}</td>
								<td>{{($dt_pembayaran_aset->pembayaran_aset_harga) ? "Rp.&nbsp;" . currency_format($dt_pembayaran_aset->pembayaran_aset_harga) : null}}</td>
								<td>{{($dt_pembayaran_aset->pembayaran_aset_jumlah) ? "Rp.&nbsp;" . currency_format($dt_pembayaran_aset->pembayaran_aset_jumlah) : null}}</td>
								<td>{{($dt_pembayaran_aset->pembayaran_aset_total) ? "Rp.&nbsp;" . currency_format($dt_pembayaran_aset->pembayaran_aset_total) : null}}</td>
								<td>{{($dt_pembayaran_aset->pemasok_nama) ? $dt_pembayaran_aset->pemasok_nama : null}}</td>
								<td>{{($dt_pembayaran_aset->pembayaran_aset_tanggal) ? formatFromDB($dt_pembayaran_aset->pembayaran_aset_tanggal) : null}}</td>
								<td>{{($dt_pembayaran_aset->pembayaran_aset_catatan) ? stripslashes($dt_pembayaran_aset->pembayaran_aset_catatan) : null}}</td>
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