@extends('layouts.dashboard')
@section('page_heading','Data Bank')

@section('section')
<div class="col-sm-12">
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('mockups/bank')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Bank')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nama Bank</th>
						<th>Nomor Rekening</th>
						<th>Jenis Rekening</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Bank BCA</td>
						<td>360000000</td>
						<th>Giro</th>
					</tr>
					<tr>
						<td>Bank Mandiri</td>
						<td>1400010000000</td>
						<th>Tabungan</th>
					</tr>
				</tbody>
			</table>
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'stable'))
	</div>
</div>
</div>
@stop