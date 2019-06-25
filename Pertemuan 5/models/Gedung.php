<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gedung".
 *
 * @property int $id
 * @property string $kode
 * @property string $nama
 * @property string $alamat
 * @property double $latitude
 * @property string $longitude
 *
 * @property AreaParkir[] $areaParkirs
 */
class Gedung extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gedung';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode'], 'required'],
            [['latitude'], 'number'],
            [['kode'], 'string', 'max' => 5],
            [['nama'], 'string', 'max' => 30],
            [['alamat'], 'string', 'max' => 100],
            [['longitude'], 'string', 'max' => 45],
            [['kode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode' => 'Kode',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAreaParkirs()
    {
        return $this->hasMany(AreaParkir::className(), ['gedung_id' => 'id']);
    }
}
