<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Gedung */

$this->title = 'Create Gedung';
$this->params['breadcrumbs'][] = ['label' => 'Gedungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gedung-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
