<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PanduanApp */

$this->title = 'Create Panduan Aplikasi';
$this->params['breadcrumbs'][] = ['label' => 'Panduan Aplikasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panduan-app-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
