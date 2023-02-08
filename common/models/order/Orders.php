<?php

namespace common\models\order;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int $client_id
 * @property int $sum
 * @property int $status
 * @property int $user_id
 * @property int $created
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_id', 'sum', 'status', 'user_id', 'created'], 'required'],
            [['client_id', 'sum', 'status', 'user_id', 'created'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_id' => 'Client ID',
            'sum' => 'Sum',
            'status' => 'Status',
            'user_id' => 'User ID',
            'created' => 'Created',
        ];
    }
}
