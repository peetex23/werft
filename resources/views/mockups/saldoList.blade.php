@extends('layouts.dashboard')
@section('title', 'Saldo Awal')
@section('page_heading','Data Saldo Awal')

@section('section')
<div class="col-sm-12">
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
        {{ Session::get('message') }}
    </div>
@endif
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('/saldo/create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Aset Lain')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Periode Saldo Awal</th>
						<th>Nama Akun</th>
						<th>Nilai Saldo Awal</th>
					</tr>
				</thead>
				<tbody>
					<!-- {{ $i = 1 }} -->
					@if(isset($saldo))
						@foreach($saldo as $dt_saldo)
							<tr>
								<td>{{$i}}</td>
								<td>{{($dt_saldo->saldo_awal_periode) ? $dt_saldo->saldo_awal_periode : null}}</td>
								<td>{{($dt_saldo->saldo_awal_akun) ? $dt_saldo->saldo_awal_akun : null}}</td>
								<td>{{($dt_saldo->saldo_awal_nilai) ? "Rp.&nbsp;" . currency_format($dt_saldo->saldo_awal_nilai) : null}}</td>
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