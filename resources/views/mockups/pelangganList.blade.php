@extends('layouts.dashboard')
@section('page_heading','Data Pelanggan')

@section('section')
<div class="col-sm-12">
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('mockups/pelanggan')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Pelanggan')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Telepon</th>
						<th>Kontak Lain</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>John Doe</td>
						<td>Jalan Kertajaya 20, Surabaya</td>
						<td>0315557901</td>
						<td>081555590011</td>
						<td>johndoe@mail.com</td>
					</tr>
					<tr>
						<td>Andy Block</td>
						<td>Jalan Nginden Utara 9b, Surabaya</td>
						<td>0315557901</td>
						<td>081555590011</td>
						<td>andy@mail.com</td>
					</tr>
					<tr>
						<td>Frank</td>
						<td>Jalan Darmokali 54, Surabaya</td>
						<td>0315557901</td>
						<td>081555590011</td>
						<td>frank@mail.com</td>
					</tr>
				</tbody>
			</table>
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'stable'))
	</div>
</div>
</div>
@stop