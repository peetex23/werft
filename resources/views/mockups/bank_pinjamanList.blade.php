@extends('layouts.dashboard')
@section('page_heading','Data Bank Pinjaman')

@section('section')
<div class="col-sm-12">
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('mockups/bank_pinjaman')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Bank Pinjaman')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nama Bank Pinjaman</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Bank BRI</td>
					</tr>
					<tr>
						<td>Bank BNI</td>
					</tr>
				</tbody>
			</table>
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'stable'))
	</div>
</div>
</div>
@stop