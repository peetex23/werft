@extends ('layouts.dashboard')
@section('page_heading','Form Biaya Lain')

@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-9">
        <form role="form" class="form form-horizontal">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Biaya Lain</label>
                    <div class="col-md-8">
                        <input class="form-control" placeholder="Masukkan Nama Biaya Lain">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Deskripsi Biaya</label>
                    <div class="col-md-8">
                        <input class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="button-group">
                    <a class="btn btn-success" href="{{url('mockups/biaya_lainList')}}">Simpan</a>
                    <a class="btn btn-danger" href="{{url('mockups/biaya_lainList')}}">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@stop