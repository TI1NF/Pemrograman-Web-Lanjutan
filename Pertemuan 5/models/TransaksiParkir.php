<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi_parkir".
 *
 * @property int $id
 * @property int $kendaraan_idKendaraan
 * @property int $area_parkir_id
 * @property string $masuk
 * @property string $keluar
 * @property double $biaya
 * @property int $petugas_id
 *
 * @property AreaParkir $areaParkir
 * @property Kendaraan $kendaraanIdKendaraan
 * @property Pegawai $petugas
 */
class TransaksiParkir extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi_parkir';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kendaraan_idKendaraan', 'area_parkir_id', 'petugas_id'], 'required'],
            [['kendaraan_idKendaraan', 'area_parkir_id', 'petugas_id'], 'integer'],
            [['masuk', 'keluar'], 'safe'],
            [['biaya'], 'number'],
            [['area_parkir_id'], 'exist', 'skipOnError' => true, 'targetClass' => AreaParkir::className(), 'targetAttribute' => ['area_parkir_id' => 'id']],
            [['kendaraan_idKendaraan'], 'exist', 'skipOnError' => true, 'targetClass' => Kendaraan::className(), 'targetAttribute' => ['kendaraan_idKendaraan' => 'idKendaraan']],
            [['petugas_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['petugas_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kendaraan_idKendaraan' => 'Kendaraan Id Kendaraan',
            'area_parkir_id' => 'Area Parkir ID',
            'masuk' => 'Masuk',
            'keluar' => 'Keluar',
            'biaya' => 'Biaya',
            'petugas_id' => 'Petugas ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAreaParkir()
    {
        return $this->hasOne(AreaParkir::className(), ['id' => 'area_parkir_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKendaraanIdKendaraan()
    {
        return $this->hasOne(Kendaraan::className(), ['idKendaraan' => 'kendaraan_idKendaraan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPetugas()
    {
        return $this->hasOne(Pegawai::className(), ['id' => 'petugas_id']);
    }
}
