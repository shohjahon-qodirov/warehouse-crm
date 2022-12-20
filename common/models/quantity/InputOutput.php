<?php

namespace common\models\quantity;

use Yii;

/**
 * This is the model class for table "input_output".
 *
 * @property int $id
 * @property int $branch_id
 * @property int $product_quantity_id
 * @property int $type
 * @property int $count
 */
class InputOutput extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'input_output';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['branch_id', 'product_quantity_id', 'type', 'count'], 'required'],
            [['branch_id', 'product_quantity_id', 'type', 'count'], 'integer'],
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
            'product_quantity_id' => 'Product Quantity ID',
            'type' => 'Type',
            'count' => 'Count',
        ];
    }
}
