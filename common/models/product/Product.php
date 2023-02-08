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
class Product extends \yii\db\ActiveRecord
{

    public $search;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['price', 'new_price'], 'integer'],
            [['vendor_code', 'name', 'barcode', 'search'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vendor_code' => 'Sotuvchi kodi',
            'name' => 'Nomi',
            'barcode' => 'Shtrix-kod',
            'price' => 'Narxi',
            'new_price' => 'Sotiladigan narxi',
        ];
    }
}
