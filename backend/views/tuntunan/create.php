<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tuntunan */

$this->title = 'Create Tuntunan';
$this->params['breadcrumbs'][] = ['label' => 'Tuntunan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuntunan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
