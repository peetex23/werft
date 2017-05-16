@extends('layouts.dashboard')
@section('page_heading','Data Aset Lain')

@section('section')
<div class="col-sm-12">
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('mockups/aset_lain')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Aset Lain')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Aset Lain</th>
						<th>Nilai Perolehan</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Meja</td>
						<td>Rp. 1.000.000</td>
					</tr>
					<tr>
						<td>Kursi</td>
						<td>Rp. 500.000</td>
					</tr>
				</tbody>
			</table>
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'stable'))
	</div>
</div>
</div>
@stop