# Clone praktikum02

- Buka Terminal
- cd /var/www/html/web-lanjut-sttnf-20182-ti1/ atau cd /opt/lampp/htdocs/web-lanjut-sttnf-20182-ti1/
- git clone -b master https://gitlab.com/web-lanjut-sttnf-20182-ti1/praktikum02.git
- sudo chmod 777 -R praktikum02
- cd praktikum02
- git checkout -b 0110217029_azhar
- Copy folder vendor dari project mybasic ke praktikum02

# Menghilangkan /web

- http://localhost/web-lanjut-sttnf-20182-ti1/praktikum02/web/
- Rename htaccess.txt menjadi .htaccess
- Jika belum ada maka buat file .htaccess seperti praktikum02/.htaccess dan masukkan kode berikut
```
# prevent directory listings
Options -Indexes
IndexIgnore */*
 
# follow symbolic links
Options FollowSymlinks
RewriteEngine on
RewriteRule ^(.+)?$ web/$1
```
- Buka config/web.php
    - Tambahkan baris 15 code 'homeUrl' => '/web-lanjut-sttnf-20182-ti1/praktikum02',
    - Tambahkan baris 20 code 'baseUrl' => '/web-lanjut-sttnf-20182-ti1/praktikum02',
- http://localhost/web-lanjut-sttnf-20182-ti1/praktikum02/

# Mode Production

- Edit web/index.php
- Pada baris 4 dan 5 diberikan komentar
- Maka akan merubah dari mode development menjadi production (tidak muncul gii, error reporting, dll)

# Membuat Database

- Import dbgii_ti1.sql ke dalam database
- Buka dbgii_ti1
- Pilih Privilege atau Hak Akses
- Pilih Add user account
- Field 1 (Nama Pengguna) isikan ti1
- Field 2 (Nama Pemilih) pilih Lokal
- Field 3 (Kata Sandi) isikan ti1 dan Ketik Ulang ti1
- Kemudian Kirim

# Setting Database

- Edit config/db.php
- Baris 5 ganti dbname=yii2basic menjadi dbname=dbgii_ti1
- Baris 6 'username' => 'root', menjadi 'username' => 'ti1',
- Baris 7 'password' => '', menjadi 'password' => 'ti1',
- Kemudian Save

# Menggunakan Gii Model Generator

- http://localhost/web-lanjut-sttnf-20182-ti1/praktikum02/gii/model
- Field Table Name isikan category
- Field Model Class Name isikan Category
- Scroll ke bawah dan Pilih Preview
- Scroll lagi ke bawah dan Pilih Generate

# Menggunakan CRUD Generator

- http://localhost/web-lanjut-sttnf-20182-ti1/praktikum02/gii/crud
- Field Model Class isikan app\models\Category
- Field Search Model Class isikan app\models\CategorySearch
- Field Controller Class app\controllers\CategoryController
- Scroll ke bawah dan Pilih Preview
- Scroll lagi ke bawah dan Pilih Generate

# CRUD Category

- http://localhost/web-lanjut-sttnf-20182-ti1/praktikum02/category
- Edit views/category/index.php ubah baris 28 - 34 seperti file disini
- Edit views/category/_form.php hapus baris 19 - 25 seperti file disini
- Edit models/Category.php ubah baris 6 - 7 dan 58 - 64 seperti file disini

# Test Login

- Pilih menu Login pada navigasi bar
- Masukkan Username dengan admin
- Masukkan Password dengan admin
- http://localhost/web-lanjut-sttnf-20182-ti1/praktikum02/category
- Pilih menu Create Category
- Field Title isikan Contoh 1
- Field Description isikan Contoh Category 1
- Kemudian Logout
- Login sebagai Username demo dan Password demo
- http://localhost/web-lanjut-sttnf-20182-ti1/praktikum02/category
- Pilih 1 data dan tekan gambar Pencil untuk edit
- Ubah Title menjadi Contoh 12
- Ubah Description menjadi Contoh Category 12

# Membuat Controller Ajax

- Buat controller/AjaxController.php seperti file disini
- Buat views/ajax/book.php seperti file disini
- http://localhost/web-lanjut-sttnf-20182-ti1/praktikum02/ajax/book