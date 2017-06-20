@extends ('layouts.dashboard')
@section('title', 'Pelunasan Utang Bank')
@section('page_heading','Form Pelunasan Utang Bank')

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
        <form role="form" class="form form-horizontal" method="POST" action="{{url('/pelunasan_utang_bank')}}"  autocomplete="off">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Jumlah Angsuran Pokok</label>
                    <div class="col-md-9 input-group">
                        <span class="input-group-addon">Rp.&nbsp;</span>
                        <input type="text" name="pelunasan_utang_bank_jumlah_pokok" value="{{ old('pelunasan_utang_bank_jumlah_pokok') }}" class="form-control" placeholder="" onKeyUp="this.value=formatCurrency(this.value);">
                    </div>
{{$errors->first('pelunasan_utang_bank_jumlah_pokok', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Jumlah Angsuran Bunga</label>
                    <div class="col-md-9 input-group">
                        <span class="input-group-addon">Rp.&nbsp;</span>
                        <input type="text" name="pelunasan_utang_bank_jumlah_bunga" value="{{ old('pelunasan_utang_bank_jumlah_bunga') }}" class="form-control" placeholder="" onKeyUp="this.value=formatCurrency(this.value);">
                    </div>
{{$errors->first('pelunasan_utang_bank_jumlah_bunga', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Bank Pemberi Pinjaman</label>
                    <div class="col-md-9">
                        <select name="id_bank" class="form-control">
                            @if($bank)
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
                            <input type="radio" name="pelunasan_utang_bank_metode_bayar" id="txt_metodeBayar1" value="Tunai"  {{ (old('pelunasan_utang_bank_metode_bayar') == "Tunai") ? "checked" : ""}}>Tunai
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="pelunasan_utang_bank_metode_bayar" id="txt_metodeBayar2" value="Transfer" {{ (old('pelunasan_utang_bank_metode_bayar') == "Transfer") ? "checked" : ""}}>Transfer
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="pelunasan_utang_bank_metode_bayar" id="txt_metodeBayar3" value="Giro" {{ (old('pelunasan_utang_bank_metode_bayar') == "Giro") ? "checked" : ""}}>Giro
                        </label>
                    </div>
{{$errors->first('pelunasan_utang_bank_metode_bayar', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                </div>
                <div class="form-group clearfix">
                    <label class="col-md-3 control-label">Tanggal</label>
                    <div class="col-md-9 input-group date">
                        <input type="text" name="pelunasan_utang_bank_tanggal" value="{{ old('pelunasan_utang_bank_tanggal') }}" class="form-control datepicker" placeholder="">
                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Catatan</label>
                    <div class="col-md-9">
                        <textarea name="pelunasan_utang_bank_catatan" class="form-control" rows="4">{{ old('pelunasan_utang_bank_catatan') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="button-group">
                    <input type="submit" name="btnSimpan" value="Simpan" class="btn btn-success" />&nbsp;
                    <a class="btn btn-danger" href="#">Batal</a>
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