<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id
 * @property string $nama
 * @property string $tgl_lahir
 * @property string $tmp_lahir
 * @property string $gender
 * @property string $telepon
 * @property string $alamat
 *
 * @property TransaksiParkir[] $transaksiParkirs
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_lahir'], 'safe'],
            [['nama', 'tmp_lahir', 'alamat'], 'string', 'max' => 45],
            [['gender'], 'string', 'max' => 1],
            [['telepon'], 'string', 'max' => 20],
            [['telepon'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'tgl_lahir' => 'Tgl Lahir',
            'tmp_lahir' => 'Tmp Lahir',
            'gender' => 'Gender',
            'telepon' => 'Telepon',
            'alamat' => 'Alamat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiParkirs()
    {
        return $this->hasMany(TransaksiParkir::className(), ['petugas_id' => 'id']);
    }
}
