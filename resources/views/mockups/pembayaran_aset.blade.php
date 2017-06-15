@extends ('layouts.dashboard')
@section('title', 'Penjualan Aset')
@section('page_heading','Form Penjualan Aset')

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
        <form role="form" class="form form-horizontal" method="POST" action="{{url('/pembayaran_aset')}}"  autocomplete="off">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Aset</label>
                    <div class="col-md-9">
                        <select name='pembayaran_aset_nama' class="form-control">
                            @if($aset)
                                @foreach($aset as $dt_aset)
                                    <option value="{{ $dt_aset->aset_nama }}" {{ (old('id_aset') == $dt_aset->id) ? "selected" : ""}}>{{ $dt_aset->aset_nama }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Harga</label>
                    <div class="col-md-9 input-group">
                        <span class="input-group-addon">Rp.&nbsp;</span>
                        <input type="text" name="pembayaran_aset_harga" id="pembayaran_aset_harga" value="{{ old('pembayaran_aset_harga') }}" class="form-control" placeholder="" onKeyUp="this.value=formatCurrency(this.value);" onblur="updateHarga(this.value, document.getElementById('pembayaran_aset_jumlah').value, 'pembayaran_aset_total')">
                        {{$errors->first('pembayaran_aset_harga', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Jumlah</label>
                    <div class="col-md-9">
                        <input type="text" name="pembayaran_aset_jumlah" id="pembayaran_aset_jumlah" value="0" class="form-control" placeholder="" onKeyUp="this.value=formatCurrency(this.value);" onblur="updateHarga(this.value, document.getElementById('pembayaran_aset_harga').value, 'pembayaran_aset_total')">
                    {{$errors->first('pembayaran_aset_jumlah', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Total Harga</label>
                    <div class="col-md-9 input-group">
                        <span class="input-group-addon">Rp.&nbsp;</span>
                        <input type="text" name="pembayaran_aset_total" id="pembayaran_aset_total"  value="{{ old('pembayaran_aset_total') }}" class="form-control" placeholder="" onKeyUp="this.value=formatCurrency(this.value);">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Pemasok</label>
                    <div class="col-md-9">
                        <select name="id_pemasok" class="form-control">
                            @if($pemasok)
                                @foreach($pemasok as $dt_pemasok)
                                    <option value="{{ $dt_pemasok->id }}" {{ (old('id_pemasok') == $dt_pemasok->id) ? "selected" : ""}}>{{ $dt_pemasok->pemasok_nama }}, {{ $dt_pemasok->pemasok_alamat }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="col-md-3 control-label">Tanggal</label>
                    <div class="col-md-9 input-group date">
                        <input type="text" name="pembayaran_aset_tanggal" value="{{ old('pembayaran_aset_tanggal') }}" class="form-control datepicker" placeholder="">
                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Catatan</label>
                    <div class="col-md-9">
                        <textarea name="pembayaran_aset_catatan" class="form-control" rows="4">{{ stripslashes(old('pembayaran_aset_catatan')) }}</textarea>
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