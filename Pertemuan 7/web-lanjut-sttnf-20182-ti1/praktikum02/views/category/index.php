<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <?php \yii\widgets\Pjax::begin(['id' => 'pjax-gridview']); ?>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            'description',
            'created_at',
            //'updated_at',
            'created_by',
            //'updated_by',

            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'view' => function($url, $model){
                        $icon = '<span class="glyphicon glyphicon-eye-open"></span>';
                        return Html::a($icon, $url);
                    },
                    'update' => function($url, $model){
                        $icon = '<span class="glyphicon glyphicon-pencil"></span>';
                        return Html::a($icon, $url);
                    },
                    'delete' => function($url, $model){
                        $icon = '<span class="glyphicon glyphicon-trash"></span>';
                        return Html::a($icon, $url, [
                            // 'data-confirm' => 'Are you sure want to delete this item ?',
                            // 'data-method' => 'post',
                            'class' => 'pjaxDelete',
                        ]);
                    },
                ],
            ],
        ],
    ]); ?>

    <?php \yii\widgets\Pjax::end(); ?>
</div>

<?php
$this->registerJs('
    /* fungsi ini akan dijalankan ketika class pjaxDelete di klik */
    $(".pjaxDelete").on("click", function (e) {
        /* cegah link menjalankan default action */
        e.preventDefault();
        if(confirm("Are you sure you want to delete this item?")){
            /* request actionDelete dengan method post */
            $.post($(this).attr("href"), function(data) {
                /* reload gridview */
                $.pjax.reload("#pjax-gridview",{"timeout":false});
            });
        }
    });
');