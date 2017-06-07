@extends ('layouts.dashboard')
@section('title', 'Bank')
@section('page_heading','Form Bank')

@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-9">
        <form role="form" class="form form-horizontal">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Bank</label>
                    <div class="col-md-9">
                        <input class="form-control" placeholder="Masukkan Nama Bank">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Nomor Rekening</label>
                    <div class="col-md-9">
                        <input class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Jenis Rekening</label>
                    <div class="col-md-9">
                        <label class="radio-inline">
                            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Tabungan
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">Giro
                        </label>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="button-group">
                    <a class="btn btn-success" href="{{url('mockups/bankList')}}">Simpan</a>
                    <a class="btn btn-danger" href="{{url('mockups/bankList')}}">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@stop