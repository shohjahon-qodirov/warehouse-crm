<?php

namespace common\models\client;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string|null $address
 */
class Client extends \yii\db\ActiveRecord
{

    public $search;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone'], 'required'],
            [['name', 'phone', 'address'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'FIO',
            'phone' => 'Telefon',
            'address' => 'Manzili',
        ];
    }

    public static function getFullInfo() {
        return self::find()->select(['CONCAT(name, " ", address, " ", phone) AS fullInfo', 'id'])->indexBy('id')->column();
    }

    public static function getFilter() {
        return self::find()->select(['CONCAT(name, " ", phone) AS fullInfo', 'id'])->indexBy('id')->column();
    }
}
