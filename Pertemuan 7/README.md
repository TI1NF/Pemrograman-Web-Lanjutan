# Create Table province dan city

- Masukkan query dibawah ini ke dalam database dbgii_ti1
```
CREATE TABLE province (
id int primary key auto_increment,
name varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE city (
id int primary key auto_increment,
province_id int,
name varchar(255) NOT NULL,
type enum('kabupaten','kota'),
postal_code varchar(10),
foreign key city(province_id) references province(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```

# Insert Data

- Isi data table province misalkan seperti berikut :
```
INSERT INTO province (name) VALUES 
('DKI Jakarta'),
('Jawa Barat'),
('Jawa Tengah'),
('Jawa Timur');
```
- Isi data table city misalkan seperti berikut :
```
INSERT INTO city (province_id,name,type) VALUES 
(1,'Jakarta Utara','kota'),
(1,'Jakarta Barat','kota'),
(1,'Jakarta Selatan','kota'),
(1,'Jakarta Timur','kota'),
(2,'Depok','kota'),
(2,'Kabupaten Bogor','kabupaten'),
(3,'Kabupaten Banjarnegara','kabupaten'),
(3,'Kabupaten Banyumas','kabupaten'),
(4,'Kota Kediri','kota'),
(4,'Kota Madiun','kota');
```

# Modified controllers/AjaxController.php

- Buka file .../controllers/AjaxController.php
- Masukkan kode berikut di paling bawah dan terdapat di dalam class
- Perubahannya pada baris 52 - 89
```
public function actionDepdrop()
{
    $model = new \yii\base\DynamicModel([
        'province_id',
        'city_id',
    ]);

    $model->addRule(['province_id'], 'integer');
    $model->addRule(['city_id'], 'integer');

    return $this->render('depdrop',[
        'model' => $model,
        'provinces' => $this->getProvinces(),
    ]);        
}

public function actionGetCities($province_id)
{
    $cities = (new \yii\db\Query())
        ->select('*')
        ->from('city')
        ->where(['province_id' => $province_id])
        ->all(\yii::$app->db);
        
    \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

    return [
        'cities' => $cities,
    ];
}
```

# Create views/ajax/depdrop.php

- Create file .../views/ajax/depdrop.php
- Masukkan kode berikut
```
<?php

use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

$form = ActiveForm::begin();
$data = ArrayHelper::map($provinces,'id','name');

echo $form->field($model,'province_id')->dropDownList($data,['prompt' => '-- Choose a Province --']);
echo $form->field($model,'city_id')->dropDownList($data,['prompt' => '-- Choose a City --']);

ActiveForm::end();

$this->registerJs('

    $("#dynamicmodel-city_id").attr("disabled",true);
    $("#dynamicmodel-province_id").change(function() {
        $.get("'.Url::to(['get-cities','province_id'=>'']).'" + $(this).val(), function(data) {
            select = $("#dynamicmodel-city_id")
            select.empty();
            var options = "<option value=\'\'>-Choose a city-</option>";
            $.each(data.cities, function(key, value) {
                options += "<option value=\'"+value.id+"\'>"+ value.name +"</option>";
            });
            select.append(options);
            $("#dynamicmodel-city_id").attr("disabled",false);
        });
    });

');
```

# Test Dropdown

- Buka URL http://localhost/web-lanjut-sttnf-20182-ti1/praktikum02/ajax/depdrop
- Terdapat field Province dan field City namun disabled
- Untuk mengisi field City diharuskan select field Province terlebih dahulu
- Dalam field City memiliki isi yang berbeda-beda tergantung field Province yang dipilih
- Jika field Province dipilih maka field City akan otomatis menjadi enabled dan ada isinya
- Jika bisa maka dropdown dalam dropdown berhasil
- Jika belum bisa maka perbaiki yang error

# Modified views/category/index.php

- Buka file .../views/category/index.php
- Pada baris 15 masukkan kode seperti berikut :
```
<?php \yii\widgets\Pjax::begin(['id' => 'pjax-gridview']); ?>
```
- Pada baris 36 ubah kode seperti berikut :
```
[
    'class' => 'yii\grid\ActionColumn',
    'buttons' => [
        'view' => function($url, $model){
            $icon = '<span class="glyphicon glyphicon-eye-open"></span>';
            return Html::a($icon, $url);
        },
        'update' => function($url, $model){
            $icon = '<span class="glyphicon glyphicon-pencil"></span>';
            return Html::a($icon, $url);
        },
        'delete' => function($url, $model){
            $icon = '<span class="glyphicon glyphicon-trash"></span>';
            return Html::a($icon, $url, [
                // 'data-confirm' => 'Are you sure want to delete this item ?',
                // 'data-method' => 'post',
                'class' => 'pjaxDelete',
            ]);
        },
    ],
],
```
- Pada baris 62 masukkan kode seperti berikut :
```
<?php \yii\widgets\Pjax::end(); ?>
```
- Pada baris 41 masukkan kode seperti berikut :
```
<?php
$this->registerJs('
    /* fungsi ini akan dijalankan ketika class pjaxDelete di klik */
    $(".pjaxDelete").on("click", function (e) {
        /* cegah link menjalankan default action */
        e.preventDefault();
        if(confirm("Are you sure you want to delete this item?")){
            /* request actionDelete dengan method post */
            $.post($(this).attr("href"), function(data) {
                /* reload gridview */
                $.pjax.reload("#pjax-gridview",{"timeout":false});
            });
        }
    });
');
```

# Modified controllers/CategoryController.php

- Buka file .../controllers/CategoryController.php
- Pada method actionView() ubah kode seperti berikut :
```
public function actionView($id)
{
    if(Yii::$app->request->isAjax){
        return $this->renderAjax('view', [
            'model' => $this->findModel($id),
        ]);
    }else{
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
}
```
- Pada method actionCreate() ubah kode seperti berikut :
```
public function actionCreate()
{
    $model = new Category();

    if ($model->load(Yii::$app->request->post()) && $model->save()) {
        return $this->redirect(['view', 'id' => $model->id]);
    }

    if(Yii::$app->request->isAjax){
        return $this->renderAjax('view', [
            'model' => $this->findModel($id),
        ]);
    }else{
        return $this->render('create', [
            'model' => $model,
        ]);
    }
}
```
- Pada method actionUpdate() ubah kode seperti berikut :
```
public function actionUpdate($id)
{
    $model = $this->findModel($id);

    if ($model->load(Yii::$app->request->post()) && $model->save()) {
        return $this->redirect(['view', 'id' => $model->id]);
    }

    if(Yii::$app->request->isAjax){
        return $this->renderAjax('update', [
            'model' => $this->findModel($id),
        ]);
    }else{
        return $this->render('update', [
            'model' => $model,
        ]);
    }
}
```
- Pada method actionDelete() ubah kode seperti berikut :
```
public function actionDelete($id)
{
    $this->findModel($id)->delete();

    // return $this->redirect(['index']);
}
```

# Test Pjax

- Buka URL http://localhost/web-lanjut-sttnf-20182-ti1/praktikum02/category
- Coba klik button Create Category dan inputkan data
- Setelah data berhasil dibuat coba tekan 3 icon berikut :
    - Mata untuk melihat datanya
    - Pencil untuk mengubah datanya
    - Tempat Sampah untuk menghapus datanya
- Jika masing-masing sudah ditekan dan browser tidak reload maka Pjax berhasil
- Jika belum bisa maka perbaiki yang error