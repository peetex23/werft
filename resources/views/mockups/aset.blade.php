@extends ('layouts.dashboard')
@section('title', 'Aset')
@section('page_heading','Form Aset')

@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-9">
        <form role="form" class="form form-horizontal">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Aset</label>
                    <div class="col-md-9">
                        <input class="form-control" placeholder="Masukkan Nama Aset">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Kelompok Aset</label>
                    <div class="col-md-9">
                        <select class="form-control">
                            <option>Mobil, motor, dan kendaraan lain</option>
                            <option>Tanah dan bangunan</option>
                            <option>Mesin dan Peralatan untuk mengolah kayu</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Masa Manfaat</label>
                    <div class="col-md-9">
                        <input class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Harga Aset</label>
                    <div class="col-md-9">
                        <input class="form-control">
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="button-group">
                    <a class="btn btn-success" href="{{url('mockups/asetList')}}">Simpan</a>
                    <a class="btn btn-danger" href="{{url('mockups/asetList')}}">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@stop