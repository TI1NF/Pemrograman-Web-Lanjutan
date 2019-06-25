<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TransaksiParkir */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-parkir-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kendaraan_idKendaraan')->textInput() ?>

    <?= $form->field($model, 'area_parkir_id')->textInput() ?>

    <?= $form->field($model, 'masuk')->textInput() ?>

    <?= $form->field($model, 'keluar')->textInput() ?>

    <?= $form->field($model, 'biaya')->textInput() ?>

    <?= $form->field($model, 'petugas_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
