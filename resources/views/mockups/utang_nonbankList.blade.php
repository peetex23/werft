@extends('layouts.dashboard')
@section('title', 'Utang Non Bank')
@section('page_heading','Data Utang Non Bank')

@section('section')
<div class="col-sm-12">
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
        {{ Session::get('message') }}
    </div>
@endif
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('/utang_nonbank/create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Pembayaran Piutang')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Jumlah</th>
						<th>Metode Pembayaran</th>
						<th>Tanggal</th>
						<th>Catatan</th>
					</tr>
				</thead>
				<tbody>
					<!-- {{ $i = 1 }} -->
					@if(isset($utang_nonbank))
						@foreach($utang_nonbank as $dt_utang_nonbank)
							<tr>
								<td>{{$i}}</td>
								<td>{{($dt_utang_nonbank->utang_jumlahpokok) ? "Rp.&nbsp;" . currency_format($dt_utang_nonbank->utang_jumlahpokok) : null}}</td>
								<td>{{($dt_utang_nonbank->utang_metode_bayar) ? $dt_utang_nonbank->utang_metode_bayar : null}}</td>
								<td>{{($dt_utang_nonbank->utang_tanggal) ? formatFromDB($dt_utang_nonbank->utang_tanggal) : null}}</td>
								<td>{{($dt_utang_nonbank->utang_catatan) ? stripslashes($dt_utang_nonbank->utang_catatan) : null}}</td>
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