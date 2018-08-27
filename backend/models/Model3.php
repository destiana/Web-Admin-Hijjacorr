<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "model3".
 *
 * @property integer $id
 * @property string $gambar
 * @property string $url
 */
class Model3 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'model3';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gambar'], 'required'],
            [['gambar'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['url'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gambar' => 'Gambar',
            'url' => 'Url',
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
