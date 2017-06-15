@extends ('layouts.dashboard')
@section('title', 'Saldo Awal')
@section('page_heading','Form Saldo Awal')

@section('section')
<div class="col-sm-12">
@if($errors->any())
    <div class="alert alert-danger">
        <i class="fa fa-warning"></i>&nbsp;Periksa kembali isian anda.
    </div>
@endif
<div class="row">
    <div class="col-lg-9">
        <form role="form" class="form form-horizontal" method="POST" action="{{url('/saldo')}}"  autocomplete="off">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Periode Saldo Awal</label>
                    <div class="col-md-9">
                        <input type="text" name="saldo_awal_periode" value="{{ old('saldo_awal_periode') }}" class="form-control" placeholder="Masukkan Periode Saldo Awal">
                        {{$errors->first('saldo_awal_periode', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Akun</label>
                    <div class="col-md-9">
                        <select name="saldo_awal_akun" class="form-control">
                            <option value="Kas">Kas</option>
                            <option value="Giro">Giro</option>
                            <option value="Tabungan">Tabungan</option>
                            <option value="Piutang Usaha">Piutang Usaha</option>
                            <option value="Beban Dibayar di Muka">Beban Dibayar di Muka</option>
                            <option value="Aset Tetap">Aset Tetap</option>
                            <option value="Aset Lain">Aset Lain</option>
                            <option value="Utang Usaha">Utang Usaha</option>
                            <option value="Utang Bank">Utang Bank</option>
                            <option value="Kewajiban Lain">Kewajiban Lain</option>
                            <option value="Utang Beban Tenaga Kerja">Utang Beban Tenaga Kerja</option>
                            <option value="Utang beban sewa, transportasi, bahan bakan, listrik ,air, telepon">Utang beban sewa, transportasi, bahan bakan, listrik ,air, telepon</option>
                            <option value="Utang Beban Umum dan Administrasi">Utang Beban Umum dan Administrasi</option>
                            <option value="Utang Beban Lain">Utang Beban Lain</option>
                            <option value="Pendapatan Diterima di muka">Pendapatan Diterima di muka</option>
                            <option value="Modal">Modal</option>
                            <option value="Saldo Laba">Saldo Laba</option>
                        </select>
                        {{$errors->first('saldo_awal_akun', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Nilai Saldo Awal</label>
                    <div class="col-md-9 input-group">
                        <span class="input-group-addon">Rp.&nbsp;</span>
                        <input type="text" name="saldo_awal_nilai" value="{{ old('saldo_awal_nilai') }}" class="form-control" placeholder="Masukkan Nilai Saldo Awal" onKeyUp="this.value=formatCurrency(this.value);">
                    </div>
                        {{$errors->first('saldo_awal_nilai', '<span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                </div>
            </div>
            <div class="panel-footer">
                <div class="button-group">
                    <input type="submit" name="btnSimpan" value="Simpan" class="btn btn-success">&nbsp;
                    <a class="btn btn-danger" href="{{url('/saldo')}}">Batal</a>
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