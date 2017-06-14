@extends('layouts.dashboard')
@section('title', 'Aset Lain')
@section('page_heading','Data Aset Lain')

@section('section')
<div class="col-sm-12">
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
        {{ Session::get('message') }}
    </div>
@endif
<div class="row">
	<div class="col-sm-11">
	<a href="{{url('/aset_lain/create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus fa-fw"></i> Tambah</a>
	@section ('stable_panel_title','Data Aset Lain')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Aset Lain</th>
						<th>Nilai Perolehan</th>
					</tr>
				</thead>
				<tbody>
					<!-- {{ $i = 1 }} -->
					@if(isset($aset_lain))
						@foreach($aset_lain as $dt_aset)
							<tr>
								<td>{{$i}}</td>
								<td>{{($dt_aset->aset_lain_nama) ? $dt_aset->aset_lain_nama : null}}</td>
								<td>{{($dt_aset->aset_lain_nilaiperolehan) ? "Rp.&nbsp;" . currency_format($dt_aset->aset_lain_nilaiperolehan) : null}}</td>
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