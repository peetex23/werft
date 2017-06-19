@extends ('layouts.dashboard')
@section('title', 'Utang Non Bank')
@section('page_heading','Form Utang Non Bank')

@section('style-head')
    @parent
    <link href="{{asset('assets/bootstrap.datetimepicker/bootstrap-datetimepicker.css')}}" rel="stylesheet">
@stop

@section('section')
<div class="col-sm-12">
@if($errors->any())
    <div class="alert alert-danger">
        <i class="fa fa-warning"></i>&nbsp;Periksa kembali isian anda.
    </div>
@endif
<div class="row">
    <div class="col-lg-9">
        <form role="form" class="form form-horizontal" method="POST" action="{{url('/utang_nonbank')}}"  autocomplete="off">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Jumlah</label>
                    <div class="col-md-9 input-group">
                        <span class="input-group-addon">Rp.&nbsp;</span>
                        <input type="text" name="utang_jumlahpokok" value="{{ old('utang_jumlahpokok') }}" class="form-control" placeholder="" onKeyUp="this.value=formatCurrency(this.value);">
                    </div>
                        {{$errors->first('utang_jumlahpokok', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Metode Pembayaran</label>
                    <div class="col-md-9">
                        <label class="radio-inline">
                            <input type="radio" name="utang_metode_bayar" id="txt_metodeBayar1" value="Tunai" {{ (old('bank_jenis_rek') == "Tunai") ? "checked" : ""}}>Tunai
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="utang_metode_bayar" id="txt_metodeBayar2" value="Transfer" {{ (old('bank_jenis_rek') == "Transfer") ? "checked" : ""}}>Transfer
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="utang_metode_bayar" id="txt_metodeBayar3" value="Giro" {{ (old('bank_jenis_rek') == "Giro") ? "checked" : ""}}>Giro
                        </label>
                        {{$errors->first('utang_metode_bayar', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="col-md-3 control-label">Tanggal</label>
                    <div class="col-md-9 input-group date">
                        <input type="text" name="utang_tanggal" value="{{ old('utang_tanggal') }}" class="form-control datepicker" placeholder="">
                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Catatan</label>
                    <div class="col-md-9">
                        <textarea name="utang_catatan" class="form-control" rows="4">{{ old('utang_catatan') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="button-group">
                    <input type="submit" name="btnSimpan" value="Simpan" class="btn btn-success" />&nbsp;
                    <a class="btn btn-danger" href="{{ url("/utang_nonbank") }}">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
@section('script-end')
    @parent
    <script src="{{asset('assets/bootstrap.datetimepicker/moment.js')}}"></script>
    <script src="{{asset('assets/bootstrap.datetimepicker/bootstrap-datetimepicker.js')}}"></script>
    <script src="{{asset('assets/scripts/formatCurrency.js')}}"></script>

    <script type="text/javascript">
        $(function () {
            $('.datepicker').datetimepicker({
                format: 'DD-MM-YYYY',
                minDate: moment(),
            });
        });
    </script>
@stop   