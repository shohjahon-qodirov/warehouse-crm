<?php

namespace common\models\company;

use Yii;

/**
 * This is the model class for table "branch".
 *
 * @property int $id
 * @property int $company_id
 * @property string $code
 * @property string $name
 * @property string $address
 * @property int $status
 */
class Branch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'branch';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id', 'code', 'name', 'address', 'status'], 'required'],
            [['company_id', 'status'], 'integer'],
            [['code'], 'string', 'max' => 50],
            [['name', 'address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_id' => 'Company ID',
            'code' => 'Code',
            'name' => 'Name',
            'address' => 'Address',
            'status' => 'Status',
        ];
    }
}
