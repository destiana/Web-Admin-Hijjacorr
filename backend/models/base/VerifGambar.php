<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace backend\models\base;

use Yii;

/**
 * This is the base-model class for table "verif_gambar".
 *
 * @property integer $id_verif_gambar
 * @property string $gambar
 * @property string $aliasModel
 */
abstract class VerifGambar extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'verif_gambar';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gambar'], 'required'],
            [['gambar'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_verif_gambar' => 'Id Verif Gambar',
            'gambar' => 'Gambar',
        ];
    }




}