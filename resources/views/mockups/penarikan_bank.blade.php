@extends ('layouts.dashboard')
@section('title', 'Penarikan Tabungan')
@section('page_heading','Form Penarikan Tabungan')

@section('style-head')
    @parent
    <link href="{{asset('assets/bootstrap.datetimepicker/bootstrap-datetimepicker.css')}}" rel="stylesheet">
@stop

@section('section')
<div class="col-sm-12">
@if($errors->any())
    <div class="alert alert-danger">
        <i class="fa fa-warning"></i>&nbsp;Periksa kembali isian anda.
    </div>
@endif
<div class="row">
    <div class="col-lg-9">
        <form role="form" class="form form-horizontal" method="POST" action="{{url('/penarikan_bank')}}"  autocomplete="off">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Jumlah</label>
                    <div class="col-md-9 input-group">
                        <span class="input-group-addon">Rp.&nbsp;</span>
                        <input type="text" name="penarikan_bank_jumlah" value="{{ old('penarikan_bank_jumlah') }}" class="form-control" placeholder="" onKeyUp="this.value=formatCurrency(this.value);">
                        {{$errors->first('penarikan_bank_jumlah', '<br><span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Bank</label>
                    <div class="col-md-9">
                        <select name="id_bank" class="form-control" onchange="document.getElementById('penarikan_bank_asalbank').value = this.options[this.selectedIndex].text">
                            @if($bank)
                                @foreach($bank as $dt_bank)
                                    <option value="{{ $dt_bank->id }}" {{ (old('id_bank') == $dt_bank->id) ? "selected" : ""}}>{{ $dt_bank->bank_nama }}</option>
                                @endforeach
                            @endif
                        </select>
                        <input type="hidden" name="penarikan_bank_asalbank" id="penarikan_bank_asalbank">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Jenis Rekening</label>
                    <div class="col-md-9">
                        <label class="radio-inline">
                            <input type="radio" name="penarikan_bank_flag" id="optionsRadiosInline1" value="Tabungan" {{ (old('penarikan_bank_flag') == "Tabungan") ? "checked" : ""}}>Tabungan
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="penarikan_bank_flag" id="optionsRadiosInline2" value="Giro" {{ (old('penarikan_bank_flag') == "Giro") ? "checked" : ""}}>Giro
                        </label>
                        {{$errors->first('penarikan_bank_flag', '<br><span style="color: #f00;"><i class="fa fa-warning"></i>&nbsp;:message</span>')}}
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="col-md-3 control-label">Tanggal</label>
                    <div class="col-md-9 input-group date">
                        <input type="text" name="penarikan_bank_tanggal" value="{{ old('penarikan_bank_tanggal') }}" class="form-control datepicker" placeholder="">
                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Catatan</label>
                    <div class="col-md-9">
                        <textarea name="penarikan_bank_catatan" class="form-control" rows="4">{{ old('penarikan_bank_catatan') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="button-group">
                    <input type="submit" name="btnSimpan" value="Simpan" class="btn btn-success" />&nbsp;
                    <a class="btn btn-danger" href="{{ url('/penarikan_bank') }}">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
@section('script-end')
    @parent
    <script src="{{asset('assets/bootstrap.datetimepicker/moment.js')}}"></script>
    <script src="{{asset('assets/bootstrap.datetimepicker/bootstrap-datetimepicker.js')}}"></script>
    <script src="{{asset('assets/scripts/formatCurrency.js')}}"></script>


    <script type="text/javascript">
        $(function () {
            $('.datepicker').datetimepicker({
                format: 'DD-MM-YYYY',
                minDate: moment(),
            });
        });
    </script>
@stop   