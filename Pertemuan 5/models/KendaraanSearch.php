<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kendaraan;

/**
 * KendaraanSearch represents the model behind the search form of `app\models\Kendaraan`.
 */
class KendaraanSearch extends Kendaraan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idKendaraan', 'Jenis_id'], 'integer'],
            [['nopol', 'pemilik', 'merk'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Kendaraan::find();

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
            'idKendaraan' => $this->idKendaraan,
            'Jenis_id' => $this->Jenis_id,
        ]);

        $query->andFilterWhere(['like', 'nopol', $this->nopol])
            ->andFilterWhere(['like', 'pemilik', $this->pemilik])
            ->andFilterWhere(['like', 'merk', $this->merk]);

        return $dataProvider;
    }
}
