<?php

use kartik\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\master\models\CitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-index">

    <h3><?= Html::encode($this->title) ?> <?= Html::bsLabel('New',Html::TYPE_PRIMARY) ?></h3>f

    <?= Html::jumbotron('<h1>Hello, world<\h1>','<p>This is a simple
    jumbotron-style component for calling extra attention to featured content.</p>'
  ); ?>

    <?= Html::blockquote(
      'Negative comment will be forgiven'
      ) ?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
        <?= Html::a('Create City', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'province_id',
            'name',
            'type',
            'postal_code',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
