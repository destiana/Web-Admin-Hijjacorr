<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Model2 */

$this->title = 'Create Model - 2';
$this->params['breadcrumbs'][] = ['label' => 'Model - 2', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
