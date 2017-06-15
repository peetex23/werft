-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE TABLE "cfg_password_resets" ----------------------
CREATE TABLE `cfg_password_resets` ( 
	`email` VarChar( 255 ) NOT NULL,
	`token` VarChar( 255 ) NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB;
-- ---------------------------------------------------------


-- CREATE TABLE "cfg_users" --------------------------------
CREATE TABLE `cfg_users` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) NOT NULL,
	`email` VarChar( 255 ) NOT NULL,
	`password` VarChar( 60 ) NOT NULL,
	`remember_token` VarChar( 100 ) NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY ( `id` ),
	CONSTRAINT `cfg_users_email_unique` UNIQUE( `email` ) )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "migrations" -------------------------------
CREATE TABLE `migrations` ( 
	`migration` VarChar( 255 ) NOT NULL,
	`batch` Int( 11 ) NOT NULL )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB;
-- ---------------------------------------------------------


-- CREATE TABLE "mst_biaya_lain" ---------------------------
CREATE TABLE `mst_biaya_lain` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`biaya_lain_nama` Char( 255 ) NOT NULL,
	`biaya_lain_deskripsi` Text NOT NULL,
	PRIMARY KEY ( `id` ) )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 2;
-- ---------------------------------------------------------


-- CREATE TABLE "mst_saldo_awal" ---------------------------
CREATE TABLE `mst_saldo_awal` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`saldo_awal_periode` Char( 255 ) NOT NULL,
	`saldo_awal_akun` Char( 255 ) NOT NULL,
	`saldo_awal_nilai` BigInt( 20 ) UNSIGNED NULL,
	PRIMARY KEY ( `id` ) )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- ---------------------------------------------------------


-- CREATE TABLE "tb_aset" ----------------------------------
CREATE TABLE `tb_aset` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`aset_nama` Char( 255 ) NOT NULL,
	`aset_kelompok` Char( 255 ) NOT NULL,
	`aset_masa_manfaat` TinyInt( 3 ) UNSIGNED NULL,
	`aset_harga` BigInt( 20 ) UNSIGNED NULL,
	PRIMARY KEY ( `id` ) )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- ---------------------------------------------------------


-- CREATE TABLE "tb_aset_lain" -----------------------------
CREATE TABLE `tb_aset_lain` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`aset_lain_nama` Char( 255 ) NOT NULL,
	`aset_lain_nilaiperolehan` BigInt( 20 ) UNSIGNED NULL,
	PRIMARY KEY ( `id` ) )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- ---------------------------------------------------------


-- CREATE TABLE "tb_bank" ----------------------------------
CREATE TABLE `tb_bank` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`bank_nama` Char( 255 ) NOT NULL,
	`bank_nomor_rek` Char( 255 ) NOT NULL,
	`bank_jenis_rek` Char( 255 ) NOT NULL,
	`bank_pinjaman` Char( 1 ) NOT NULL DEFAULT 'n',
	PRIMARY KEY ( `id` ) )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 8;
-- ---------------------------------------------------------


-- CREATE TABLE "tb_pelanggan" -----------------------------
CREATE TABLE `tb_pelanggan` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`pelanggan_nama` Char( 255 ) NOT NULL,
	`pelanggan_alamat` Char( 255 ) NOT NULL,
	`pelanggan_telepon` Char( 20 ) NULL,
	`pelanggan_kontaklain` Char( 20 ) NULL,
	`pelanggan_email` Char( 255 ) NULL,
	PRIMARY KEY ( `id` ) )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 5;
-- ---------------------------------------------------------


-- CREATE TABLE "tb_pemasok" -------------------------------
CREATE TABLE `tb_pemasok` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`pemasok_nama` Char( 255 ) NOT NULL,
	`pemasok_alamat` Char( 255 ) NOT NULL,
	`pemasok_telepon` Char( 20 ) NULL,
	`pemasok_kontaklain` Char( 20 ) NULL,
	`pemasok_email` Char( 255 ) NULL,
	PRIMARY KEY ( `id` ) )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 2;
-- ---------------------------------------------------------


-- CREATE TABLE "trn_biaya_dimuka" -------------------------
CREATE TABLE `trn_biaya_dimuka` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`biaya_dimuka_jumlah` BigInt( 20 ) UNSIGNED NULL,
	`biaya_dimuka_jangkawaktu` Smallint( 5 ) UNSIGNED NULL,
	`biaya_dimuka_metode_bayar` Char( 20 ) NULL,
	`biaya_dimuka_tanggal` Date NULL,
	`biaya_dimuka_catatan` Text NULL,
	PRIMARY KEY ( `id` ) )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "trn_jasa_tunai" ---------------------------
