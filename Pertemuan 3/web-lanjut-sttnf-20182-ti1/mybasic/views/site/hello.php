<h1>Hallo Teman-teman TI01</h1>

<?php

use yii\helpers\Url;
use yii\helpers\Html;

echo Url::home();
echo '<br>';
echo Url::to();
echo '<br>';
echo Url::to(['create']);
echo '<br>';
echo Url::to(['person/index']);
echo "<br>";
echo Url::to(['person/index','nama'=>'Fikri']);
echo "<br>";
echo Html::a('Website STT NF','http://nurulfikri.ac.id');
echo '<br>';
echo Html::a('Home',['index']);
echo '<br>'

?>

<a href="<?= Url::to(['person/index','nama'=>'fikri']) ?>">Data Person</a>
