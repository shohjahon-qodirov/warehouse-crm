<?php

namespace common\models\company;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $logo
 * @property int $status
 * @property int $branch_count
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'address', 'logo', 'status', 'branch_count'], 'required'],
            [['status', 'branch_count'], 'integer'],
            [['name', 'address', 'logo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'address' => 'Address',
            'logo' => 'Logo',
            'status' => 'Status',
            'branch_count' => 'Branch Count',
        ];
    }
}
