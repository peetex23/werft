@extends ('layouts.dashboard')
@section('page_heading','Form Pelanggan')

@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-9">
        <form role="form" class="form form-horizontal">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Pelanggan</label>
                    <div class="col-md-8">
                        <input class="form-control" placeholder="Masukkan Nama Pelanggan">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Alamat</label>
                    <div class="col-md-8">
                        <input class="form-control" placeholder="Alamat lengkap">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Telepon</label>
                    <div class="col-md-8">
                        <input class="form-control" placeholder="0315551209">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Kontak Lain</label>
                    <div class="col-md-8">
                        <input class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Email</label>
                    <div class="col-md-8">
                        <input class="form-control" placeholder="abc@info.info">
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="button-group">
                    <a class="btn btn-success" href="{{url('mockups/pelangganList')}}">Simpan</a>
                    <a class="btn btn-danger" href="{{url('mockups/pelangganList')}}">Batal</a>
                </div>
            </div>
        </form>
    </div>
    
</div>
</div>
@stop