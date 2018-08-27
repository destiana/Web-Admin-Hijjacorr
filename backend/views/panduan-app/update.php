<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PanduanApp */

$this->title = 'Update Panduan Aplikasi';
$this->params['breadcrumbs'][] = ['label' => 'Panduan Aplikasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_panduan_app, 'url' => ['view', 'id' => $model->id_panduan_app]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="panduan-app-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
