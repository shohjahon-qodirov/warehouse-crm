<?php

namespace api\models\user;

use Yii;

/**
 * This is the model class for table "user_session".
 *
 * @property int $id
 * @property int $user_id
 * @property string $token
 * @property string $device
 * @property string $ip_address
 * @property int $created
 */
class UserSession extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_session';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'token', 'device', 'ip_address', 'created'], 'required'],
            [['user_id', 'created'], 'integer'],
            [['token', 'device', 'ip_address'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'token' => 'Token',
            'device' => 'Device',
            'ip_address' => 'Ip Address',
            'created' => 'Created',
        ];
    }
}
