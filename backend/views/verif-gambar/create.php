<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\VerifGambar */

$this->title = 'Upload Gambar Pembanding Scan';
$this->params['breadcrumbs'][] = ['label' => 'Verifikasi Gambar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="verif-gambar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
