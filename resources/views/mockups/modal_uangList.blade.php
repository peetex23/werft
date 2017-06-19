@extends('layouts.dashboard')
@section('title', 'Modal Uang')
@section('page_heading','Data Modal Uang')

@section('section')
<div class="col-sm-12">
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
        {{ Session::get('message') }}
    </div>
@endif
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('/modal_uang/create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Modal Uang')
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
					@if(isset($modal_uang))
						@foreach($modal_uang as $dt_modal_uang)
							<tr>
								<td>{{$i}}</td>
								<td>{{($dt_modal_uang->modal_uang_jumlah) ? "Rp.&nbsp;" . currency_format($dt_modal_uang->modal_uang_jumlah) : null}}</td>
								<td>{{($dt_modal_uang->modal_uang_metode_bayar) ? $dt_modal_uang->modal_uang_metode_bayar : null}}</td>
								<td>{{($dt_modal_uang->modal_uang_tanggal) ? formatFromDB($dt_modal_uang->modal_uang_tanggal) : null}}</td>
								<td>{{($dt_modal_uang->modal_uang_catatan) ? stripslashes($dt_modal_uang->modal_uang_catatan) : null}}</td>
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