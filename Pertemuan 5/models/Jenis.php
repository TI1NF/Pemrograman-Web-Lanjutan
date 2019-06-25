<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenis".
 *
 * @property int $id
 * @property string $Jeniscol
 *
 * @property Kendaraan[] $kendaraans
 */
class Jenis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Jeniscol'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Jeniscol' => 'Jeniscol',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKendaraans()
    {
        return $this->hasMany(Kendaraan::className(), ['Jenis_id' => 'id']);
    }
}
