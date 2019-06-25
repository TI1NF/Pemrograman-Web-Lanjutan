<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TransaksiParkirSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Transaksi Parkirs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-parkir-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Transaksi Parkir', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kendaraan_idKendaraan',
            'area_parkir_id',
            'masuk',
            'keluar',
            //'biaya',
            //'petugas_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
