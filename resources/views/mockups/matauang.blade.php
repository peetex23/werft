@extends ('layouts.dashboard')
@section('title', 'Mata Uang')
@section('page_heading','Form Mata Uang')

@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-9">
        <form role="form" class="form form-horizontal">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Mata Uang</label>
                    <div class="col-md-9">
                        <input class="form-control" placeholder="Masukkan Nama Mata Uang">
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="button-group">
                    <a class="btn btn-success" href="{{url('mockups/matauangList')}}">Simpan</a>
                    <a class="btn btn-danger" href="{{url('mockups/matauangList')}}">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@stop