CREATE TABLE `trn_jasa_tunai` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`jasa_tunai_deskripsi` Char( 255 ) NULL,
	`jasa_tunai_biaya` BigInt( 20 ) UNSIGNED NULL,
	`jasa_tunai_metode` Char( 30 ) NULL,
	`id_pelanggan` Smallint( 5 ) UNSIGNED NULL,
	`jasa_tunai_tanggal` Date NULL,
	`jasa_tunai_catatan` Text NULL,
	PRIMARY KEY ( `id` ) )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "trn_modal_barang" -------------------------
CREATE TABLE `trn_modal_barang` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`modal_barang_nama` Char( 255 ) NULL,
	`modal_barang_nilai_perolehan` BigInt( 20 ) UNSIGNED NULL,
	`modal_barang_masa_manfaat` Smallint( 5 ) UNSIGNED NULL,
	`modal_barang_tanggal` Date NULL,
	`modal_barang_catatan` Text NULL,
	PRIMARY KEY ( `id` ) )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "trn_modal_uang" ---------------------------
CREATE TABLE `trn_modal_uang` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`modal_uang_jumlah` BigInt( 20 ) UNSIGNED NULL,
	`modal_uang_metode_bayar` Char( 255 ) NULL,
	`modal_uang_tanggal` Date NULL,
	`modal_uang_catatan` Text NULL,
	PRIMARY KEY ( `id` ) )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "trn_pelunasan_biaya" ----------------------
CREATE TABLE `trn_pelunasan_biaya` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`pelunasan_biaya_jenis` Char( 255 ) NULL,
	`pelunasan_biaya_nilai` BigInt( 20 ) UNSIGNED NULL,
	`pelunasan_biaya_metode_bayar` Char( 20 ) NULL,
	`pelunasan_biaya_tanggal` Date NULL,
	`pelunasan_biaya_catatan` Text NULL,
	PRIMARY KEY ( `id` ) )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "trn_pelunasan_pembelian_kredit" -----------
CREATE TABLE `trn_pelunasan_pembelian_kredit` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`pelunasan_pembelian_kredit_jumlah` BigInt( 20 ) UNSIGNED NULL,
	`pelunasan_pembelian_kredit_metode_bayar` Char( 20 ) NULL,
	`id_pemasok` Smallint( 5 ) UNSIGNED NULL,
	`pelunasan_pembelian_kredit_tanggal` Date NULL,
	`pelunasan_pembelian_kredit_catatan` Text NULL,
	PRIMARY KEY ( `id` ) )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "trn_pelunasan_utang_bank" -----------------
CREATE TABLE `trn_pelunasan_utang_bank` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`pelunasan_utang_bank_jumlah_pokok` BigInt( 20 ) UNSIGNED NULL,
	`pelunasan_utang_bank_jumlah_bunga` BigInt( 20 ) UNSIGNED NULL,
	`pelunasan_utang_bank_metode_bayar` Char( 20 ) NULL,
	`id_bank` Smallint( 5 ) UNSIGNED NULL,
	`pelunasan_utang_bank_tanggal` Date NULL,
	`pelunasan_utang_bank_catatan` Text NULL,
	PRIMARY KEY ( `id` ) )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "trn_pelunasan_utang_nonbank" --------------
CREATE TABLE `trn_pelunasan_utang_nonbank` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`pelunasan_utang_nonbank_jumlah` BigInt( 20 ) UNSIGNED NULL,
	`pelunasan_utang_nonbank_metode_bayar` Char( 20 ) NULL,
	`pelunasan_utang_nonbank_tanggal` Date NULL,
	`pelunasan_utang_nonbank_catatan` Text NULL,
	PRIMARY KEY ( `id` ) )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "trn_pembayaran_aset" ----------------------
CREATE TABLE `trn_pembayaran_aset` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`pembayaran_aset_nama` Char( 255 ) NULL,
	`pembayaran_aset_harga` BigInt( 20 ) UNSIGNED NULL,
	`pembayaran_aset_jumlah` Smallint( 5 ) UNSIGNED NULL,
	`pembayaran_aset_total` BigInt( 20 ) UNSIGNED NULL,
	`id_pemasok` Smallint( 5 ) UNSIGNED NULL,
	`pembayaran_aset_tanggal` Date NULL,
	`pembayaran_aset_catatan` Text NULL,
	PRIMARY KEY ( `id` ) )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "trn_pembayaran_piutang" -------------------
