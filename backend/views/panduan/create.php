<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Panduan */

$this->title = 'Create Panduan Berhijab';
$this->params['breadcrumbs'][] = ['label' => 'Panduan Berhijab', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panduan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
