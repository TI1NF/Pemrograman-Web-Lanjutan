<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TransaksiParkir */

$this->title = 'Update Transaksi Parkir: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Parkirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transaksi-parkir-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
