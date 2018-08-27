<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\VerifGambar */

$this->title = 'Update Gambar';
$this->params['breadcrumbs'][] = ['label' => 'Verifikasi Gambar', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="verif-gambar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
