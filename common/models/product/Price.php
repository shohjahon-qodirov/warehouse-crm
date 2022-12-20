<?php

namespace common\models\product;

use Yii;

/**
 * This is the model class for table "price".
 *
 * @property int $id
 * @property int $product_item_id
 * @property int $type
 * @property int $price
 * @property int $new_price
 */
class Price extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'price';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_item_id', 'type', 'price', 'new_price'], 'required'],
            [['product_item_id', 'type', 'price', 'new_price'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_item_id' => 'Product Item ID',
            'type' => 'Type',
            'price' => 'Price',
            'new_price' => 'New Price',
        ];
    }
}
