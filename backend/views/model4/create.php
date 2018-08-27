<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Model4 */

$this->title = 'Create Model - 4';
$this->params['breadcrumbs'][] = ['label' => 'Model - 4', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model4-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
