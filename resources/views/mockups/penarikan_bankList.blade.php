@extends('layouts.dashboard')
@section('title', 'Penarikan Bank')
@section('page_heading','Data Penarikan Bank')

@section('section')
<div class="col-sm-12">
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
        {{ Session::get('message') }}
    </div>
@endif
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('/penarikan_bank/create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Penarikan Bank')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Jumlah</th>
						<th>Asal Bank</th>
						<th>Tanggal</th>
						<th>Catatan</th>
						<th>Jenis</th>
					</tr>
				</thead>
				<tbody>
					<!-- {{ $i = 1 }} -->
					@if(isset($penarikan_bank))
						@foreach($penarikan_bank as $dt_penarikan_bank)
							<tr>
								<td>{{$i}}</td>
								<td>{{($dt_penarikan_bank->penarikan_bank_jumlah) ? "Rp.&nbsp;" . currency_format($dt_penarikan_bank->penarikan_bank_jumlah) : null}}</td>
								<td>{{($dt_penarikan_bank->penarikan_bank_asalbank) ? $dt_penarikan_bank->penarikan_bank_asalbank : null}}</td>
								<td>{{($dt_penarikan_bank->penarikan_bank_tanggal) ? formatFromDB($dt_penarikan_bank->penarikan_bank_tanggal) : null}}</td>
								<td>{{($dt_penarikan_bank->penarikan_bank_catatan) ? $dt_penarikan_bank->penarikan_bank_catatan : null}}</td>
								<td>{{($dt_penarikan_bank->penarikan_bank_flag) ? stripslashes($dt_penarikan_bank->penarikan_bank_flag) : null}}</td>
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
