<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "panduan".
 *
 * @property integer $id_panduan
 * @property string $judul
 * @property string $isi
 * @property string $gambar
 */
class Panduan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'panduan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul', 'isi', 'gambar'], 'required'],
            [['isi'], 'string'],
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
            'id_panduan' => 'Id Panduan',
            'judul' => 'Judul',
            'isi' => 'Isi',
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
