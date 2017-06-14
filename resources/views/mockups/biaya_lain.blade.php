@extends ('layouts.dashboard')
@section('title', 'Biaya Lain')
@section('page_heading','Form Biaya Lain')

@section('section')
<div class="col-sm-12">
@if($errors->any())
    <div class="alert alert-danger">
        <i class="fa fa-warning"></i>&nbsp;Periksa kembali isian anda.
    </div>
@endif
<div class="row">
    <div class="col-lg-9">
        <form role="form" class="form form-horizontal" method="POST" action="{{url('/biaya_lain')}}"  autocomplete="off">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Biaya Lain</label>
                    <div class="col-md-9">
                        <input type="text" value="{{old('biaya_lain_nama')}}" name="biaya_lain_nama" class="form-control" placeholder="Masukkan Nama Biaya Lain">
                        {{$errors->first('biaya_lain_nama', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Deskripsi Biaya</label>
                    <div class="col-md-9">
                        <input type="text" value="{{old('biaya_lain_deskripsi')}}" name="biaya_lain_deskripsi" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="button-group">
                    <input type="submit" name="btnSimpan" class="btn btn-success" value="Simpan">
                    <a class="btn btn-danger" href="{{url('/biaya_lain')}}">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@stop