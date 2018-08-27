<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Model4Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Model - 4';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model4-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'Create New', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\ActionColumn'],
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute'=>'gambar',
                'format'=>'raw',
                'value'=>function($gambar){
                    return Html::img(Yii::getAlias('@web')."/uploads/".$gambar->gambar,['height'=>'auto','width'=>'100px']);
                }
            ],
            'url:url',

        ],
    ]); ?>
</div>
