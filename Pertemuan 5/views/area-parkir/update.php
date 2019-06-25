<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AreaParkir */

$this->title = 'Update Area Parkir: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Area Parkirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="area-parkir-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
