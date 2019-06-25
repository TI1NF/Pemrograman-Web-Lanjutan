<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GedungSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gedungs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gedung-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Gedung', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kode',
            'nama',
            'alamat',
            'latitude',
            //'longitude',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
