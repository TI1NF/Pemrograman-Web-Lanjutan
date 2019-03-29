<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AreaParkir */

$this->title = 'Create Area Parkir';
$this->params['breadcrumbs'][] = ['label' => 'Area Parkirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="area-parkir-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
