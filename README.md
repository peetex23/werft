# werft
## Instalasi Aplikasi
1. git clone atau download file zip.
2. Install composer (http://getcomposer.org).
3. Buka CMD, arahkan ke direktori project
4. Ketik composer install
5. Install npm (https://www.npmjs.com/package/npm)
6. Ketik npm install


## Instalasi Database
1. jalankan server MySQL (buka XAMPP, klik start pada service MySQL dan Apache)
2. buka browser, ketik alamat http://localhost/phpmyadmin
3. buat database baru (klik new database pada dashboard) dengan nama db_werft
4. aktifkan database db_werft dengan mengeklik pada nama database pada menu tree-view disebelah kiri
5. pilih menu tab "import", pada tombol browse arahkan ke file db_werft_*tanggal*_*waktu*.sql pada folder utama aplikasi
6. pilih tombol open
7. pilih tombol go

## Menghubungkan Aplikasi dan Database
1. pada folder utama aplikasi, buka folder config, kemudian rename file _database.php menjadi database.php (dihilangkan karakter underscore-nya)
2. jalankan aplikasi dengan membuka browser dan memasukkan alamat http://localhost/werft
