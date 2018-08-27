<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "verif_gambar".
 *
 * @property integer $id_verif_gambar
 * @property string $gambar
 */
class VerifGambar extends \yii\db\ActiveRecord
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
            [['gambar'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
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

    public function upload()
    {
        if ($this->validate()) {
            $this->gambar->saveAs('uploads/' . $this->gambar->baseName . '.' . $this->gambar->extension,$deleteTempFile = true);
            return true;
        } else {
            return false;
        }
    }
}
