<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Model1 */

$this->title = 'Create Model - 1';
$this->params['breadcrumbs'][] = ['label' => 'Model - 1', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
