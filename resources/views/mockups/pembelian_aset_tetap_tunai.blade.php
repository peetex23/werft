@extends ('layouts.dashboard')
@section('title', 'Pembelian Aset Tetap Tunai')
@section('page_heading','Form Pembelian Aset Tetap Tunai')

@section('style-head')
    @parent
    <link href="{{asset('assets/bootstrap.datetimepicker/bootstrap-datetimepicker.css')}}" rel="stylesheet">
@stop

@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-9">
        <form role="form" class="form form-horizontal">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Aset</label>
                    <div class="col-md-9 input-group">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Nilai Perolehan</label>
                    <div class="col-md-9 input-group">
                        <span class="input-group-addon">Rp.&nbsp;</span>
                        <input class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Masa Manfaat</label>
                    <div class="col-md-9 input-group">
                        <input class="form-control" placeholder="">
                        <span class="input-group-addon">&nbsp;Tahun</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Metode Pembayaran</label>
                    <div class="col-md-9">
                        <label class="radio-inline">
                            <input type="radio" name="txt_metodeBayar" id="txt_metodeBayar1" value="option1" checked>Tunai
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="txt_metodeBayar" id="txt_metodeBayar2" value="option2">Transfer
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="txt_metodeBayar" id="txt_metodeBayar3" value="option3">Giro
                        </label>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="col-md-3 control-label">Tanggal</label>
                    <div class="col-md-9 input-group date">
                        <input type="text" class="form-control datepicker" placeholder="">
                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Catatan</label>
                    <div class="col-md-9">
                        <textarea class="form-control" rows="4"></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="button-group">
                    <a class="btn btn-success" href="#">Simpan</a>
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

    <script type="text/javascript">
        $(function () {
            $('.datepicker').datetimepicker({
                format: 'DD-MM-YYYY',
                minDate: moment(),
            });
        });
    </script>
@stop   