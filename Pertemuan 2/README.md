# MVC 1

# 1. Clone Project mybasic dari Gitlab

- Buka terminal
- cd /opt/lampp/htdocs/ atau cd /var/www/html/
- mkdir web-lanjut-sttnf-20182-ti1
- cd web-lanjut-sttnf-20182-ti1
- git clone -b master https://gitlab.com/web-lanjut-sttnf-20182-ti1/mybasic.git
- Jika muncul folder mybasic dan didalamnya terdapat file README.md dan folder .git maka berhasil

# 2. Copy File basic ke mybasic

- Buka folder basic yang ada di /opt/lampp/htdocs/basic atau /var/www/html/basic pada Pertemuan 1
- Copy semua isinya kecuali folder .git dan file README.md
- Jika tidak ada error maka berhasil

# 3. Test Project

- Buka browser
- Ketik URL http://localhost/web-lanjut-sttnf-20182-ti1/mybasic/web/site
- Jika muncul Landing Page yii yang isinya Congratulations! maka berhasil

# 4. Views
- Buka folder mybasic
- Buat file mybasic/views/site/hello.php dan ketik codenya
- Buat file mybasic/views/site/komentar.php dan ketik codenya

# 5. Models
- Buka folder mybasic
- Buat file mybasic/models/Komentar.php dan ketik codenya

# 6. Controllers
- Buka folder mybasic
- Ubah file mybasic/controllers/SiteController.php dan ketik codenya baris 129 - 146

# 7. Test URL
- Buka browser
- Ketik URL berikut :
    - http://localhost/web-lanjut-sttnf-20182-ti1/mybasic/web/site/hello
    - http://localhost/web-lanjut-sttnf-20182-ti1/mybasic/web/site/tampil
    - http://localhost/web-lanjut-sttnf-20182-ti1/mybasic/web/site/komentar
- Jika muncul tampilan maka berhasil