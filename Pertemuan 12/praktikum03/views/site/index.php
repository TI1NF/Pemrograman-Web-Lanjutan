<?php
use hscstudio\chart\ChartNew;
/* @var $this yii\web\View */

$this->title = 'Praktikum 03 PWL';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Praktikum 03</h1>

        <p class="lead">Pemrograman Web Lanjutan</p>

        <i>Happy Coding :D</i>
    </div>

    <div class="body-content text-center">
      <?= ChartNew::widget([
        'type'=>'bar',
        'title'=>'PHP Framework',
        'labels'=>['Yii','Laravel','CI','Symfony'],
        'datasets'=>[
          ['title'=>'2014','data'=>[35,45,15,5]],
          ['title'=>'2015','data'=>[45,35,5,15]],
        ]
      ]) ?>
    </div>
</div>
