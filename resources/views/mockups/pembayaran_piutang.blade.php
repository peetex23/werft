@extends ('layouts.dashboard')
@section('title', 'Pembayaran Piutang')
@section('page_heading','Form Pembayaran Piutang')

@section('section')
<div class="col-sm-12">
@if($errors->any())
    <div class="alert alert-danger">
        <i class="fa fa-warning"></i>&nbsp;Periksa kembali isian anda.
    </div>
@endif
<div class="row">
    <div class="col-lg-9">
        <form role="form" class="form form-horizontal" method="POST" action="{{url('/pembayaran_piutang')}}"  autocomplete="off">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Jumlah Piutang</label>
                    <div class="col-md-9 input-group">
                        <span class="input-group-addon">Rp.&nbsp;</span>
                        <input type="text" name="pembayaran_piutang_jumlah" value="{{ old('pembayaran_piutang_jumlah') }}" class="form-control" placeholder="" onKeyUp="this.value=formatCurrency(this.value);">
                        {{$errors->first('pembayaran_piutang_jumlah', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Metode Pembayaran</label>
                    <div class="col-md-9">
                        <label class="radio-inline">
                            <input type="radio" name="pembayaran_piutang_metode" id="txt_metodeBayar1" value="Tunai"  {{ (old('pembayaran_piutang_metode') == "Tunai") ? "checked" : ""}}>Tunai
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="pembayaran_piutang_metode" id="txt_metodeBayar2" value="Transfer" {{ (old('pembayaran_piutang_metode') == "Transfer") ? "checked" : ""}}>Transfer
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="pembayaran_piutang_metode" id="txt_metodeBayar3" value="Giro" {{ (old('pembayaran_piutang_metode') == "Giro") ? "checked" : ""}}>Giro
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Pelanggan</label>
                    <div class="col-md-9">
                        <select name="id_pelanggan" class="form-control">
                            @if($pelanggan)
                                @foreach($pelanggan as $dt_pelanggan)
                                    <option value="{{ $dt_pelanggan->id }}" {{ (old('id_pelanggan') == $dt_pelanggan->id) ? "selected" : ""}}>{{ $dt_pelanggan->pelanggan_nama }}, {{ $dt_pelanggan->pelanggan_alamat }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="col-md-3 control-label">Tanggal</label>
                    <div class="col-md-9 input-group date">
                        <input type="text" name="pembayaran_piutang_tanggal" value="{{ old('pembayaran_piutang_tanggal') }}" class="form-control datepicker" placeholder="">
                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Catatan</label>
                    <div class="col-md-9">
                        <textarea name="pembayaran_piutang_catatan" class="form-control" rows="4">{{ old('pembayaran_piutang_catatan') }}</textarea>
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