# Membuat ERD Parkir

- Buka parkir.mwb
- Pilih menu Database
- Pilih Forward Engineer...
- Atur koneksi dan Next sampai Forward Engineer Finished Successfully
- Kemudian Close

# Menggunakan Gii pada setiap Table

- Jika menggunakan linux maka ubah Permission menjadi 777 yaitu :
    - Buka Terminal
    - sudo chmod 777 -R /path/web-lanjut-sttnf-20182-ti1/mybasic
- Buka browser
- Ketik URL http://localhost/web-lanjut-sttnf-20182-ti1/mybasic/web/gii
- Pilih Model Generator dan klik Start
    - Pilih table yang tidak ada foreign key terlebih dahulu, contoh : gedung -> area_parkir
    - Pada field Table Name masukkan nama table yang sudah dibuat sebelumnya maka otomatis akan ada jika diketik, contoh : gedung
    - Pada field Model Class Name akan otomatis terbuat setelah mengisi field Table Name, contoh : Gedung
    - Scroll sampai bawah dan klik Preview
    - Scroll lagi ke bawah dan klik Generate
- Pilih CRUD Generator yang ada di sidebar kiri
    - Field Model Class untuk memilih model yang akan dibuat CRUD, contoh : app\models\Gedung
    - Field Search Model Class untuk fitur search pada table gedung, contoh : app\models\GedungSearch
    - Field Controller Class untuk membuat URL yang akan digunakan untuk CRUD, contoh : app\controllers\GedungController
    - Scroll sampai bawah dan klik Preview
    - Scroll lagi ke bawah dan klik Generate
- Kemudian lakukan untuk setiap table
- Selesai