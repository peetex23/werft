-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE DATABASE "db_werft" ------------------------------
CREATE DATABASE IF NOT EXISTS `db_werft` CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_werft`;
-- ---------------------------------------------------------


-- CREATE TABLE "cfg_password_resets" ----------------------
-- CREATE TABLE "cfg_password_resets" --------------------------
CREATE TABLE `cfg_password_resets` ( 
	`email` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`token` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "cfg_users" --------------------------------
-- CREATE TABLE "cfg_users" ------------------------------------
CREATE TABLE `cfg_users` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`email` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`password` VarChar( 60 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`remember_token` VarChar( 100 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY ( `id` ),
	CONSTRAINT `cfg_users_email_unique` UNIQUE( `email` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "migrations" -------------------------------
-- CREATE TABLE "migrations" -----------------------------------
CREATE TABLE `migrations` ( 
	`migration` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`batch` Int( 11 ) NOT NULL )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "mst_biaya_lain" ---------------------------
-- CREATE TABLE "mst_biaya_lain" -------------------------------
CREATE TABLE `mst_biaya_lain` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`biaya_lain_nama` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`biaya_lain_deskripsi` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 2;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "mst_saldo_awal" ---------------------------
-- CREATE TABLE "mst_saldo_awal" -------------------------------
CREATE TABLE `mst_saldo_awal` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`saldo_awal_periode` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`saldo_awal_akun` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`saldo_awal_nilai` BigInt( 20 ) UNSIGNED NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "tb_aset" ----------------------------------
-- CREATE TABLE "tb_aset" --------------------------------------
CREATE TABLE `tb_aset` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`aset_nama` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`aset_kelompok` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`aset_masa_manfaat` TinyInt( 3 ) UNSIGNED NULL,
	`aset_harga` BigInt( 20 ) UNSIGNED NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "tb_aset_lain" -----------------------------
-- CREATE TABLE "tb_aset_lain" ---------------------------------
CREATE TABLE `tb_aset_lain` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`aset_lain_nama` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`aset_lain_nilaiperolehan` BigInt( 20 ) UNSIGNED NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "tb_bank" ----------------------------------
-- CREATE TABLE "tb_bank" --------------------------------------
CREATE TABLE `tb_bank` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`bank_nama` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`bank_nomor_rek` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`bank_jenis_rek` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`bank_pinjaman` Char( 1 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'n',
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 9;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "tb_pelanggan" -----------------------------
-- CREATE TABLE "tb_pelanggan" ---------------------------------
CREATE TABLE `tb_pelanggan` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`pelanggan_nama` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`pelanggan_alamat` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`pelanggan_telepon` Char( 20 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`pelanggan_kontaklain` Char( 20 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`pelanggan_email` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 6;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "tb_pemasok" -------------------------------
-- CREATE TABLE "tb_pemasok" -----------------------------------
CREATE TABLE `tb_pemasok` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`pemasok_nama` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`pemasok_alamat` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`pemasok_telepon` Char( 20 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`pemasok_kontaklain` Char( 20 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`pemasok_email` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "trn_biaya_dimuka" -------------------------
-- CREATE TABLE "trn_biaya_dimuka" -----------------------------
CREATE TABLE `trn_biaya_dimuka` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`biaya_dimuka_jumlah` BigInt( 20 ) UNSIGNED NULL,
	`biaya_dimuka_jangkawaktu` Smallint( 5 ) UNSIGNED NULL,
	`biaya_dimuka_metode_bayar` Char( 20 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`biaya_dimuka_tanggal` Date NULL,
	`biaya_dimuka_catatan` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 2;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "trn_jasa_tunai" ---------------------------
-- CREATE TABLE "trn_jasa_tunai" -------------------------------
CREATE TABLE `trn_jasa_tunai` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`jasa_tunai_deskripsi` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`jasa_tunai_biaya` BigInt( 20 ) UNSIGNED NULL,
	`jasa_tunai_metode` Char( 30 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`id_pelanggan` Smallint( 5 ) UNSIGNED NULL,
	`jasa_tunai_tanggal` Date NULL,
	`jasa_tunai_catatan` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 4;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "trn_modal_barang" -------------------------
-- CREATE TABLE "trn_modal_barang" -----------------------------
CREATE TABLE `trn_modal_barang` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`modal_barang_nama` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`modal_barang_nilai_perolehan` BigInt( 20 ) UNSIGNED NULL,
	`modal_barang_masa_manfaat` Smallint( 5 ) UNSIGNED NULL,
	`modal_barang_tanggal` Date NULL,
	`modal_barang_catatan` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 2;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "trn_modal_uang" ---------------------------
-- CREATE TABLE "trn_modal_uang" -------------------------------
CREATE TABLE `trn_modal_uang` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`modal_uang_jumlah` BigInt( 20 ) UNSIGNED NULL,
	`modal_uang_metode_bayar` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`modal_uang_tanggal` Date NULL,
	`modal_uang_catatan` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 2;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "trn_pelunasan_biaya" ----------------------
-- CREATE TABLE "trn_pelunasan_biaya" --------------------------
CREATE TABLE `trn_pelunasan_biaya` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`pelunasan_biaya_jenis` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`pelunasan_biaya_nilai` BigInt( 20 ) UNSIGNED NULL,
	`pelunasan_biaya_metode_bayar` Char( 20 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`pelunasan_biaya_tanggal` Date NULL,
	`pelunasan_biaya_catatan` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 2;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "trn_pelunasan_pembelian_kredit" -----------
-- CREATE TABLE "trn_pelunasan_pembelian_kredit" ---------------
CREATE TABLE `trn_pelunasan_pembelian_kredit` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`pelunasan_pembelian_kredit_jumlah` BigInt( 20 ) UNSIGNED NULL,
	`pelunasan_pembelian_kredit_metode_bayar` Char( 20 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`id_pemasok` Smallint( 5 ) UNSIGNED NULL,
	`pelunasan_pembelian_kredit_tanggal` Date NULL,
	`pelunasan_pembelian_kredit_catatan` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 2;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "trn_pelunasan_utang_bank" -----------------
-- CREATE TABLE "trn_pelunasan_utang_bank" ---------------------
CREATE TABLE `trn_pelunasan_utang_bank` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`pelunasan_utang_bank_jumlah_pokok` BigInt( 20 ) UNSIGNED NULL,
	`pelunasan_utang_bank_jumlah_bunga` BigInt( 20 ) UNSIGNED NULL,
	`pelunasan_utang_bank_metode_bayar` Char( 20 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`id_bank` Smallint( 5 ) UNSIGNED NULL,
	`pelunasan_utang_bank_tanggal` Date NULL,
	`pelunasan_utang_bank_catatan` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "trn_pelunasan_utang_nonbank" --------------
-- CREATE TABLE "trn_pelunasan_utang_nonbank" ------------------
CREATE TABLE `trn_pelunasan_utang_nonbank` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`pelunasan_utang_nonbank_jumlah` BigInt( 20 ) UNSIGNED NULL,
	`pelunasan_utang_nonbank_metode_bayar` Char( 20 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`pelunasan_utang_nonbank_tanggal` Date NULL,
	`pelunasan_utang_nonbank_catatan` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "trn_pembayaran_aset" ----------------------
-- CREATE TABLE "trn_pembayaran_aset" --------------------------
CREATE TABLE `trn_pembayaran_aset` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`pembayaran_aset_nama` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`pembayaran_aset_harga` BigInt( 20 ) UNSIGNED NULL,
	`pembayaran_aset_jumlah` Smallint( 5 ) UNSIGNED NULL,
	`pembayaran_aset_total` BigInt( 20 ) UNSIGNED NULL,
	`id_pemasok` Smallint( 5 ) UNSIGNED NULL,
	`pembayaran_aset_tanggal` Date NULL,
	`pembayaran_aset_catatan` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "trn_pembayaran_piutang" -------------------
-- CREATE TABLE "trn_pembayaran_piutang" -----------------------
CREATE TABLE `trn_pembayaran_piutang` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`pembayaran_piutang_jumlah` BigInt( 20 ) UNSIGNED NULL,
	`pembayaran_piutang_metode` Char( 30 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`id_pelanggan` Smallint( 5 ) UNSIGNED NULL,
	`pembayaran_piutang_tanggal` Date NULL,
	`pembayaran_piutang_catatan` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "trn_pembelian_aset" -----------------------
-- CREATE TABLE "trn_pembelian_aset" ---------------------------
CREATE TABLE `trn_pembelian_aset` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`pembelian_aset_namaaset` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`pembelian_aset_nilaiperolehan` BigInt( 20 ) UNSIGNED NULL,
	`pembelian_aset_masamanfaat` Smallint( 5 ) UNSIGNED NULL,
	`pembelian_aset_metode_bayar` Char( 20 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`pembelian_aset_jumlah` Smallint( 5 ) UNSIGNED NULL,
	`pembelian_aset_totalharga` BigInt( 20 ) UNSIGNED NULL,
	`idpemasok` Smallint( 5 ) UNSIGNED NULL,
	`pembelian_aset_istetap` Char( 1 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT 'y',
	`pembelian_aset_istunai` Char( 1 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT 'y',
	`pembelian_aset_isdownpayment` Char( 1 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT 'n',
	`pembelian_aset_tanggal` Date NULL,
	`pembelian_aset_catatan` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 9;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "trn_penarikan_bank" -----------------------
-- CREATE TABLE "trn_penarikan_bank" ---------------------------
CREATE TABLE `trn_penarikan_bank` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`penarikan_bank_jumlah` BigInt( 20 ) UNSIGNED NULL,
	`penarikan_bank_asalbank` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`penarikan_bank_tanggal` Date NULL,
	`penarikan_bank_catatan` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`penarikan_bank_flag` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`id_bank` Smallint( 5 ) UNSIGNED NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 2;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "trn_pendapatan_dimuka" --------------------
-- CREATE TABLE "trn_pendapatan_dimuka" ------------------------
CREATE TABLE `trn_pendapatan_dimuka` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`pendapatan_dimuka_jumlah` BigInt( 20 ) UNSIGNED NULL,
	`pendapatan_dimuka_jangka_waktu` Smallint( 5 ) UNSIGNED NULL,
	`pendapatan_dimuka_tanggal` Date NULL,
	`pendapatan_dimuka_catatan` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "trn_penghapusan_piutang" ------------------
-- CREATE TABLE "trn_penghapusan_piutang" ----------------------
CREATE TABLE `trn_penghapusan_piutang` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`penghapusan_piutang_jumlah` BigInt( 20 ) UNSIGNED NULL,
	`id_pelanggan` Smallint( 5 ) UNSIGNED NULL,
	`penghapusan_piutang_tanggal` Date NULL,
	`penghapusan_piutang_catatan` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 2;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "trn_utang" --------------------------------
-- CREATE TABLE "trn_utang" ------------------------------------
CREATE TABLE `trn_utang` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`utang_jumlahpokok` BigInt( 20 ) UNSIGNED NULL,
	`utang_bunga` Double( 8, 2 ) UNSIGNED NULL,
	`utang_jenis_bunga` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`utang_jangka_waktu` Smallint( 5 ) UNSIGNED NULL,
	`id_bank` Smallint( 5 ) UNSIGNED NULL,
	`utang_metode_bayar` Char( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`utang_tanggal` Date NULL,
	`utang_bank` Char( 1 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT 'y',
	`utang_catatan` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 5;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- Dump data of "cfg_password_resets" ----------------------
-- ---------------------------------------------------------


-- Dump data of "cfg_users" --------------------------------
-- ---------------------------------------------------------


-- Dump data of "migrations" -------------------------------
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2014_10_12_000000_create_users_table', '1' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2014_10_12_100000_create_password_resets_table', '1' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2017_06_09_153833_tb_pelanggan', '1' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2017_06_09_154317_tb_pemasok', '1' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2017_06_09_154517_tb_aset', '2' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2017_06_09_154824_mst_biaya_lain', '3' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2017_06_09_155209_tb_bank', '3' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2017_06_09_155452_tb_aset_lain', '3' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2017_06_09_155704_mst_saldo_awal', '3' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2017_06_09_161505_trn_jasa_tunai', '4' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2017_06_09_162146_trn_pembayaran_piutang', '4' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2017_06_09_162320_trn_pembayaran_aset', '4' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2017_06_09_162632_trn_utang_bank', '5' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2017_06_09_163406_trn_modal_uang', '5' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2017_06_09_163716_trn_modal_barang', '5' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2017_06_12_063007_tb_penarikan_bank', '6' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2017_06_12_063443_trn_pendapatan_dimuka', '6' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2017_06_12_073618_trn_pelunasan_pembelian_kredit', '7' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2017_06_12_093121_trn_pelunasan_utang_bank', '8' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2017_06_12_093251_trn_pelunasan_utang_nonbank', '8' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2017_06_12_093458_trn_pelunasan_biaya', '9' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2017_06_12_094909_trn_pembelian_aset', '10' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2017_06_12_100940_trn_penghapusan_piutang', '10' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2017_06_12_101420_trn_biaya_dimuka', '10' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2017_06_19_192227_update_trn_penarikan_bank', '11' );
-- ---------------------------------------------------------


-- Dump data of "mst_biaya_lain" ---------------------------
INSERT INTO `mst_biaya_lain`(`id`,`created_at`,`updated_at`,`biaya_lain_nama`,`biaya_lain_deskripsi`) VALUES ( '1', '2017-06-13 03:32:10', '2017-06-13 03:32:10', 'ATK', 'Pembelian barang-barang Alat Tulis Kantor' );
-- ---------------------------------------------------------


-- Dump data of "mst_saldo_awal" ---------------------------
INSERT INTO `mst_saldo_awal`(`id`,`created_at`,`updated_at`,`saldo_awal_periode`,`saldo_awal_akun`,`saldo_awal_nilai`) VALUES ( '1', '2017-06-15 05:27:26', '2017-06-15 05:27:26', 'Januari 2017', 'Kas', '800000000' );
INSERT INTO `mst_saldo_awal`(`id`,`created_at`,`updated_at`,`saldo_awal_periode`,`saldo_awal_akun`,`saldo_awal_nilai`) VALUES ( '2', '2017-06-15 05:27:48', '2017-06-15 05:27:48', 'Januari 2017', 'Giro', '700000000' );
-- ---------------------------------------------------------


-- Dump data of "tb_aset" ----------------------------------
INSERT INTO `tb_aset`(`id`,`created_at`,`updated_at`,`aset_nama`,`aset_kelompok`,`aset_masa_manfaat`,`aset_harga`) VALUES ( '1', '2017-06-13 03:03:15', '2017-06-13 03:03:15', 'Kijang Innova \'14', 'Mobil, motor, dan kendaraan lain', '5', '500000000' );
INSERT INTO `tb_aset`(`id`,`created_at`,`updated_at`,`aset_nama`,`aset_kelompok`,`aset_masa_manfaat`,`aset_harga`) VALUES ( '2', '2017-06-13 03:18:09', '2017-06-13 03:18:09', 'Toyota Avanza \'13', 'Mobil, motor, dan kendaraan lain', '5', '175000000' );
-- ---------------------------------------------------------


-- Dump data of "tb_aset_lain" -----------------------------
INSERT INTO `tb_aset_lain`(`id`,`created_at`,`updated_at`,`aset_lain_nama`,`aset_lain_nilaiperolehan`) VALUES ( '1', '2017-06-14 16:16:21', '2017-06-14 16:16:21', 'Swempax Bolonx', '14500' );
INSERT INTO `tb_aset_lain`(`id`,`created_at`,`updated_at`,`aset_lain_nama`,`aset_lain_nilaiperolehan`) VALUES ( '2', '2017-06-15 04:48:22', '2017-06-15 04:48:22', 'Asem Sikalamat', '1900000' );
-- ---------------------------------------------------------


-- Dump data of "tb_bank" ----------------------------------
INSERT INTO `tb_bank`(`id`,`created_at`,`updated_at`,`bank_nama`,`bank_nomor_rek`,`bank_jenis_rek`,`bank_pinjaman`) VALUES ( '1', '2017-06-13 04:43:10', '2017-06-13 04:43:10', 'Bank Mandiri', '14000109876543', 'Tabungan', 'n' );
INSERT INTO `tb_bank`(`id`,`created_at`,`updated_at`,`bank_nama`,`bank_nomor_rek`,`bank_jenis_rek`,`bank_pinjaman`) VALUES ( '2', '2017-06-13 04:43:29', '2017-06-13 04:43:29', 'Bank BCA', '023934774', 'Giro', 'n' );
INSERT INTO `tb_bank`(`id`,`created_at`,`updated_at`,`bank_nama`,`bank_nomor_rek`,`bank_jenis_rek`,`bank_pinjaman`) VALUES ( '3', '2017-06-14 15:33:35', '2017-06-14 15:33:35', 'Bank ABC', '099976655', 'Giro', 'n' );
INSERT INTO `tb_bank`(`id`,`created_at`,`updated_at`,`bank_nama`,`bank_nomor_rek`,`bank_jenis_rek`,`bank_pinjaman`) VALUES ( '4', '2017-06-14 15:35:31', '2017-06-14 15:35:31', 'Bank BNI', '012238383489', 'Tabungan', 'n' );
INSERT INTO `tb_bank`(`id`,`created_at`,`updated_at`,`bank_nama`,`bank_nomor_rek`,`bank_jenis_rek`,`bank_pinjaman`) VALUES ( '5', '2017-06-14 15:36:49', '2017-06-14 15:36:49', 'Bank BRI', '23894829839929', 'Tabungan', 'n' );
INSERT INTO `tb_bank`(`id`,`created_at`,`updated_at`,`bank_nama`,`bank_nomor_rek`,`bank_jenis_rek`,`bank_pinjaman`) VALUES ( '6', '2017-06-14 15:54:16', '2017-06-14 15:54:16', 'Bank Jatim', '', '', 'y' );
INSERT INTO `tb_bank`(`id`,`created_at`,`updated_at`,`bank_nama`,`bank_nomor_rek`,`bank_jenis_rek`,`bank_pinjaman`) VALUES ( '7', '2017-06-14 15:56:46', '2017-06-14 15:56:46', 'Bank CIMB Niaga', '', '', 'y' );
INSERT INTO `tb_bank`(`id`,`created_at`,`updated_at`,`bank_nama`,`bank_nomor_rek`,`bank_jenis_rek`,`bank_pinjaman`) VALUES ( '8', '2018-03-09 07:16:50', '2018-03-09 07:16:50', 'Bank Bokir', '999883232', 'Tabungan', 'n' );
-- ---------------------------------------------------------


-- Dump data of "tb_pelanggan" -----------------------------
INSERT INTO `tb_pelanggan`(`id`,`created_at`,`updated_at`,`pelanggan_nama`,`pelanggan_alamat`,`pelanggan_telepon`,`pelanggan_kontaklain`,`pelanggan_email`) VALUES ( '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'John Doe', 'Jalan Kalibokor Selatan II/23', '0315023423', NULL, NULL );
INSERT INTO `tb_pelanggan`(`id`,`created_at`,`updated_at`,`pelanggan_nama`,`pelanggan_alamat`,`pelanggan_telepon`,`pelanggan_kontaklain`,`pelanggan_email`) VALUES ( '2', '2017-06-12 18:03:42', '2017-06-12 18:03:42', 'Erlangga', 'Jalan Kalibokor I / 34', '0315670123', '081234567890', 'erlangga@mail.com' );
INSERT INTO `tb_pelanggan`(`id`,`created_at`,`updated_at`,`pelanggan_nama`,`pelanggan_alamat`,`pelanggan_telepon`,`pelanggan_kontaklain`,`pelanggan_email`) VALUES ( '3', '2017-06-14 15:06:42', '2017-06-14 15:06:42', 'Pramayuda', 'Jalan Sehat 45', '0317773342', '-', 'asdfve@abc.xyz' );
INSERT INTO `tb_pelanggan`(`id`,`created_at`,`updated_at`,`pelanggan_nama`,`pelanggan_alamat`,`pelanggan_telepon`,`pelanggan_kontaklain`,`pelanggan_email`) VALUES ( '4', '2017-06-14 15:10:10', '2017-06-14 15:10:10', 'Suketi', 'Jalan Ambengan 39', '031223884', '-', 'asdef@jkl.go' );
INSERT INTO `tb_pelanggan`(`id`,`created_at`,`updated_at`,`pelanggan_nama`,`pelanggan_alamat`,`pelanggan_telepon`,`pelanggan_kontaklain`,`pelanggan_email`) VALUES ( '5', '2017-06-15 06:41:48', '2017-06-15 06:41:48', 'Sriwedari', '', '', '', '' );
-- ---------------------------------------------------------


-- Dump data of "tb_pemasok" -------------------------------
INSERT INTO `tb_pemasok`(`id`,`created_at`,`updated_at`,`pemasok_nama`,`pemasok_alamat`,`pemasok_telepon`,`pemasok_kontaklain`,`pemasok_email`) VALUES ( '1', '2017-06-13 02:46:02', '2017-06-13 02:46:02', 'Pemasok Karet', 'Jl. Gula', '0313045885', '081774737433', 'pemasok.karet@mail.gom' );
INSERT INTO `tb_pemasok`(`id`,`created_at`,`updated_at`,`pemasok_nama`,`pemasok_alamat`,`pemasok_telepon`,`pemasok_kontaklain`,`pemasok_email`) VALUES ( '2', '2017-06-20 01:17:24', '2017-06-20 01:17:24', 'Pemasok Kayu', 'Jalan Anu', '0318800099', '', 'adaemail@yohee.com' );
-- ---------------------------------------------------------


-- Dump data of "trn_biaya_dimuka" -------------------------
INSERT INTO `trn_biaya_dimuka`(`id`,`created_at`,`updated_at`,`biaya_dimuka_jumlah`,`biaya_dimuka_jangkawaktu`,`biaya_dimuka_metode_bayar`,`biaya_dimuka_tanggal`,`biaya_dimuka_catatan`) VALUES ( '1', '2017-09-26 05:45:49', '2017-09-26 05:45:49', '6000000', '3', 'Tunai', '2017-09-26', 'Buat bayar anu' );
-- ---------------------------------------------------------


-- Dump data of "trn_jasa_tunai" ---------------------------
INSERT INTO `trn_jasa_tunai`(`id`,`created_at`,`updated_at`,`jasa_tunai_deskripsi`,`jasa_tunai_biaya`,`jasa_tunai_metode`,`id_pelanggan`,`jasa_tunai_tanggal`,`jasa_tunai_catatan`) VALUES ( '1', '2017-06-15 07:42:42', '2017-06-15 07:42:42', 'Jasa Pembuatan Kapal', '200000000', 'Transfer', '2', '2017-06-15', '' );
INSERT INTO `trn_jasa_tunai`(`id`,`created_at`,`updated_at`,`jasa_tunai_deskripsi`,`jasa_tunai_biaya`,`jasa_tunai_metode`,`id_pelanggan`,`jasa_tunai_tanggal`,`jasa_tunai_catatan`) VALUES ( '2', '2017-06-15 08:14:11', '2017-06-15 08:14:11', 'Jasa Bikin Kapal', '250000000', 'Transfer', '4', '2017-06-15', '' );
INSERT INTO `trn_jasa_tunai`(`id`,`created_at`,`updated_at`,`jasa_tunai_deskripsi`,`jasa_tunai_biaya`,`jasa_tunai_metode`,`id_pelanggan`,`jasa_tunai_tanggal`,`jasa_tunai_catatan`) VALUES ( '3', '2017-06-15 08:22:22', '2017-06-15 08:22:22', 'Jasa Bikin Kapal Anu', '150000000', 'Transfer', '4', '2017-06-15', 'ada itu
ada anu
itu uga' );
-- ---------------------------------------------------------


-- Dump data of "trn_modal_barang" -------------------------
INSERT INTO `trn_modal_barang`(`id`,`created_at`,`updated_at`,`modal_barang_nama`,`modal_barang_nilai_perolehan`,`modal_barang_masa_manfaat`,`modal_barang_tanggal`,`modal_barang_catatan`) VALUES ( '1', '2017-06-19 18:53:10', '2017-06-19 18:53:10', 'Mobil si anu', '225000000', '7', '2017-06-20', 'ya anu itu' );
-- ---------------------------------------------------------


-- Dump data of "trn_modal_uang" ---------------------------
INSERT INTO `trn_modal_uang`(`id`,`created_at`,`updated_at`,`modal_uang_jumlah`,`modal_uang_metode_bayar`,`modal_uang_tanggal`,`modal_uang_catatan`) VALUES ( '1', '2017-06-19 18:06:41', '2017-06-19 18:06:41', '10', 'Tunai', '2017-06-20', 'mbuh' );
-- ---------------------------------------------------------


-- Dump data of "trn_pelunasan_biaya" ----------------------
INSERT INTO `trn_pelunasan_biaya`(`id`,`created_at`,`updated_at`,`pelunasan_biaya_jenis`,`pelunasan_biaya_nilai`,`pelunasan_biaya_metode_bayar`,`pelunasan_biaya_tanggal`,`pelunasan_biaya_catatan`) VALUES ( '1', '2017-09-22 08:12:40', '2017-09-22 08:12:40', 'Bahan Bakar', '500000', 'Tunai', '2017-09-22', 'Buat bakar kayu' );
-- ---------------------------------------------------------


-- Dump data of "trn_pelunasan_pembelian_kredit" -----------
INSERT INTO `trn_pelunasan_pembelian_kredit`(`id`,`created_at`,`updated_at`,`pelunasan_pembelian_kredit_jumlah`,`pelunasan_pembelian_kredit_metode_bayar`,`id_pemasok`,`pelunasan_pembelian_kredit_tanggal`,`pelunasan_pembelian_kredit_catatan`) VALUES ( '1', '2017-06-20 01:19:13', '2017-06-20 01:19:13', '25000000', 'Tunai', '2', '2017-06-20', 'ya itu eh' );
-- ---------------------------------------------------------


-- Dump data of "trn_pelunasan_utang_bank" -----------------
INSERT INTO `trn_pelunasan_utang_bank`(`id`,`created_at`,`updated_at`,`pelunasan_utang_bank_jumlah_pokok`,`pelunasan_utang_bank_jumlah_bunga`,`pelunasan_utang_bank_metode_bayar`,`id_bank`,`pelunasan_utang_bank_tanggal`,`pelunasan_utang_bank_catatan`) VALUES ( '1', '2017-06-20 02:03:02', '2017-06-20 02:03:02', '10', '500', 'Tunai', '1', '2017-06-20', 'ya itu' );
INSERT INTO `trn_pelunasan_utang_bank`(`id`,`created_at`,`updated_at`,`pelunasan_utang_bank_jumlah_pokok`,`pelunasan_utang_bank_jumlah_bunga`,`pelunasan_utang_bank_metode_bayar`,`id_bank`,`pelunasan_utang_bank_tanggal`,`pelunasan_utang_bank_catatan`) VALUES ( '2', '2017-06-20 02:05:29', '2017-06-20 02:05:29', '15000000', '750000', 'Tunai', '2', '2017-06-20', 'sekilo limaribu' );
-- ---------------------------------------------------------


-- Dump data of "trn_pelunasan_utang_nonbank" --------------
INSERT INTO `trn_pelunasan_utang_nonbank`(`id`,`created_at`,`updated_at`,`pelunasan_utang_nonbank_jumlah`,`pelunasan_utang_nonbank_metode_bayar`,`pelunasan_utang_nonbank_tanggal`,`pelunasan_utang_nonbank_catatan`) VALUES ( '1', '2017-09-22 07:38:14', '2017-09-22 07:38:14', '800', 'Transfer', '2017-09-22', 'Mbayar Utang ke Koh Sin' );
INSERT INTO `trn_pelunasan_utang_nonbank`(`id`,`created_at`,`updated_at`,`pelunasan_utang_nonbank_jumlah`,`pelunasan_utang_nonbank_metode_bayar`,`pelunasan_utang_nonbank_tanggal`,`pelunasan_utang_nonbank_catatan`) VALUES ( '2', '2017-09-22 07:39:10', '2017-09-22 07:39:10', '750000', 'Transfer', '2017-09-22', 'Mbayar utang ke Aik Kungkum' );
-- ---------------------------------------------------------


-- Dump data of "trn_pembayaran_aset" ----------------------
INSERT INTO `trn_pembayaran_aset`(`id`,`created_at`,`updated_at`,`pembayaran_aset_nama`,`pembayaran_aset_harga`,`pembayaran_aset_jumlah`,`pembayaran_aset_total`,`id_pemasok`,`pembayaran_aset_tanggal`,`pembayaran_aset_catatan`) VALUES ( '1', '2017-06-15 18:06:43', '2017-06-15 18:06:43', 'Kijang Innova \'14', '567000000', '2', '1134000000', '1', '2017-06-16', 'huhu' );
INSERT INTO `trn_pembayaran_aset`(`id`,`created_at`,`updated_at`,`pembayaran_aset_nama`,`pembayaran_aset_harga`,`pembayaran_aset_jumlah`,`pembayaran_aset_total`,`id_pemasok`,`pembayaran_aset_tanggal`,`pembayaran_aset_catatan`) VALUES ( '2', '2017-06-19 07:39:06', '2017-06-19 07:39:06', 'Toyota Avanza \'13', '175000000', '1', '175000000', '1', '2017-06-19', 'asdf
klj
' );
-- ---------------------------------------------------------


-- Dump data of "trn_pembayaran_piutang" -------------------
INSERT INTO `trn_pembayaran_piutang`(`id`,`created_at`,`updated_at`,`pembayaran_piutang_jumlah`,`pembayaran_piutang_metode`,`id_pelanggan`,`pembayaran_piutang_tanggal`,`pembayaran_piutang_catatan`) VALUES ( '1', '2017-06-15 09:28:23', '2017-06-15 09:28:23', '10', 'Tunai', '3', '2017-06-15', 'qwert
asdf' );
INSERT INTO `trn_pembayaran_piutang`(`id`,`created_at`,`updated_at`,`pembayaran_piutang_jumlah`,`pembayaran_piutang_metode`,`id_pelanggan`,`pembayaran_piutang_tanggal`,`pembayaran_piutang_catatan`) VALUES ( '2', '2017-06-15 09:29:04', '2017-06-15 09:29:04', '15000000', 'Transfer', '4', '2017-06-15', 'ip
poi
asdf' );
-- ---------------------------------------------------------


-- Dump data of "trn_pembelian_aset" -----------------------
INSERT INTO `trn_pembelian_aset`(`id`,`created_at`,`updated_at`,`pembelian_aset_namaaset`,`pembelian_aset_nilaiperolehan`,`pembelian_aset_masamanfaat`,`pembelian_aset_metode_bayar`,`pembelian_aset_jumlah`,`pembelian_aset_totalharga`,`idpemasok`,`pembelian_aset_istetap`,`pembelian_aset_istunai`,`pembelian_aset_isdownpayment`,`pembelian_aset_tanggal`,`pembelian_aset_catatan`) VALUES ( '1', '2017-09-26 03:54:08', '2017-09-26 03:54:08', NULL, '520000000', '5', 'Transfer', '1', '520000000', NULL, 'y', 'y', 'n', '2017-09-26', 'Buat operasional pak Boss' );
INSERT INTO `trn_pembelian_aset`(`id`,`created_at`,`updated_at`,`pembelian_aset_namaaset`,`pembelian_aset_nilaiperolehan`,`pembelian_aset_masamanfaat`,`pembelian_aset_metode_bayar`,`pembelian_aset_jumlah`,`pembelian_aset_totalharga`,`idpemasok`,`pembelian_aset_istetap`,`pembelian_aset_istunai`,`pembelian_aset_isdownpayment`,`pembelian_aset_tanggal`,`pembelian_aset_catatan`) VALUES ( '2', '2017-09-26 03:58:17', '2017-09-26 03:58:17', 'Toyota Camry 2017', '750000000', '7', 'Transfer', '1', '750000000', NULL, 'y', 'y', 'n', '2017-09-26', 'Buat operasional ibu Bos' );
INSERT INTO `trn_pembelian_aset`(`id`,`created_at`,`updated_at`,`pembelian_aset_namaaset`,`pembelian_aset_nilaiperolehan`,`pembelian_aset_masamanfaat`,`pembelian_aset_metode_bayar`,`pembelian_aset_jumlah`,`pembelian_aset_totalharga`,`idpemasok`,`pembelian_aset_istetap`,`pembelian_aset_istunai`,`pembelian_aset_isdownpayment`,`pembelian_aset_tanggal`,`pembelian_aset_catatan`) VALUES ( '3', '2017-09-26 04:00:13', '2017-09-26 04:00:13', 'Honda Civic Turbo 2017', '490000000', '7', 'Transfer', '1', '490000000', NULL, 'y', 'y', 'n', '2017-09-26', 'Untuk mainan anaknya pak Bos' );
INSERT INTO `trn_pembelian_aset`(`id`,`created_at`,`updated_at`,`pembelian_aset_namaaset`,`pembelian_aset_nilaiperolehan`,`pembelian_aset_masamanfaat`,`pembelian_aset_metode_bayar`,`pembelian_aset_jumlah`,`pembelian_aset_totalharga`,`idpemasok`,`pembelian_aset_istetap`,`pembelian_aset_istunai`,`pembelian_aset_isdownpayment`,`pembelian_aset_tanggal`,`pembelian_aset_catatan`) VALUES ( '4', '2017-09-26 04:23:50', '2017-09-26 04:23:50', 'Tanah 5 HA di Prambon', '1200000000', '0', '', '1', '1200000000', '2', 'y', 't', 'y', '2017-09-26', 'Untuk gudang yang baru' );
INSERT INTO `trn_pembelian_aset`(`id`,`created_at`,`updated_at`,`pembelian_aset_namaaset`,`pembelian_aset_nilaiperolehan`,`pembelian_aset_masamanfaat`,`pembelian_aset_metode_bayar`,`pembelian_aset_jumlah`,`pembelian_aset_totalharga`,`idpemasok`,`pembelian_aset_istetap`,`pembelian_aset_istunai`,`pembelian_aset_isdownpayment`,`pembelian_aset_tanggal`,`pembelian_aset_catatan`) VALUES ( '5', '2017-09-26 04:25:59', '2017-09-26 04:25:59', 'Gudang Safe n Lock', '1000000000', '0', 'Transfer', '1', '1000000000', '2', 'y', 't', 'n', '2017-09-26', 'Buat gudang di Sidoarjo kota' );
INSERT INTO `trn_pembelian_aset`(`id`,`created_at`,`updated_at`,`pembelian_aset_namaaset`,`pembelian_aset_nilaiperolehan`,`pembelian_aset_masamanfaat`,`pembelian_aset_metode_bayar`,`pembelian_aset_jumlah`,`pembelian_aset_totalharga`,`idpemasok`,`pembelian_aset_istetap`,`pembelian_aset_istunai`,`pembelian_aset_isdownpayment`,`pembelian_aset_tanggal`,`pembelian_aset_catatan`) VALUES ( '6', '2017-09-26 04:32:43', '2017-09-26 04:32:43', 'Aset Tetap Kredit 1', '80000000', '0', 'Tunai', '1', '80000000', '1', 'y', 't', 'n', '2017-09-26', 'tes test' );
INSERT INTO `trn_pembelian_aset`(`id`,`created_at`,`updated_at`,`pembelian_aset_namaaset`,`pembelian_aset_nilaiperolehan`,`pembelian_aset_masamanfaat`,`pembelian_aset_metode_bayar`,`pembelian_aset_jumlah`,`pembelian_aset_totalharga`,`idpemasok`,`pembelian_aset_istetap`,`pembelian_aset_istunai`,`pembelian_aset_isdownpayment`,`pembelian_aset_tanggal`,`pembelian_aset_catatan`) VALUES ( '7', '2017-09-26 04:54:16', '2017-09-26 04:54:16', 'Aset Anu', '45000000', '0', 'Tunai', '4', '180000000', NULL, 't', 'y', 'n', '2017-09-26', 'Buat itu anu' );
INSERT INTO `trn_pembelian_aset`(`id`,`created_at`,`updated_at`,`pembelian_aset_namaaset`,`pembelian_aset_nilaiperolehan`,`pembelian_aset_masamanfaat`,`pembelian_aset_metode_bayar`,`pembelian_aset_jumlah`,`pembelian_aset_totalharga`,`idpemasok`,`pembelian_aset_istetap`,`pembelian_aset_istunai`,`pembelian_aset_isdownpayment`,`pembelian_aset_tanggal`,`pembelian_aset_catatan`) VALUES ( '8', '2017-09-26 05:05:29', '2017-09-26 05:05:29', 'Pembelian Aset Lain Kredit 1', '35000000', '0', 'Tunai', '2', '70000000', '2', 't', 't', 'n', '2017-09-26', 'Test' );
-- ---------------------------------------------------------


-- Dump data of "trn_penarikan_bank" -----------------------
INSERT INTO `trn_penarikan_bank`(`id`,`created_at`,`updated_at`,`penarikan_bank_jumlah`,`penarikan_bank_asalbank`,`penarikan_bank_tanggal`,`penarikan_bank_catatan`,`penarikan_bank_flag`,`id_bank`) VALUES ( '1', '2017-06-19 19:49:48', '2017-06-19 19:49:48', '4', 'Bank BCA', '2017-06-20', 'asd', 'Giro', '2' );
-- ---------------------------------------------------------


-- Dump data of "trn_pendapatan_dimuka" --------------------
INSERT INTO `trn_pendapatan_dimuka`(`id`,`created_at`,`updated_at`,`pendapatan_dimuka_jumlah`,`pendapatan_dimuka_jangka_waktu`,`pendapatan_dimuka_tanggal`,`pendapatan_dimuka_catatan`) VALUES ( '1', '2017-06-20 00:43:21', '2017-06-20 00:43:21', '500', '12', '2017-06-20', 'ya anu itu' );
INSERT INTO `trn_pendapatan_dimuka`(`id`,`created_at`,`updated_at`,`pendapatan_dimuka_jumlah`,`pendapatan_dimuka_jangka_waktu`,`pendapatan_dimuka_tanggal`,`pendapatan_dimuka_catatan`) VALUES ( '2', '2017-06-20 00:44:21', '2017-06-20 00:44:21', '150000000', '8', '2017-06-20', 'ya itu' );
-- ---------------------------------------------------------


-- Dump data of "trn_penghapusan_piutang" ------------------
INSERT INTO `trn_penghapusan_piutang`(`id`,`created_at`,`updated_at`,`penghapusan_piutang_jumlah`,`id_pelanggan`,`penghapusan_piutang_tanggal`,`penghapusan_piutang_catatan`) VALUES ( '1', '2017-09-26 05:30:17', '2017-09-26 05:30:17', '500000', '4', '2017-09-26', 'Ada anu diantara kita' );
-- ---------------------------------------------------------


-- Dump data of "trn_utang" --------------------------------
INSERT INTO `trn_utang`(`id`,`created_at`,`updated_at`,`utang_jumlahpokok`,`utang_bunga`,`utang_jenis_bunga`,`utang_jangka_waktu`,`id_bank`,`utang_metode_bayar`,`utang_tanggal`,`utang_bank`,`utang_catatan`) VALUES ( '1', '2017-06-19 16:21:59', '2017-06-19 16:21:59', '1000000000', '5.00', 'Suku Bunga Flat', '60', '1', NULL, '2017-06-19', 'y', NULL );
INSERT INTO `trn_utang`(`id`,`created_at`,`updated_at`,`utang_jumlahpokok`,`utang_bunga`,`utang_jenis_bunga`,`utang_jangka_waktu`,`id_bank`,`utang_metode_bayar`,`utang_tanggal`,`utang_bank`,`utang_catatan`) VALUES ( '2', '2017-06-19 16:25:23', '2017-06-19 16:25:23', '1500000000', '5.00', 'Suku Bunga Flat', '60', '1', 'Transfer', '2017-06-19', 'y', NULL );
INSERT INTO `trn_utang`(`id`,`created_at`,`updated_at`,`utang_jumlahpokok`,`utang_bunga`,`utang_jenis_bunga`,`utang_jangka_waktu`,`id_bank`,`utang_metode_bayar`,`utang_tanggal`,`utang_bank`,`utang_catatan`) VALUES ( '3', '2017-06-19 16:50:41', '2017-06-19 16:50:41', '750', NULL, NULL, NULL, NULL, 'Transfer', '2017-06-19', 'n', 'utang dari anu' );
INSERT INTO `trn_utang`(`id`,`created_at`,`updated_at`,`utang_jumlahpokok`,`utang_bunga`,`utang_jenis_bunga`,`utang_jangka_waktu`,`id_bank`,`utang_metode_bayar`,`utang_tanggal`,`utang_bank`,`utang_catatan`) VALUES ( '4', '2017-06-19 16:52:39', '2017-06-19 16:52:39', '250000000', NULL, NULL, NULL, NULL, 'Transfer', '2017-06-19', 'n', 'utang dari itu' );
-- ---------------------------------------------------------


-- CREATE INDEX "cfg_password_resets_email_index" ----------
-- CREATE INDEX "cfg_password_resets_email_index" --------------
CREATE INDEX `cfg_password_resets_email_index` USING BTREE ON `cfg_password_resets`( `email` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE INDEX "cfg_password_resets_token_index" ----------
-- CREATE INDEX "cfg_password_resets_token_index" --------------
CREATE INDEX `cfg_password_resets_token_index` USING BTREE ON `cfg_password_resets`( `token` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


