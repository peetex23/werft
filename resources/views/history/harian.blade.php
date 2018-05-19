@extends('layouts.dashboard')
@section('title', 'Catatan Transaksi Harian')
@section('page_heading','Catatan Transaksi Harian')

@section('style-head')
    @parent
    <link href="{{asset('assets/bootstrap.datetimepicker/bootstrap-datetimepicker.css')}}" rel="stylesheet">
@stop

@section('section')
<div class="col-sm-12">
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
        {{ Session::get('message') }}
    </div>
@endif
<div class="row">
	<div class="col-sm-11">
	<div class="row">
		<div class="form-group clearfix">
	        <label class="col-md-2 control-label">Tanggal</label>
	        <div class="col-md-3 input-group date">
	            <input type="text" name="history_tanggal" class="form-control datepicker" placeholder="">
	            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
	        </div>
	    </div>
	</div>
	@section ('stable_panel_title','Catatan Transaksi Harian')
		@section ('stable_panel_body')
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Deskripsi Transaksi</th>
						<th>Qty</th>
						<th>Harga</th>
						<th>Supplier/Pelanggan</th>
						<th>Catatan</th>
					</tr>
				</thead>
				<tbody>
					<!-- {{ $i = 1 }} -->
					@if(isset($history_harian))
						@foreach($history_harian as $dt_history_harian)
							<tr>
								<td>{{$i}}</td>
								<td>{{($dt_history_harian->history_harian_deskripsi) ? $dt_history_harian->history_harian_deskripsi : null}}</td>
								<td>{{($dt_history_harian->history_harian_jumlah) ? "Rp.&nbsp;" . currency_format($dt_history_harian->history_harian_jumlah) : null}}</td>
								<td>{{($dt_history_harian->history_harian_jumlah) ? $dt_history_harian->history_harian_jumlah : null}}</td>
								<td>{{($dt_history_harian->history_harian_nama) ? $dt_history_harian->history_harian_nama : null}}</td>
								<td>{{($dt_history_harian->history_harian_catatan) ? stripslashes($dt_history_harian->history_harian_catatan) : null}}</td>
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
@endsection
@section('script-end')
    @parent
    <script src="{{asset('assets/bootstrap.datetimepicker/moment.js')}}"></script>
    <script src="{{asset('assets/bootstrap.datetimepicker/bootstrap-datetimepicker.js')}}"></script>

    <script type="text/javascript">
        $(function () {
            $('.datepicker').datetimepicker({
                format: 'DD-MM-YYYY',
                maxDate: moment(),
            });
        });
    </script>
@stop   