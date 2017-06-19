@extends ('layouts.dashboard')
@section('title', 'Modal Barang')
@section('page_heading','Form Modal Barang')

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
        <form role="form" class="form form-horizontal" method="POST" action="{{url('/modal_barang')}}"  autocomplete="off">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Aset</label>
                    <div class="col-md-9">
                        <input type="text" name="modal_barang_nama" value="{{ old('modal_barang_nama') }}" class="form-control" placeholder="">
                    </div>
                    {{$errors->first('modal_barang_nama', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Nilai Perolehan</label>
                    <div class="col-md-9 input-group">
                        <span class="input-group-addon">Rp.&nbsp;</span>
                        <input type="text" name="modal_barang_nilai_perolehan" value="{{ old('modal_barang_nilai_perolehan') }}" class="form-control" placeholder="" onKeyUp="this.value=formatCurrency(this.value);">
                    </div>
                    {{$errors->first('modal_barang_nilai_perolehan', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Masa Manfaat</label>
                    <div class="col-md-9 input-group">
                        <input type="text" name="modal_barang_masa_manfaat" value="{{ old('modal_barang_masa_manfaat') }}" class="form-control" placeholder="" onKeyUp="this.value=formatCurrency(this.value);">
                        <span class="input-group-addon">&nbsp;Tahun</span>
                    </div>
                    {{$errors->first('modal_barang_masa_manfaat', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                </div>
                <div class="form-group clearfix">
                    <label class="col-md-3 control-label">Tanggal</label>
                    <div class="col-md-9 input-group date">
                        <input type="text" name="modal_barang_tanggal" value="{{ old('modal_barang_tanggal') }}" class="form-control datepicker" placeholder="">
                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Catatan</label>
                    <div class="col-md-9">
                        <textarea name="modal_barang_catatan" class="form-control" rows="4">{{ old('modal_barang_catatan') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="button-group">
                    <input type="submit" name="btnSimpan" value="Simpan" class="btn btn-success" />&nbsp;
                    <a class="btn btn-danger" href="{{ url('/modal_barang') }}">Batal</a>
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