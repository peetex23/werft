@extends('layouts.dashboard')
@section('title', 'Pemasok')
@section('page_heading','Data Pemasok')

@section('section')
<div class="col-sm-12">
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
        {{ Session::get('message') }}
    </div>
@endif
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('/pemasok/create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Pemasok')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Telepon</th>
						<th>Kontak Lain</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<!-- {{ $i = 1 }} -->
					@if(isset($pemasok))
						@foreach($pemasok as $dt_pemasok)
							<tr>
								<td>{{$i}}</td>
								<td>{{($dt_pemasok->pemasok_nama) ? $dt_pemasok->pemasok_nama : null}}</td>
								<td>{{($dt_pemasok->pemasok_alamat) ? $dt_pemasok->pemasok_alamat : null}}</td>
								<td>{{($dt_pemasok->pemasok_telepon) ? $dt_pemasok->pemasok_telepon : null}}</td>
								<td>{{($dt_pemasok->pemasok_kontaklain) ? $dt_pemasok->pemasok_kontaklain : null}}</td>
								<td>{{($dt_pemasok->pemasok_email) ? $dt_pemasok->pemasok_email : null}}</td>
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