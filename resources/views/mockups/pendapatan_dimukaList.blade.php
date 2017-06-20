@extends('layouts.dashboard')
@section('title', 'Pendapatan Dimuka')
@section('page_heading','Data Pendapatan Dimuka')

@section('section')
<div class="col-sm-12">
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
        {{ Session::get('message') }}
    </div>
@endif
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('/pendapatan_dimuka/create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Pendapatan Dimuka')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Jumlah</th>
						<th>Jangka Waktu</th>
						<th>Tanggal</th>
						<th>Catatan</th>
					</tr>
				</thead>
				<tbody>
					<!-- {{ $i = 1 }} -->
					@if(isset($pendapatan_dimuka))
						@foreach($pendapatan_dimuka as $dt_pendapatan_dimuka)
							<tr>
								<td>{{$i}}</td>
								<td>{{($dt_pendapatan_dimuka->pendapatan_dimuka_jumlah) ? "Rp.&nbsp;" . currency_format($dt_pendapatan_dimuka->pendapatan_dimuka_jumlah) : null}}</td>
								<td>{{($dt_pendapatan_dimuka->pendapatan_dimuka_jangka_waktu) ? $dt_pendapatan_dimuka->pendapatan_dimuka_jangka_waktu . '&nbsp;Bulan' : null}}</td>
								<td>{{($dt_pendapatan_dimuka->pendapatan_dimuka_tanggal) ? formatFromDB($dt_pendapatan_dimuka->pendapatan_dimuka_tanggal) : null}}</td>
								<td>{{($dt_pendapatan_dimuka->pendapatan_dimuka_catatan) ? stripslashes($dt_pendapatan_dimuka->pendapatan_dimuka_catatan) : null}}</td>
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