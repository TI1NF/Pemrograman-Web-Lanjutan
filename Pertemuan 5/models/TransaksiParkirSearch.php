<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TransaksiParkir;

/**
 * TransaksiParkirSearch represents the model behind the search form of `app\models\TransaksiParkir`.
 */
class TransaksiParkirSearch extends TransaksiParkir
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kendaraan_idKendaraan', 'area_parkir_id', 'petugas_id'], 'integer'],
            [['masuk', 'keluar'], 'safe'],
            [['biaya'], 'number'],
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
        $query = TransaksiParkir::find();

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
            'id' => $this->id,
            'kendaraan_idKendaraan' => $this->kendaraan_idKendaraan,
            'area_parkir_id' => $this->area_parkir_id,
            'masuk' => $this->masuk,
            'keluar' => $this->keluar,
            'biaya' => $this->biaya,
            'petugas_id' => $this->petugas_id,
        ]);

        return $dataProvider;
    }
}
