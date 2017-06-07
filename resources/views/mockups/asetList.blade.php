@extends('layouts.dashboard')
@section('title', 'Aset')
@section('page_heading','Data Aset')

@section('section')
<div class="col-sm-12">
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('mockups/aset')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Aset')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nama Aset</th>
						<th>Kelompok Aset</th>
						<th>Masa Manfaat</th>
						<th>Harga Aset</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Kantor</td>
						<td>Tanah dan Bangunan</td>
						<td>Tak terbatas</td>
						<td>Rp. 3.000.000.000</td>
					</tr>
					<tr>
						<td>Toyota Avanza, W 3545 KV</td>
						<td>Mobil, Motor, dan kendaraan lain</td>
						<td>6 Tahun</td>
						<td>Rp. 275.000.000</td>
					</tr>
					<tr>
						<td>Gergaji Mesin</td>
						<td>Mesin dan peralatan untuk mengolah kayu</td>
						<td>10 Tahun</td>
						<td>Rp. 350.000.000</td>
					</tr>
				</tbody>
			</table>
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'stable'))
	</div>
</div>
</div>
@stop