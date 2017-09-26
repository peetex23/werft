@extends('layouts.dashboard')
@section('title', 'Penghapusan Piutang')
@section('page_heading','Data Penghapusan Piutang')

@section('section')
<div class="col-sm-12">
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
        {{ Session::get('message') }}
    </div>
@endif
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('/penghapusan_piutang/create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Penghapusan Piutang')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Jumlah</th>
						<th>Pelanggan</th>
						<th>Tanggal</th>
						<th>Catatan</th>
					</tr>
				</thead>
				<tbody>
					<!-- {{ $i = 1 }} -->
					@if(isset($penghapusan_piutang))
						@foreach($penghapusan_piutang as $dt_penghapusan_piutang)
							<tr>
								<td>{{$i}}</td>
								<td>{{($dt_penghapusan_piutang->penghapusan_piutang_jumlah) ? "Rp.&nbsp;" . currency_format($dt_penghapusan_piutang->penghapusan_piutang_jumlah) : null}}</td>
								<td>{{($dt_penghapusan_piutang->pelanggan_nama) ? $dt_penghapusan_piutang->pelanggan_nama : null}}</td>
								<td>{{($dt_penghapusan_piutang->penghapusan_piutang_tanggal) ? formatFromDB($dt_penghapusan_piutang->penghapusan_piutang_tanggal) : null}}</td>
								<td>{{($dt_penghapusan_piutang->penghapusan_piutang_catatan) ? stripslashes($dt_penghapusan_piutang->penghapusan_piutang_catatan) : null}}</td>
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