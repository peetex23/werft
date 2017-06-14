@extends('layouts.dashboard')
@section('title', 'Biaya Lain')
@section('page_heading','Data Biaya Lain')

@section('section')
<div class="col-sm-12">
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
        {{ Session::get('message') }}
    </div>
@endif
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('/biaya_lain/create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Biaya Lain')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Biaya Lain</th>
						<th>Deskripsi</th>
					</tr>
				</thead>
				<tbody>
					<!-- {{ $i = 1 }} -->
					@if(isset($biaya_lain))
						@foreach($biaya_lain as $dt_biaya_lain)
							<tr>
								<td>{{$i}}</td>
								<td>{{($dt_biaya_lain->biaya_lain_nama) ? $dt_biaya_lain->biaya_lain_nama : null}}</td>
								<td>{{($dt_biaya_lain->biaya_lain_deskripsi) ? $dt_biaya_lain->biaya_lain_deskripsi : null}}</td>
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