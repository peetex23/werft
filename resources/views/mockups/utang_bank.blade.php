@extends ('layouts.dashboard')
@section('title', 'Utang Bank')
@section('page_heading','Form Utang Bank')

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
        <form role="form" class="form form-horizontal" method="POST" action="{{url('/utang_bank')}}"  autocomplete="off">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Pinjaman Pokok</label>
                    <div class="col-md-9 input-group">
                        <span class="input-group-addon">Rp.&nbsp;</span>
                        <input type="text" name="utang_jumlahpokok" value="{{ old('utang_jumlahpokok') }}" class="form-control" placeholder="" onKeyUp="this.value=formatCurrency(this.value);">
                        {{$errors->first('utang_jumlahpokok', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Bunga Pinjaman</label>
                    <div class="col-md-9 input-group">
                        <input type="text" name="utang_bunga" value="{{ old('utang_bunga') }}" class="form-control" placeholder="" onKeyUp="this.value=formatCurrency(this.value);">
                        <span class="input-group-addon">&nbsp;%</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Jenis Bunga</label>
                    <div class="col-md-9">
                        <select name="utang_jenis_bunga" class="form-control">
                            <option value="Suku Bunga Flat" {{ (old('utang_jenis_bunga') == "Suku Bunga Flat") ? "selected" : ""}}>Suku Bunga Flat</option>
                            <option value="Suku Bunga Efektif" {{ (old('utang_jenis_bunga') == "Suku Bunga Efektif") ? "selected" : ""}}>Suku Bunga Efektif</option>
                            <option value="Suku Bunga Anuitas" {{ (old('utang_jenis_bunga') == "Suku Bunga Anuitas") ? "selected" : ""}}>Suku Bunga Anuitas</option>
                            <option value="Suku Bunga Floating" {{ (old('utang_jenis_bunga') == "Suku Bunga Floating") ? "selected" : ""}}>Suku Bunga Floating</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Jangka Waktu Pinjaman</label>
                    <div class="col-md-9 input-group">
                        <input type="text" name="utang_jangka_waktu" value="{{ old('utang_jangka_waktu') }}" class="form-control" placeholder="" onKeyUp="this.value=formatCurrency(this.value);">
                        <span class="input-group-addon">&nbsp;Bulan</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Bank Pemberi Pinjaman</label>
                    <div class="col-md-9">
                        <select name="id_bank" class="form-control">
                            @if(isset($bank))
                                @foreach($bank as $dt_bank)
                                    <option value="{{ $dt_bank->id }}" {{ (old('id_bank') == $dt_bank->id) ? "selected" : ""}}>{{ $dt_bank->bank_nama }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Metode Pembayaran</label>
                    <div class="col-md-9">
                        <label class="radio-inline">
                            <input type="radio" name="utang_metode_bayar" id="txt_metodeBayar1" value="Tunai"  {{ (old('bank_jenis_rek') == "Tunai") ? "checked" : ""}}>Tunai
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="utang_metode_bayar" id="txt_metodeBayar2" value="Transfer" {{ (old('bank_jenis_rek') == "Transfer") ? "checked" : ""}}>Transfer
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="utang_metode_bayar" id="txt_metodeBayar3" value="Giro" {{ (old('bank_jenis_rek') == "Giro") ? "checked" : ""}}>Giro
                        </label>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="col-md-3 control-label">Tanggal</label>
                    <div class="col-md-9 input-group date">
                        <input type="text" name="utang_tanggal" value="{{ old('utang_tanggal') }}"  class="form-control datepicker" placeholder="">
                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="button-group">
                    <input type="submit" name="btnSimpan" value="Simpan" class="btn btn-success" />&nbsp;
                    <a class="btn btn-danger" href="{{ url('/utang_bank') }}">Batal</a>
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