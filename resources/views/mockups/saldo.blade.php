@extends ('layouts.dashboard')
@section('page_heading','Form Saldo Awal')

@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-9">
        <form role="form" class="form form-horizontal">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Periode Saldo Awal</label>
                    <div class="col-md-8">
                        <input class="form-control" placeholder="Masukkan Periode Saldo Awal">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Akun</label>
                    <div class="col-md-8">
                        <select class="form-control">
                            <option>Kas</option>
                            <option>Giro</option>
                            <option>Tabungan</option>
                            <option>Piutang Usaha</option>
                            <option>Beban Dibayar di Muka</option>
                            <option>Aset Tetap</option>
                            <option>Aset Lain</option>
                            <option>Utang Usaha</option>
                            <option>Utang Bank</option>
                            <option>Kewajiban Lain</option>
                            <option>Utang Beban Tenaga Kerja</option>
                            <option>Utang beban sewa, transportasi, bahan bakan, listrik ,air, telepon</option>
                            <option>Utang Beban Umum dan Administrasi</option>
                            <option>Utang Beban Lain</option>
                            <option>Pendapatan Diterima di muka</option>
                            <option>Modal</option>
                            <option>Saldo Laba</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Nilai Saldo Awal</label>
                    <div class="col-md-8">
                        <input class="form-control" placeholder="Masukkan Nilai Saldo Awal">
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="button-group">
                    <a class="btn btn-success" href="{{url('mockups/saldoList')}}">Simpan</a>
                    <a class="btn btn-danger" href="{{url('mockups/saldoList')}}">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@stop