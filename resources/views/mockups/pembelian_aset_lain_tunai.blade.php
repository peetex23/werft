@extends ('layouts.dashboard')
@section('title', 'Pembelian Aset Lain Tunai')
@section('page_heading','Form Pembelian Aset Lain Tunai')

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
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
        {{ Session::get('message') }}
    </div>
@endif
<div class="row">
    <div class="col-lg-9">
        <form role="form" class="form form-horizontal" method="POST" action="{{url('/pembelian_aset')}}"  autocomplete="off">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Aset</label>
                    <div class="col-md-9 input-group">
                        <input type="text" name="pembelian_aset_namaaset" value="{{ old('pembelian_aset_namaaset') }}" class="form-control">
                    </div>
                    {{$errors->first('pembelian_aset_namaaset', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Harga Perolehan</label>
                    <div class="col-md-9 input-group">
                        <span class="input-group-addon">Rp.&nbsp;</span>
                        <input type="text" name="pembelian_aset_nilaiperolehan" id="pembelian_aset_nilaiperolehan" value="{{ old('pembelian_aset_nilaiperolehan') }}" class="form-control" placeholder="" onKeyUp="this.value=formatCurrency(this.value);" onblur="updateHarga(this.value, document.getElementById('pembelian_aset_jumlah').value, 'pembelian_aset_totalharga')">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Jumlah</label>
                    <div class="col-md-9">
                        <input type="text" name="pembelian_aset_jumlah" id="pembelian_aset_jumlah" value="{{ old('pembelian_aset_jumlah') }}" class="form-control" placeholder="" onKeyUp="this.value=formatCurrency(this.value);" onblur="updateHarga(this.value, document.getElementById('pembelian_aset_nilaiperolehan').value, 'pembelian_aset_totalharga')">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Total Harga</label>
                    <div class="col-md-9 input-group">
                        <span class="input-group-addon">Rp.&nbsp;</span>
                        <input type="text" name="pembelian_aset_totalharga" id="pembelian_aset_totalharga" value="{{ old('pembelian_aset_totalharga') }}" class="form-control" placeholder="" readonly="readonly">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Metode Pembayaran</label>
                    <div class="col-md-9">
                        <label class="radio-inline">
                            <input type="radio" name="pembelian_aset_metode_bayar" id="pembelian_aset_metode_bayar1" value="Tunai"  {{ (old('bank_jenis_rek') == "Tunai") ? "checked" : ""}}>Tunai
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="pembelian_aset_metode_bayar" id="pembelian_aset_metode_bayar2" value="Tranfer" {{ (old('bank_jenis_rek') == "Transfer") ? "checked" : ""}}>Transfer
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="pembelian_aset_metode_bayar" id="pembelian_aset_metode_bayar3" value="Giro" {{ (old('bank_jenis_rek') == "Giro") ? "checked" : ""}}>Giro
                        </label>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="col-md-3 control-label">Tanggal</label>
                    <div class="col-md-9 input-group date">
                        <input type="text" name="pembelian_aset_tanggal" value="{{ old('pembelian_aset_tanggal') }}" class="form-control datepicker" placeholder="">
                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Catatan</label>
                    <div class="col-md-9">
                        <textarea name="pembelian_aset_catatan" class="form-control" rows="4">{{ old('pembelian_aset_catatan')}}</textarea>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="button-group">
                    <input type="submit" name="btnSimpan" value="Simpan" class="btn btn-success" />&nbsp;
                    <a class="btn btn-danger" href="{{ url('/pembelian_aset/lain/tunai')}}" >Batal</a>
                </div>
            </div>
            <input type="hidden" name="pembelian_aset_istunai" value="y">
            <input type="hidden" name="pembelian_aset_istetap" value="t">
            <input type="hidden" name="pembelian_aset_isdownpayment" value="n">
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