CREATE TABLE `trn_pembayaran_piutang` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`pembayaran_piutang_jumlah` BigInt( 20 ) UNSIGNED NULL,
	`pembayaran_piutang_metode` Char( 30 ) NULL,
	`id_pelanggan` Smallint( 5 ) UNSIGNED NULL,
	`pembayaran_piutang_tanggal` Date NULL,
	`pembayaran_piutang_catatan` Text NULL,
	PRIMARY KEY ( `id` ) )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "trn_pembelian_aset" -----------------------
CREATE TABLE `trn_pembelian_aset` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`pembelian_aset_namaaset` Char( 255 ) NULL,
	`pembelian_aset_nilaiperolehan` BigInt( 20 ) UNSIGNED NULL,
	`pembelian_aset_masamanfaat` Smallint( 5 ) UNSIGNED NULL,
	`pembelian_aset_metode_bayar` Char( 20 ) NULL,
	`pembelian_aset_jumlah` Smallint( 5 ) UNSIGNED NULL,
	`pembelian_aset_totalharga` BigInt( 20 ) UNSIGNED NULL,
	`idpemasok` Smallint( 5 ) UNSIGNED NULL,
	`pembelian_aset_istetap` Char( 1 ) NULL DEFAULT 'y',
	`pembelian_aset_istunai` Char( 1 ) NULL DEFAULT 'y',
	`pembelian_aset_isdownpayment` Char( 1 ) NULL DEFAULT 'n',
	`pembelian_aset_tanggal` Date NULL,
	`pembelian_aset_catatan` Text NULL,
	PRIMARY KEY ( `id` ) )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "trn_penarikan_bank" -----------------------
CREATE TABLE `trn_penarikan_bank` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`penarikan_bank_jumlah` BigInt( 20 ) UNSIGNED NULL,
	`penarikan_bank_asalbank` Char( 255 ) NULL,
	`penarikan_bank_tanggal` Date NULL,
	`penarikan_bank_catatan` Text NULL,
	`penarikan_bank_flag` Char( 255 ) NULL,
	PRIMARY KEY ( `id` ) )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "trn_pendapatan_dimuka" --------------------
CREATE TABLE `trn_pendapatan_dimuka` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`pendapatan_dimuka_jumlah` BigInt( 20 ) UNSIGNED NULL,
	`pendapatan_dimuka_jangka_waktu` Smallint( 5 ) UNSIGNED NULL,
	`pendapatan_dimuka_tanggal` Date NULL,
	`pendapatan_dimuka_catatan` Text NULL,
	PRIMARY KEY ( `id` ) )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "trn_penghapusan_piutang" ------------------
CREATE TABLE `trn_penghapusan_piutang` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`penghapusan_piutang_jumlah` BigInt( 20 ) UNSIGNED NULL,
	`id_pelanggan` Smallint( 5 ) UNSIGNED NULL,
	`penghapusan_piutang_tanggal` Date NULL,
	`penghapusan_piutang_catatan` Text NULL,
	PRIMARY KEY ( `id` ) )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "trn_utang" --------------------------------
CREATE TABLE `trn_utang` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`utang_jumlahpokok` BigInt( 20 ) UNSIGNED NULL,
	`utang_bunga` Double( 8, 2 ) UNSIGNED NULL,
	`utang_jenis_bunga` Char( 255 ) NULL,
	`utang_jangka_waktu` Smallint( 5 ) UNSIGNED NULL,
	`id_bank` Smallint( 5 ) UNSIGNED NULL,
	`utang_metode_bayar` Char( 255 ) NULL,
	`utang_tanggal` Date NULL,
	`utang_bank` Char( 1 ) NULL DEFAULT 'y',
	`utang_catatan` Text NULL,
	PRIMARY KEY ( `id` ) )
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE INDEX "cfg_password_resets_email_index" ----------
CREATE INDEX `cfg_password_resets_email_index` USING BTREE ON `cfg_password_resets`( `email` );
-- ---------------------------------------------------------


-- CREATE INDEX "cfg_password_resets_token_index" ----------
CREATE INDEX `cfg_password_resets_token_index` USING BTREE ON `cfg_password_resets`( `token` );
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


