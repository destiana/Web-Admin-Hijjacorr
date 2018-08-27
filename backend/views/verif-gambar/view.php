<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\VerifGambar */

$this->title = 'Gambar Pembanding Scan';
$this->params['breadcrumbs'][] = ['label' => 'Verifikasi Gambar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="verif-gambar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_verif_gambar], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_verif_gambar], [
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
            //'id_verif_gambar',
            [
                'attribute'=>'gambar',
                'format'=>'raw',
                'value'=> Html::img(Yii::getAlias('@web')."/uploads/".$model->gambar,['height'=>'auto','width'=>'500px']),
            ],
        ],
    ]) ?>

</div>
