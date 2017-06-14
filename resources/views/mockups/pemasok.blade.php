@extends ('layouts.dashboard')
@section('title', 'Pemasok')
@section('page_heading','Form Pemasok')

@section('section')
<div class="col-sm-12">
@if($errors->any())
    <div class="alert alert-danger">
        <i class="fa fa-warning"></i>&nbsp;Periksa kembali isian anda.
    </div>
@endif
<div class="row">
    <div class="col-lg-9">
        <form role="form" class="form form-horizontal"  method="POST" action="{{url('/pemasok')}}"  autocomplete="off">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Pemasok</label>
                    <div class="col-md-9">
                        <input type="text" value="{{old('pemasok_nama')}}" name="pemasok_nama" class="form-control" placeholder="Masukkan Nama Pemasok">
                        {{$errors->first('pemasok_nama', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Alamat</label>
                    <div class="col-md-9">
                        <input type="text" value="{{old('pemasok_alamat')}}" name="pemasok_alamat" class="form-control" placeholder="Alamat lengkap">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Telepon</label>
                    <div class="col-md-9">
                        <input type="text" value="{{old('pemasok_telepon')}}" name="pemasok_telepon" class="form-control" placeholder="031555xxxx">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Kontak Lain</label>
                    <div class="col-md-9">
                        <input type="text" value="{{old('pemasok_kontaklain')}}" name="pemasok_kontaklain" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                        <input type="text" value="{{old('pemasok_email')}}" name="pemasok_email" class="form-control" placeholder="abc@info.info">
                        {{$errors->first('pemasok_email', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="button-group">
                    <input type="submit" name="btnsimpan" class="btn btn-success" value="Simpan" />&nbsp;
                    <a class="btn btn-danger" href="{{url('/pemasok')}}">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@stop