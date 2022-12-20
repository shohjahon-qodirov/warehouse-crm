<?php

namespace common\models\product;

use Yii;

/**
 * This is the model class for table "product_item".
 *
 * @property int $id
 * @property int $product_category_id
 * @property int $product_type_id
 * @property int $currency_id
 * @property string $vendor_code
 * @property string $name
 * @property string $barcode
 * @property int $price
 * @property int $new_price
 */
class ProductItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_category_id', 'product_type_id', 'currency_id', 'vendor_code', 'name', 'barcode', 'price', 'new_price'], 'required'],
            [['product_category_id', 'product_type_id', 'currency_id', 'price', 'new_price'], 'integer'],
            [['vendor_code', 'name', 'barcode'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_category_id' => 'Product Category ID',
            'product_type_id' => 'Product Type ID',
            'currency_id' => 'Currency ID',
            'vendor_code' => 'Vendor Code',
            'name' => 'Name',
            'barcode' => 'Barcode',
            'price' => 'Price',
            'new_price' => 'New Price',
        ];
    }
}
