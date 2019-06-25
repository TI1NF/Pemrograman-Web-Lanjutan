<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "auth".
 *
 * @property string $module
 * @property string $controller
 * @property string $action
 * @property int $user_id
 * @property int $id
 */
class Auth extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'auth';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['module', 'controller', 'action', 'user_id'], 'required'],
            [['user_id'], 'integer'],
            [['module', 'controller', 'action'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'module' => 'Module',
            'controller' => 'Controller',
            'action' => 'Action',
            'user_id' => 'User ID',
            'id' => 'ID',
        ];
    }
}
