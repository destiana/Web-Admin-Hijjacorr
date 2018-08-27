<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Panduan */

$this->title = 'Update Panduan Berhijab';
$this->params['breadcrumbs'][] = ['label' => 'Panduan Berhijab', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_panduan, 'url' => ['view', 'id' => $model->id_panduan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="panduan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
