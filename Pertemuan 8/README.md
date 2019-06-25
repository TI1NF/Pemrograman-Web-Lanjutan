# Create layouts/login.php

- Buat file baru di praktikum02/views/layouts/login.php
- Masukkan code berikut :
```
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">    
    <div class="container">
        <?= $content ?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
```

# Create TestController.php

- Buat file baru di praktikum02/controllers/login.php
- Masukkan code berikut :
```
<?php
namespace app\controller;

use Yii;
use yii\web\Controller;

class TestController extends Controller
{
    public $layout = 'login';

    public function actionLogin()
    {
        return $this->render('form-login');
    }
}
```

# Create test/form-login.php

- Buat file baru di praktikum02/views/test/form-login.php

# Edit test/form-login.php

- Buka URL https://getbootstrap.com/docs/3.3
- Klik Menu Components
- Klik Panels
- Masukkan code berikut pada form-login.php
```
<div class="panel panel-primary">
    
</div>
```
- Klik Panel with heading
- Masukkan code berikut pada form-login.php
```
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Form Login</h3>
    </div>
    <div class="panel-body">
        Panel content
    </div>
</div>
```
- Klik Menu CSS
- Klik Horizontal form
- Masukkan code berikut pada form-login.php
```
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Form Login</h3>
    </div>
    <div class="panel-body">
    <form class="form-horizontal">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                <input type="checkbox"> Remember me
                </label>
            </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Sign in</button>
            </div>
        </div>
        </form>
    </div>
</div>
```

# Edit TestController.php

- Tambahkan kode berikut pada praktikum02/controllers/TestController.php
```
<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;

class TestController extends Controller
{
    public $layout = 'login';

    public function actionLogin()
    {
        return $this->render('form-login');
    }

    public function actionBlog()
    {
        $this->layout = 'blog';
        return $this->render('blog');
    }
}
```

# Create layouts/blog.php

- Buat file baru di praktikum02/views/layouts/blog.php
- Masukkan code berikut yang didapat dari layouts/login.php :
```
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">    
    <div class="container">
        <?= $content ?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
```

# Edit layouts/blog.php

- Edit kode berikut :
```
<div class="wrap">    
    <div class="container">
        <?= $content ?>
    </div>
</div>
```
- Menjadi seperti berikut :
```
<div class="wrap">    
    <div class="container">
        <div class="col-md-3">
            <h4>Menu</h4>
            
        </div>
        <div class="col-md-9">
            <?= $content ?>
        </div>
    </div>
</div>
```
- Buka URL https://getbootstrap.com/docs/3.3
- Klik Menu Components
- Cari Pills
- Kode seperti berikut :
```
<ul class="nav nav-pills nav-stacked">
    <li role="presentation" class="active"><a href="#">Home</a></li>
    <li role="presentation"><a href="#">Profile</a></li>
    <li role="presentation"><a href="#">Messages</a></li>
</ul>
```
- Kemudian masukkan ke kode layouts/blog.php seperti berikut :
```
<div class="wrap">    
    <div class="container">
        <div class="col-md-3">
            <h4>Menu</h4>
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation" class="active"><a href="#">Home</a></li>
                <li role="presentation"><a href="#">Profile</a></li>
                <li role="presentation"><a href="#">Messages</a></li>
            </ul>       
        </div>
        <div class="col-md-9">
            <?= $content ?>
        </div>
    </div>
</div>
```

# Create test/blog.php

- Buat file baru di praktikum02/views/test/blog.php
- Klik Menu Component
- Cari Media heading seperti berikut dan tambahkan ke test/blog.php :
```
<div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="..." alt="...">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Media heading</h4>
    ...
  </div>
</div>
```

# Edit test/blog.php

