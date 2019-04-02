<?php

use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

$form = ActiveForm::begin();
$data = ArrayHelper::map($books,'id','title');

echo $form->field($model,'title')->dropDownList($data,['prompt' => '-- Choose a title --']);
echo $form->field($model,'author')->textInput();
echo $form->field($model,'year')->textInput();

ActiveForm::end();

$this->registerJs('
	$("#dynamicmodel-title").change(function() {
		$.get("'.Url::to(['get-book','id'=>'']).'" + $(this).val(), function(data){
			$("#dynamicmodel-author").val(data.book.author);
			$("#dynamicmodel-year").val(data.book.year);
		});
	});
');