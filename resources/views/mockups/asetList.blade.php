@extends('layouts.dashboard')
@section('title', 'Aset')
@section('page_heading','Data Aset')

@section('section')
<div class="col-sm-12">
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
        {{ Session::get('message') }}
    </div>
@endif
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('/aset/create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Aset')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama Aset</th>
						<th>Kelompok Aset</th>
						<th>Masa Manfaat</th>
						<th>Harga Aset</th>
					</tr>
				</thead>
				<tbody>
					<!-- {{ $i = 1 }} -->
					@if(isset($aset))
						@foreach($aset as $dt_aset)
							<tr>
								<td>{{$i}}</td>
								<td>{{($dt_aset->aset_nama) ? $dt_aset->aset_nama : null}}</td>
								<td>{{($dt_aset->aset_kelompok) ? $dt_aset->aset_kelompok : null}}</td>
								<td>{{($dt_aset->aset_masa_manfaat) ? $dt_aset->aset_masa_manfaat . "&nbsp;Tahun" : null}}</td>
								<td>{{($dt_aset->aset_harga) ? "Rp.&nbsp;" . currency_format($dt_aset->aset_harga) : null}}</td>
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