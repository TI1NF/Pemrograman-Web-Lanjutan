<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>

<h1>Form Komentar</h1>

<?php $form = ActiveForm::begin(['layout'=>'horizontal']); ?>

<?= $form->field($model, 'nama')->label('Nama Anda') ?>
<?= $form->field($model, 'pesan')->label('Pesan Anda') ?>
<?= Html::submitButton('Simpan', ['class'=>'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>