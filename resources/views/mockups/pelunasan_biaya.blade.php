@extends ('layouts.dashboard')
@section('title', 'Pelunasan Biaya')
@section('page_heading','Form Pelunasan Biaya')

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
        <form role="form" class="form form-horizontal" method="POST" action="{{url('/pelunasan_biaya')}}"  autocomplete="off">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Jenis Pelunasan Biaya</label>
                    <div class="col-md-9 input-group">
                        <select name="pelunasan_biaya_jenis" class="form-control">
                            <option value="Tenaga Kerja" {{ (old('pelunasan_biaya_jenis') == "Tenaga Kerja") ? "selected" : "" }}>Tenaga Kerja</option>
                            <option value="Sewa" {{ (old('pelunasan_biaya_jenis') == "Sewa") ? "selected" : "" }}>Sewa</option>
                            <option value="Transportasi" {{ (old('pelunasan_biaya_jenis') == "Transportasi") ? "selected" : "" }}>Transportasi</option>
                            <option value="Bahan Bakar" {{ (old('pelunasan_biaya_jenis') == "Bahan Bakar") ? "selected" : "" }}>Bahan Bakar</option>
                            <option value="Listrik" {{ (old('pelunasan_biaya_jenis') == "Listrik") ? "selected" : "" }}>Listrik</option>
                            <option value="Air" {{ (old('pelunasan_biaya_jenis') == "Air") ? "selected" : "" }}>Air</option>
                            <option value="Telepon" {{ (old('pelunasan_biaya_jenis') == "Telepon") ? "selected" : "" }}>Telepon</option>
                            <option value="Umum dan Administrasi" {{ (old('pelunasan_biaya_jenis') == "Umum dan Administrasi") ? "selected" : "" }}>Umum dan Administrasi</option>
                            <option value="Lain-lain" {{ (old('pelunasan_biaya_jenis') == "Lain-lain") ? "selected" : "" }}>Lain-lain</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Nilai</label>
                    <div class="col-md-9 input-group">
                        <span class="input-group-addon">Rp.&nbsp;</span>
                        <input type="text" name="pelunasan_biaya_nilai" value="{{ old('yyy') }}" class="form-control" placeholder="" onKeyUp="this.value=formatCurrency(this.value);">
                    </div>
                    {{$errors->first('pelunasan_biaya_nilai', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Metode Pembayaran</label>
                    <div class="col-md-9">
                        <label class="radio-inline">
                            <input type="radio" name="pelunasan_biaya_metode_bayar" id="txt_metodeBayar1" value="Tunai" {{ (old('pelunasan_biaya_metode_bayar') == "Tunai") ? "checked" : ""}}>Tunai
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="pelunasan_biaya_metode_bayar" id="txt_metodeBayar2" value="Transfer" {{ (old('pelunasan_biaya_metode_bayar') == "Transfer") ? "checked" : ""}}>Transfer
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="pelunasan_biaya_metode_bayar" id="txt_metodeBayar3" value="Giro" {{ (old('pelunasan_biaya_metode_bayar') == "Giro") ? "checked" : ""}}>Giro
                        </label>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="col-md-3 control-label">Tanggal</label>
                    <div class="col-md-9 input-group date">
                        <input type="text" name="pelunasan_biaya_tanggal" value="{{ old('pelunasan_biaya_tanggal') }}" class="form-control datepicker" placeholder="">
                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Catatan</label>
                    <div class="col-md-9">
                        <textarea name="pelunasan_biaya_catatan" class="form-control" rows="4">{{ old('pelunasan_biaya_catatan') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="button-group">
                    <input type="submit" name="btnSimpan" value="Simpan" class="btn btn-success" />&nbsp;
                    <a class="btn btn-danger" href="{{ url('/pelunasan_biaya') }}">Batal</a>
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