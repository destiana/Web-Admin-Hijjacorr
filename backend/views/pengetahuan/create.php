<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pengetahuan */

$this->title = 'Create Pengetahuan Berhijab';
$this->params['breadcrumbs'][] = ['label' => 'Pengetahuan Berhijab', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengetahuan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
