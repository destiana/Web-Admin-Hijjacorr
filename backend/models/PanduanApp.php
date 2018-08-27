<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "panduan_app".
 *
 * @property integer $id_panduan_app
 * @property string $judul
 * @property string $isi
 * @property string $gambar
 */
class PanduanApp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'panduan_app';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul', 'isi', 'gambar'], 'required'],
            [['isi', 'url'], 'string'],
            [['judul'], 'string', 'max' => 100],
            [['gambar'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_panduan_app' => 'Id Panduan App',
            'judul' => 'Judul',
            'isi' => 'Isi',
            'gambar' => 'Gambar',
            'url' => 'Url'
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
