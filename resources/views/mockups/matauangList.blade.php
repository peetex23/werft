@extends('layouts.dashboard')
@section('title', 'Mata Uang')
@section('page_heading','Data Mata Uang')

@section('section')
<div class="col-sm-12">
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('mockups/matauang')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Mata Uang')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Mata Uang</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Rupiah</td>
					</tr>
					<tr>
						<td>Dollar Amerika Serikat</td>
					</tr>
				</tbody>
			</table>
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'stable'))
	</div>
</div>
</div>
@stop