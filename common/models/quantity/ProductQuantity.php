<?php

namespace common\models\quantity;

use Yii;

/**
 * This is the model class for table "product_quantity".
 *
 * @property int $id
 * @property int $branch_id
 * @property int $product_id
 * @property int $quantity_type_id
 * @property int $count
 */
class ProductQuantity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_quantity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['branch_id', 'product_id', 'quantity_type_id', 'count'], 'required'],
            [['branch_id', 'product_id', 'quantity_type_id', 'count'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'branch_id' => 'Branch ID',
            'product_id' => 'Product ID',
            'quantity_type_id' => 'Quantity Type ID',
            'count' => 'Count',
        ];
    }
}
