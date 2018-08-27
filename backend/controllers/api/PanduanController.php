<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "PanduanController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class PanduanController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\Panduan';
}
