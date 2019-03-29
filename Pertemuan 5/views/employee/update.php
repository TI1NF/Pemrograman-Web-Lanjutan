<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<h1>Update Employee</h1>

<?php $form = ActiveForm::begin() ?>

<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'age') ?>
<?= Html::submitButton('Update',['class'=>'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>