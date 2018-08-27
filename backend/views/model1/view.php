<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Model1 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Model - 1', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model1-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            [
                'attribute'=>'gambar',
                'format'=>'raw',
                'value'=> Html::img(Yii::getAlias('@web')."/uploads/".$model->gambar,['height'=>'auto','width'=>'500px']),
            ],
            'url:url',
        ],
    ]) ?>

</div>
