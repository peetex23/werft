@extends('layouts.dashboard')
@section('title', 'Pelunasan Utang Bank')
@section('page_heading','Data Pelunasan Utang Bank')

@section('section')
<div class="col-sm-12">
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
        {{ Session::get('message') }}
    </div>
@endif
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('/pelunasan_utang_bank/create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Pelunasan Utang Bank')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Jumlah Pokok</th>
						<th>Jumlah Bunga</th>
						<th>Metode Pembayaran</th>
						<th>Bank</th>
						<th>Tanggal</th>
						<th>Catatan</th>
					</tr>
				</thead>
				<tbody>
					<!-- {{ $i = 1 }} -->
					@if(isset($pelunasan_utang_bank))
						@foreach($pelunasan_utang_bank as $dt_pelunasan_utang_bank)
							<tr>
								<td>{{$i}}</td>
								<td>{{($dt_pelunasan_utang_bank->pelunasan_utang_bank_jumlah_pokok) ? "Rp.&nbsp;" . currency_format($dt_pelunasan_utang_bank->pelunasan_utang_bank_jumlah_pokok) : null}}</td>
								<td>{{($dt_pelunasan_utang_bank->pelunasan_utang_bank_jumlah_bunga) ? "Rp.&nbsp;" . currency_format($dt_pelunasan_utang_bank->pelunasan_utang_bank_jumlah_bunga) : null}}</td>
								<td>{{($dt_pelunasan_utang_bank->pelunasan_utang_bank_metode_bayar) ? $dt_pelunasan_utang_bank->pelunasan_utang_bank_metode_bayar : null}}</td>
								<td>{{($dt_pelunasan_utang_bank->bank_nama) ? $dt_pelunasan_utang_bank->bank_nama : null}}</td>
								<td>{{($dt_pelunasan_utang_bank->pelunasan_utang_bank_tanggal) ? formatFromDB($dt_pelunasan_utang_bank->pelunasan_utang_bank_tanggal) : null}}</td>
								<td>{{($dt_pelunasan_utang_bank->pelunasan_utang_bank_catatan) ? stripslashes($dt_pelunasan_utang_bank->pelunasan_utang_bank_catatan) : null}}</td>
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
