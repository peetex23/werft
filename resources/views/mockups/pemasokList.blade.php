@extends('layouts.dashboard')
@section('page_heading','Data Pemasok')

@section('section')
<div class="col-sm-12">

<div class="row">
	<div class="col-sm-11">
	<a href="{{url('mockups/pemasok')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Pemasok')
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
						<td>Johny Walker</td>
						<td>Jalan Wonokitri Besar, Surabaya</td>
						<td>0315557901</td>
						<td>081555590011</td>
						<td>johnyw@mail.com</td>
					</tr>
					<tr>
						<td>Handoko</td>
						<td>Jalan A. Yani 108, Surabaya</td>
						<td>0315557901</td>
						<td>081555590011</td>
						<td>handoko@mail.com</td>
					</tr>
					<tr>
						<td>Dean Anderson</td>
						<td>Jalan Ketabang Kali 45, Surabaya</td>
						<td>0315557901</td>
						<td>081555590011</td>
						<td>andersondean@mail.com</td>
					</tr>
				</tbody>
			</table>
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'stable'))
	</div>
</div>
</div>
@stop