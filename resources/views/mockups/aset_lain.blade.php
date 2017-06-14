@extends ('layouts.dashboard')
@section('title', 'Aset Lain')
@section('page_heading','Form Aset Lain')

@section('section')
<div class="col-sm-12">
@if($errors->any())
    <div class="alert alert-danger">
        <i class="fa fa-warning"></i>&nbsp;Periksa kembali isian anda.
    </div>
@endif
<div class="row">
    <div class="col-lg-9">
        <form role="form" class="form form-horizontal" method="POST" action="{{url('/aset_lain')}}"  autocomplete="off">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Aset Lain</label>
                    <div class="col-md-9">
                        <input type="text" name="aset_lain_nama" value="{{ old('aset_lain_nama') }}" class="form-control" placeholder="Masukkan Nama Aset Lain">
                        {{$errors->first('aset_lain_nama', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Nilai Perolehan</label>
                    <div class="col-md-9 input-group">
                        <span class="input-group-addon">Rp.&nbsp;</span>
                        <input type="text" name="aset_lain_nilaiperolehan" value="{{ old('aset_lain_nilaiperolehan') }}" class="form-control" placeholder="Masukkan Nilai Perolehan" onKeyUp="this.value=formatCurrency(this.value);">
                    </div>
                    {{$errors->first('aset_lain_nilaiperolehan', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                </div>
            </div>
            <div class="panel-footer">
                <div class="button-group">
                    <input type="submit" name="btnSimpan" value="Simpan" class="btn btn-success">&nbsp;
                    <a class="btn btn-danger" href="{{url('/aset_lain')}}">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
@section('script-end')
    @parent
    <script src="{{asset('assets/scripts/formatCurrency.js')}}"></script>
@stop