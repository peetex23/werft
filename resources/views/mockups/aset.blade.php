@extends ('layouts.dashboard')
@section('title', 'Aset')
@section('page_heading','Form Aset')

@section('section')
<div class="col-sm-12">
@if($errors->any())
    <div class="alert alert-danger">
        <i class="fa fa-warning"></i>&nbsp;Periksa kembali isian anda.
    </div>
@endif
<div class="row">
    <div class="col-lg-9">
        <form role="form" class="form form-horizontal" method="POST" action="{{url('/aset')}}"  autocomplete="off">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Aset</label>
                    <div class="col-md-9">
                        <input type="text" value="{{old('aset_nama')}}" name="aset_nama" class="form-control" placeholder="Masukkan Nama Aset">
                        {{$errors->first('aset_nama', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Kelompok Aset</label>
                    <div class="col-md-9">
                        <select name="aset_kelompok" class="form-control">
                            <option value="Mobil, motor, dan kendaraan lain" {{ (old('aset_kelompok') == "Mobil, motor, dan kendaraan lain") ? "selected" : ""}}>Mobil, motor, dan kendaraan lain</option>
                            <option value="Tanah dan bangunan" {{ (old('aset_kelompok') == "Tanah dan bangunan") ? "selected" : ""}}>Tanah dan bangunan</option>
                            <option value="Mesin dan Peralatan untuk mengolah kayu" {{ (old('aset_kelompok') == "Mesin dan Peralatan untuk mengolah kayu") ? "selected" : ""}}>Mesin dan Peralatan untuk mengolah kayu</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Masa Manfaat</label>
                    <div class="col-md-9 input-group">
                        <input type="text" value="{{old('aset_masa_manfaat')}}" name="aset_masa_manfaat" class="form-control" placeholder="" onKeyUp="this.value=formatCurrency(this.value);">
                        <span class="input-group-addon">&nbsp;Tahun</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Harga Aset</label>
                    <div class="col-md-9 input-group">
                        <span class="input-group-addon">Rp.&nbsp;</span>
                        <input type="text" value="{{old('aset_harga')}}" name="aset_harga" class="form-control" onKeyUp="this.value=formatCurrency(this.value);">
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="button-group">
                    <input type="submit" name="btnSimpan" value="Simpan" class="btn btn-success" />
                    <a class="btn btn-danger" href="{{url('/aset')}}">Batal</a>
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