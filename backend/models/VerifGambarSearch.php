<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\VerifGambar;

/**
 * VerifGambarSearch represents the model behind the search form about `app\models\VerifGambar`.
 */
class VerifGambarSearch extends VerifGambar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_verif_gambar'], 'integer'],
            [['gambar'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = VerifGambar::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_verif_gambar' => $this->id_verif_gambar,
        ]);

        $query->andFilterWhere(['like', 'gambar', $this->gambar]);

        return $dataProvider;
    }
}
