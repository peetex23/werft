@extends('layouts.dashboard')
@section('title', 'Bank')
@section('page_heading','Data Bank')

@section('section')
<div class="col-sm-12">
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
        {{ Session::get('message') }}
    </div>
@endif
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('/bank/create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Bank')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama Bank</th>
						<th>Nomor Rekening</th>
						<th>Jenis Rekening</th>
					</tr>
				</thead>
				<tbody>
					<!-- {{ $i = 1 }} -->
					@if(isset($bank))
						@foreach($bank as $dt_bank)
							<tr>
								<td>{{$i}}</td>
								<td>{{($dt_bank->bank_nama) ? $dt_bank->bank_nama : null}}</td>
								<td>{{($dt_bank->bank_nomor_rek) ? $dt_bank->bank_nomor_rek: null}}</td>
								<td>{{($dt_bank->bank_jenis_rek) ? $dt_bank->bank_jenis_rek : null}}</td>
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