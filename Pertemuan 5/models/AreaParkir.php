<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "area_parkir".
 *
 * @property int $id
 * @property string $kode
 * @property int $kapasitas
 * @property string $keterangan
 * @property int $gedung_id
 *
 * @property Gedung $gedung
 * @property TransaksiParkir[] $transaksiParkirs
 */
class AreaParkir extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'area_parkir';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode', 'gedung_id'], 'required'],
            [['kapasitas', 'gedung_id'], 'integer'],
            [['kode'], 'string', 'max' => 10],
            [['keterangan'], 'string', 'max' => 45],
            [['kode'], 'unique'],
            [['gedung_id'], 'exist', 'skipOnError' => true, 'targetClass' => Gedung::className(), 'targetAttribute' => ['gedung_id' => 'id']],
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
            'kapasitas' => 'Kapasitas',
            'keterangan' => 'Keterangan',
            'gedung_id' => 'Gedung ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGedung()
    {
        return $this->hasOne(Gedung::className(), ['id' => 'gedung_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiParkirs()
    {
        return $this->hasMany(TransaksiParkir::className(), ['area_parkir_id' => 'id']);
    }
}
