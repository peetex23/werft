@extends ('layouts.dashboard')
@section('title', 'Bank Pinjaman')
@section('page_heading','Form Bank Pinjaman')

@section('section')
<div class="col-sm-12">
@if($errors->any())
    <div class="alert alert-danger">
        <i class="fa fa-warning"></i>&nbsp;Periksa kembali isian anda.
    </div>
@endif
<div class="row">
    <div class="col-lg-9">
        <form role="form" class="form form-horizontal" method="POST" action="{{url('/bank_pinjaman')}}" autocomplete="off">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Bank Pinjaman</label>
                    <div class="col-md-9">
                        <input type="text" name="bank_nama" value="{{ old('bank_nama') }}" class="form-control" placeholder="Masukkan Nama Bank Pinjaman">
                        {{$errors->first('bank_nama', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="button-group">
                    <input type="submit" name="btnSimpan" value="Simpan" class="btn btn-success">&nbsp;
                    <a class="btn btn-danger" href="{{url('/bank_pinjaman')}}">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@stop