- Cari gambar yang akan ditampilkan kemudian copy url gambar tersebut
- Kemudian paste pada code berikut :
```
<img class="media-object" src="..." alt="...">
```
- Berikut contoh gambar yang diambil :
```
<img class="media-object" src="https://akcdn.detik.net.id/community/media/visual/2019/05/07/bfd4c77c-ac9f-4eff-9f22-0996986df536.jpeg?w=100&q=100" alt="image" width="100" height="100">
```
- Ubah judul pada code berikut :
```
<h4 class="media-heading">Media heading</h4>
```
- Berikut contoh judul yang diubah :
```
<h4 class="media-heading">Nasi Udang Rempah</h4>
```
- Tambahkan deskripsi dengan mengubah kode berikut :
```
...
```
- Berikut contoh deskripsi :
```
<p>
    Jakarta - Rasanya pedas gurih dengan paduan udang segar. 
    Menu sahur ini sangat praktis dan dijamin bikin kenyang 
    dan puas karena gurih enaknya.
    <br>
    Bahan:
    • 500 g beras pulen, cuci, tiriskan
    • 50 g wortel, potong dadu kecil
    • 10 ekor udang ukuran sedang, kupas, potong-potong
    • 2 sdm bumbu nasi goreng siap pakai
    • 1 cm jahei, iris halus
    • 2 lembar daun jeruk
    • 1 sdt garam
    • 500 ml kaldu

    Pelengkap:
    • Udang goreng
    • Daun selada

    Cara membuat:

    • Taruh beras yang sudah dicuci dalam mangkuk Rice Cooker Philips.
    • Tambahkan udang, wortel, bumbu nasi goreng dan bahan lainnya. Aduk rata.
    • Masak nasi dengan menekan tombol Rice hingga rice cooker berbunyi 'beep' tanda proses memasak dimulai.
    • Sebelum waktu masak habis, aduk-aduk nasi agar bumbunya tercampur rapat. Tunggu hingga nasi masak dan otomatis berpindah ke program Keep Warm.
    • Sajikan hangat dengan Pelengkapnya.

    Untuk 4 orang
</p>    
```
- Sehingga secara keseluruhan test/blog.php akan menjadi berikut :
```
<div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="https://akcdn.detik.net.id/community/media/visual/2019/05/07/bfd4c77c-ac9f-4eff-9f22-0996986df536.jpeg?w=100&q=100" alt="image" width="100" height="100">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Nasi Udang Rempah</h4>
        <p>
            Jakarta - Rasanya pedas gurih dengan paduan udang segar. 
            Menu sahur ini sangat praktis dan dijamin bikin kenyang 
            dan puas karena gurih enaknya.
            <br>
            Bahan:
            • 500 g beras pulen, cuci, tiriskan
            • 50 g wortel, potong dadu kecil
            • 10 ekor udang ukuran sedang, kupas, potong-potong
            • 2 sdm bumbu nasi goreng siap pakai
            • 1 cm jahei, iris halus
            • 2 lembar daun jeruk
            • 1 sdt garam
            • 500 ml kaldu

            Pelengkap:
            • Udang goreng
            • Daun selada

            Cara membuat:

            • Taruh beras yang sudah dicuci dalam mangkuk Rice Cooker Philips.
            • Tambahkan udang, wortel, bumbu nasi goreng dan bahan lainnya. Aduk rata.
            • Masak nasi dengan menekan tombol Rice hingga rice cooker berbunyi 'beep' tanda proses memasak dimulai.
            • Sebelum waktu masak habis, aduk-aduk nasi agar bumbunya tercampur rapat. Tunggu hingga nasi masak dan otomatis berpindah ke program Keep Warm.
            • Sajikan hangat dengan Pelengkapnya.

            Untuk 4 orang
        </p>    
  </div>
</div>
```
- Jika ingin menambah postingan maka lakukan langkah Edit test/blog.php dari awal
- Berikut contoh 2 postingan :
```
<div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="https://akcdn.detik.net.id/community/media/visual/2019/05/07/bfd4c77c-ac9f-4eff-9f22-0996986df536.jpeg?w=100&q=100" alt="image" width="100" height="100">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Nasi Udang Rempah</h4>
        <p>
            Jakarta - Rasanya pedas gurih dengan paduan udang segar. 
            Menu sahur ini sangat praktis dan dijamin bikin kenyang 
            dan puas karena gurih enaknya.
            <br>
            Bahan:
            • 500 g beras pulen, cuci, tiriskan
            • 50 g wortel, potong dadu kecil
            • 10 ekor udang ukuran sedang, kupas, potong-potong
            • 2 sdm bumbu nasi goreng siap pakai
            • 1 cm jahei, iris halus
            • 2 lembar daun jeruk
            • 1 sdt garam
            • 500 ml kaldu

            Pelengkap:
            • Udang goreng
            • Daun selada

            Cara membuat:

            • Taruh beras yang sudah dicuci dalam mangkuk Rice Cooker Philips.
            • Tambahkan udang, wortel, bumbu nasi goreng dan bahan lainnya. Aduk rata.
            • Masak nasi dengan menekan tombol Rice hingga rice cooker berbunyi 'beep' tanda proses memasak dimulai.
            • Sebelum waktu masak habis, aduk-aduk nasi agar bumbunya tercampur rapat. Tunggu hingga nasi masak dan otomatis berpindah ke program Keep Warm.
            • Sajikan hangat dengan Pelengkapnya.

            Untuk 4 orang
        </p>    
  </div>
</div>

<div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="https://akcdn.detik.net.id/community/media/visual/2019/05/05/22865f08-9333-487b-bca8-0522146b3f3d.jpeg?w=100&q=100" alt="image" width="100" height="100">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Nasi Gurih Ikan Asin</h4>
        <p>
        Jakarta - Pencinta nasi bisa sahur puas dengan nasi gurih dengan topping ikan asin tumis. Rasa nasi yang gurih pulen bakal pengin nambah lagi.
        <br>
        Bahan:
        500 g beras pulen, cuci, tiriskan
        500 ml santan encer
        1 lembar daun salam
        1 batang serai, memarkan
        1/2 sdt garam
        Tumisan Ikan Asin:
        150 g ikan asin jambal roti, potong kecil
        2 sdm minyak sayur
        5 butir bawang merah, iris tipis
        3 siung bawang putih, iris tipis
        5 buah cabe rawit merah, iris halus
        1 batang daun bawang, iris kasar
        1/2 sdt merica bubuk

        Cara membuat:

        • Taruh beras dalam panci Rice Cooker Philips.
        • Tuangi santan, beri daun salam, serai dan garam.
        • Pilih program memasak Rice, dan tekan tombol Start sampai terdengar suara "beep" yang berarti program memasak telah dimulai
        • Jika sudah selesai program memasak lampu otomatis berpidah ke program keep Warm.
        • Buka rice cooker, aduk sebentar. Biarkan dalam rice cooker dengan posisi Keep Warm.
        • Tumisan Ikan Asin:
        • Goreng potongan ikan asin hingga harum, angkat dan tiriskan.
        • Panaskan minyak, tumis bawang merah dan bawang puting hingga harum.
        • Masukkan bahan lainnya, aduk rata lalu angkat.
        • Sajikan nasi gurih dengan topping ikan asin tumis.

        Untuk 6 orang
        </p>    
  </div>
</div>
```