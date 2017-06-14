@extends ('layouts.dashboard')
@section('title', 'Bank')
@section('page_heading','Form Bank')

@section('section')
<div class="col-sm-12">
@if($errors->any())
    <div class="alert alert-danger">
        <i class="fa fa-warning"></i>&nbsp;Periksa kembali isian anda.
    </div>
@endif
<div class="row">
    <div class="col-lg-9">
        <form role="form" class="form form-horizontal" method="POST" action="{{url('/bank')}}"  autocomplete="off">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Bank</label>
                    <div class="col-md-9">
                        <input type="text" value="{{old('bank_nama')}}" name="bank_nama" class="form-control" placeholder="Masukkan Nama Bank">
                        {{$errors->first('bank_nama', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Nomor Rekening</label>
                    <div class="col-md-9">
                        <input type="text" value="{{old('bank_nomor_rek')}}" name="bank_nomor_rek" class="form-control" placeholder="">
                        {{$errors->first('bank_nomor_rek', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Jenis Rekening</label>
                    <div class="col-md-9">
                        <label class="radio-inline">
                            <input type="radio" name="bank_jenis_rek" id="optionsRadiosInline1" value="Tabungan" {{ (old('bank_jenis_rek') == "Tabungan") ? "checked" : ""}}>Tabungan
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="bank_jenis_rek" id="optionsRadiosInline2" value="Giro" {{ (old('bank_jenis_rek') == "Giro") ? "checked" : ""}}>Giro
                        </label>
                        {{$errors->first('bank_jenis_rek', '<br><span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="button-group">
                    <input type="submit" name="btnSimpan" class="btn btn-success" value="Simpan">&nbsp;
                    <a class="btn btn-danger" href="{{url('/bank')}}">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@stop