# MVC 2

# 1. Views
- Buka folder mybasic
- Ubah file mybasic/views/site/hello.php dan ketik codenya pada baris 3 - 25
- Ubah file mybasic/views/site/komentar.php dan ketik codenya pada baris 8 - 13
- Buat file mybasic/views/site/hasil-komentar.php dan ketik codenya

# 2. Models
- Buka folder mybasic
- Buat file mybasic/models/Employee.php dan ketik codenya

# 3. Controllers
- Buka folder mybasic
- Ubah file mybasic/controllers/SiteController.php dan ketik codenya baris 129 - 187

# 4. Database
- Buka folder mybasic
- Ubah mybasic/config/db.php dan ketik codenya pada baris 5
- Buka browser dan ketik URL http://localhost/phpmyadmin
- Buat database dengan nama ti1basic
- Buka database ti1basic dan klik bagian Import
- Klik tombol Browse... dan pilih file ti1basic.sql
- Tekan Kirim

# 5. Test URL
- Buka browser
- Ketik URL berikut :
    - http://localhost/web-lanjut-sttnf-20182-ti1/mybasic/web/site/tampil
    - http://localhost/web-lanjut-sttnf-20182-ti1/mybasic/web/site/komentar
    - http://localhost/web-lanjut-sttnf-20182-ti1/mybasic/web/site/query
    - http://localhost/web-lanjut-sttnf-20182-ti1/mybasic/web/site/active-record
- Jika muncul tampilan maka berhasil
- Pada URL komentar jika berhasil input maka berhasil

# 6. Upload Gitlab
- Buka terminal
- cd /opt/lampp/htdocs/web-lanjut-sttnf-20182-ti1/mybasic/ atau cd /var/www/html/web-lanjut-sttnf-20182-ti1/mybasic/
- git checkout -b 0110217029_azhar
- git add .
- git commit -m "Belajar MVC Yii dan database"
- git push -u origin 0110217029_azhar