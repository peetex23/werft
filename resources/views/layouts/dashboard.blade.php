@extends('layouts.plane')

@section('body')
 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url ('/home') }}">Manajemen Keuangan Galangan Kapal v1.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li> -->
                        <li class="divider"></li>
                        <li><a href="{{ url ('login') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!--<li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div> -->
                            <!-- /input-group -->
                        <!-- </li> -->
                        <li {{ (Request::is('/home') ? 'class="active"' : '') }}>
                            <a href="{{ url ('') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Master Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/pelanggan')}}">Pelanggan</a>
                                </li>
                                <li>
                                    <a href="{{url('/pemasok')}}">Pemasok</a>
                                </li>
                                <li>
                                    <a href="{{url('/aset')}}">Aset</a>
                                </li>
                                <li>
                                    <a href="{{url('/biaya_lain')}}">Biaya Lain</a>
                                </li>
                                <li>
                                    <a href="{{url('/bank')}}">Bank</a>
                                </li>
                                <li>
                                    <a href="{{url('/bank_pinjaman')}}">Bank Pemberi Pinjaman</a>
                                </li>
                                <li>
                                    <a href="{{url('/aset_lain')}}">Aset Lain</a>
                                </li>
                                <li>
                                    <a href="{{url('/saldo')}}">Saldo Awal</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-money fa-fw"></i> Transaksi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Penerimaan <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Penjualan <span class="fa arrow"></span></a>
                                            <ul class="nav nav-fourth-level">
                                                <li>
                                                    <a href="{{url('/jasa_tunai')}}">Penjualan Jasa Tunai</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/pembayaran_piutang')}}">Pembayaran Piutang</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/pembayaran_aset')}}">Penjualan Aset</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Utang <span class="fa arrow"></span></a>
                                            <ul class="nav nav-fourth-level">
                                                <li>
                                                    <a href="{{url('/utang_bank')}}">Utang Bank</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/utang_nonbank')}}">Utang Non-Bank</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Modal <span class="fa arrow"></span></a>
                                            <ul class="nav nav-fourth-level">
                                                <li>
                                                    <a href="{{url('/modal_uang')}}">Modal Uang</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/modal_barang')}}">Modal Barang</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ url('/penarikan_bank') }}">Penarikan dari Bank</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/pendapatan_dimuka')}}">Pendapatan diterima di muka</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Pengeluaran <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Kewajiban <span class="fa arrow"></span></a>
                                            <ul class="nav nav-fourth-level">
                                                <li>
                                                    <a href="{{url('mockups/pelunasan_pembelian_kredit')}}">Pelunasan Pembelian Kredit</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('mockups/pelunasan_utang_bank')}}">Pelunasan Utang Bank</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('mockups/pelunasan_utang_nonbank')}}">Pelunasan Utang non-Bank</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('mockups/pelunasan_biaya')}}">Pelunasan Biaya</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{url('mockups/biaya')}}">Biaya</a>
                                        </li>
                                        <li>
                                            <a href="#">Pembelian Aset <span class="fa arrow"></span></a>
                                            <ul class="nav nav-fourth-level">
                                                <li>
                                                    <a href="{{url('mockups/pembelian_aset_tetap_tunai')}}">Pembelian Aset Tetap Tunai</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('mockups/pembelian_aset_tetap_kredit')}}">Pembelian Aset Tetap Kredit</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('mockups/pembelian_aset_lain_tunai')}}">Pembelian Aset Lain Tunai</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('mockups/pembelian_aset_lain_kredit')}}">Pembelian Aset Lain Kredit</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{url('mockups/penghapusan_piutang')}}">Penghapusan Piutang</a>
                                        </li>
                                        <li>
                                            <a href="{{url('mockups/biaya_dimuka')}}">Biaya dibayar di muka</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list-alt fa-fw"></i> History Transaksi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Harian</a>
                                </li>
                                <li>
                                    <a href="#">Mingguan</a>
                                </li>
                                <li>
                                    <a href="#">Bulanan</a>
                                </li>
                                <li>
                                    <a href="#">Tahunan</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file-text-o fa-fw"></i> Laporan Keuangan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Neraca</a>
                                </li>
                                <li>
                                    <a href="#">Pendapatan</a>
                                </li>
                                <li>
                                    <a href="#">Arus Kas</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
			 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('page_heading')</h1>
                </div>
                <!-- /.col-lg-12 -->
           </div>
			<div class="row">  
				@yield('section')

            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
@stop

