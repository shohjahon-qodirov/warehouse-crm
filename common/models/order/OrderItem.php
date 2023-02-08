<?php

namespace common\models\order;

use Yii;

/**
 * This is the model class for table "order_item".
 *
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property int $count
 * @property int $sum
 * @property int $user_id
 * @property int $created
 */
class OrderItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'count', 'sum', 'user_id', 'created'], 'required'],
            [['order_id', 'product_id', 'count', 'sum', 'user_id', 'created'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'product_id' => 'Product ID',
            'count' => 'Count',
            'sum' => 'Sum',
            'user_id' => 'User ID',
            'created' => 'Created',
        ];
    }
}
