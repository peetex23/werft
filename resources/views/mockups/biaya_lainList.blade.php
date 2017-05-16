@extends('layouts.dashboard')
@section('page_heading','Data Biaya Lain')

@section('section')
<div class="col-sm-12">
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('mockups/biaya_lain')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Biaya Lain')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Biaya Lain</th>
						<th>Deskripsi</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>ATK</td>
						<td>Kebutuhan Alat Tulis Kantor</td>
					</tr>
					<tr>
						<td>Pembersih Lantai</td>
						<td>Kebutuhan pengadaan pembersih lantai</td>
					</tr>
				</tbody>
			</table>
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'stable'))
	</div>
</div>
</div>
@stop