@extends ('layouts.dashboard')
@section('title', 'Pelanggan')
@section('page_heading','Form Pelanggan')

@section('section')
<div class="col-sm-12">
@if($errors->any())
    <div class="alert alert-danger">
        <i class="fa fa-warning"></i>&nbsp;Periksa kembali isian anda.
    </div>
@endif
<div class="row">
    <div class="col-lg-9">
        <form role="form" class="form form-horizontal" method="POST" action="{{url('/pelanggan')}}" autocomplete="off">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Pelanggan</label>
                    <div class="col-md-9">
                        <input type="text" value="{{old('pelanggan_nama')}}" name="pelanggan_nama" class="form-control" placeholder="Masukkan Nama Pelanggan">
                        {{$errors->first('pelanggan_nama', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Alamat</label>
                    <div class="col-md-9">
                        <input type="text" value="{{old('pelanggan_alamat')}}" name="pelanggan_alamat" class="form-control" placeholder="Alamat lengkap">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Telepon</label>
                    <div class="col-md-9">
                        <input type="text" value="{{old('pelanggan_telepon')}}" name="pelanggan_telepon" class="form-control" placeholder="031555xxxx">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Kontak Lain</label>
                    <div class="col-md-9">
                        <input type="text" value="{{old('pelanggan_kontaklain')}}" name="pelanggan_kontaklain" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                        <input type="text" value="{{old('pelanggan_email')}}" name="pelanggan_email" class="form-control" placeholder="abc@info.info">
                        {{$errors->first('pelanggan_email', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="button-group">
                    <input type="submit" name="btnSimpan" class="btn btn-success" value="Simpan">&nbsp;
                    <a class="btn btn-danger" href="{{url('/pelanggan')}}">Batal</a>
                </div>
            </div>
        </form>
    </div>
    
</div>
</div>
@stop