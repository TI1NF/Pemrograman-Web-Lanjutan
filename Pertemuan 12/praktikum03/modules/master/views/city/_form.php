<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\widgets\Select2;
use app\modules\master\models\Province;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\modules\master\models\City */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="city-form">

    <?php $form = ActiveForm::begin([
      'type'=>ActiveForm::TYPE_INLINE,
    ]); ?>

    <?= $form->field($model, 'province_id')->textInput() ?>
    <?= $form->field($model, 'province_id')->widget(Select2::classname(),
    [
      'data'=>ArrayHelper::map(Province::find()->all(),'id','name'),
      'options' => ['placeholder' => 'Pilih provinsi ...'],
      'pluginOptions' => [
        'allowClear' => true
      ],
    ])?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList([ 'kabupaten' => 'Kabupaten', 'kota' => 'Kota', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'postal_code')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
