@extends('layouts.dashboard')
@section('title', 'Modal Barang')
@section('page_heading','Data Modal Barang')

@section('section')
<div class="col-sm-12">
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
        {{ Session::get('message') }}
    </div>
@endif
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('/modal_barang/create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Modal Barang')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama Aset</th>
						<th>Nilai Perolehan</th>
						<th>Masa Manfaat</th>
						<th>Tanggal</th>
						<th>Catatan</th>
					</tr>
				</thead>
				<tbody>
					<!-- {{ $i = 1 }} -->
					@if(isset($modal_barang))
						@foreach($modal_barang as $dt_modal_barang)
							<tr>
								<td>{{$i}}</td>
								<td>{{($dt_modal_barang->modal_barang_nama) ? $dt_modal_barang->modal_barang_nama : null}}</td>
								<td>{{($dt_modal_barang->modal_barang_nilai_perolehan) ? "Rp.&nbsp;" . currency_format($dt_modal_barang->modal_barang_nilai_perolehan) : null}}</td>
								<td>{{($dt_modal_barang->modal_barang_masa_manfaat) ? $dt_modal_barang->modal_barang_masa_manfaat . "&nbsp;Tahun" : null}}</td>
								<td>{{($dt_modal_barang->modal_barang_tanggal) ? formatFromDB($dt_modal_barang->modal_barang_tanggal) : null}}</td>
								<td>{{($dt_modal_barang->modal_barang_catatan) ? stripslashes($dt_modal_barang->modal_barang_catatan) : null}}</td>
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
