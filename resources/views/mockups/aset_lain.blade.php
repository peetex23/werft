@extends ('layouts.dashboard')
@section('title', 'Aset Lain')
@section('page_heading','Form Aset Lain')

@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-9">
        <form role="form" class="form form-horizontal">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Aset Lain</label>
                    <div class="col-md-9">
                        <input class="form-control" placeholder="Masukkan Nama Aset Lain">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Nilai Perolehan</label>
                    <div class="col-md-9">
                        <input class="form-control" placeholder="Masukkan Nilai Perolehan">
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="button-group">
                    <a class="btn btn-success" href="{{url('mockups/aset_lainList')}}">Simpan</a>
                    <a class="btn btn-danger" href="{{url('mockups/aset_lainList')}}">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@stop