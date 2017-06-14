@extends('layouts.dashboard')
@section('title', 'Bank Pinjaman')
@section('page_heading','Data Bank Pinjaman')

@section('section')
<div class="col-sm-12">
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
        {{ Session::get('message') }}
    </div>
@endif
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('/bank_pinjaman/create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Bank Pinjaman')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama Bank Pinjaman</th>
					</tr>
				</thead>
				<tbody>
					<!-- {{ $i = 1 }} -->
					@if(isset($bank))
						@foreach($bank as $dt_bank)
							<tr>
								<td>{{$i}}</td>
								<td>{{($dt_bank->bank_nama) ? $dt_bank->bank_nama : null}}</td>
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