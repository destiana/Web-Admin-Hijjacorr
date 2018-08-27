<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tuntunan".
 *
 * @property integer $id
 * @property string $judul
 * @property string $gambar
 * @property string $url
 */
class Tuntunan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tuntunan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul', 'gambar'], 'required'],
            [['gambar'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['judul'], 'string', 'max' => 100],
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
            'judul' => 'Judul',
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
