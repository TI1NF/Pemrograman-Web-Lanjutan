<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kendaraan".
 *
 * @property int $idKendaraan
 * @property string $nopol
 * @property string $pemilik
 * @property string $merk
 * @property int $Jenis_id
 *
 * @property Jenis $jenis
 * @property TransaksiParkir[] $transaksiParkirs
 */
class Kendaraan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kendaraan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nopol', 'pemilik', 'Jenis_id'], 'required'],
            [['Jenis_id'], 'integer'],
            [['nopol'], 'string', 'max' => 15],
            [['pemilik', 'merk'], 'string', 'max' => 45],
            [['nopol'], 'unique'],
            [['Jenis_id'], 'exist', 'skipOnError' => true, 'targetClass' => Jenis::className(), 'targetAttribute' => ['Jenis_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idKendaraan' => 'Id Kendaraan',
            'nopol' => 'Nopol',
            'pemilik' => 'Pemilik',
            'merk' => 'Merk',
            'Jenis_id' => 'Jenis ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenis()
    {
        return $this->hasOne(Jenis::className(), ['id' => 'Jenis_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiParkirs()
    {
        return $this->hasMany(TransaksiParkir::className(), ['kendaraan_idKendaraan' => 'idKendaraan']);
    }
}
