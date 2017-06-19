@extends('layouts.dashboard')
@section('title', 'Utang Bank')
@section('page_heading','Data Utang Bank')

@section('section')
<div class="col-sm-12">
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
        {{ Session::get('message') }}
    </div>
@endif
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('/utang_bank/create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Utang Bank')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Pinjaman Pokok</th>
						<th>Bunga Pinjaman</th>
						<th>Jenis Suku Bunga</th>
						<th>Jangka Waktu Pinjaman</th>
						<th>Bank</th>
						<th>Metode Pembayaran</th>
						<th>Tanggal</th>
					</tr>
				</thead>
				<tbody>
					<!-- {{ $i = 1 }} -->
					@if(isset($utang))
						@foreach($utang as $dt_utang_bank)
							<tr>
								<td>{{$i}}</td>
								<td>{{($dt_utang_bank->utang_jumlahpokok) ? "Rp.&nbsp;" . currency_format($dt_utang_bank->utang_jumlahpokok) : null}}</td>
								<td>{{($dt_utang_bank->utang_bunga) ? currency_format($dt_utang_bank->utang_bunga) . "&nbsp;%" : null}}</td>
								<td>{{($dt_utang_bank->utang_jenis_bunga) ? ($dt_utang_bank->utang_jenis_bunga) : null}}</td>
								<td>{{($dt_utang_bank->utang_jangka_waktu) ? currency_format($dt_utang_bank->utang_jangka_waktu) . "&nbsp;Bulan" : null}}</td>
								<td>{{($dt_utang_bank->bank_nama) ? $dt_utang_bank->bank_nama : null}}</td>
								<td>{{($dt_utang_bank->utang_metode_bayar) ? $dt_utang_bank->utang_metode_bayar : null}}</td>
								<td>{{($dt_utang_bank->utang_tanggal) ? formatFromDB($dt_utang_bank->utang_tanggal) : null}}</td>
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
