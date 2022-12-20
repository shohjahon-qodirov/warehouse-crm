<?php

namespace common\models\config;

use Yii;

/**
 * This is the model class for table "currency".
 *
 * @property int $id
 * @property int $currency_id
 * @property int $currency_code
 * @property string $currency_ccy
 */
class Currency extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'currency';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['currency_id', 'currency_code', 'currency_ccy'], 'required'],
            [['currency_id', 'currency_code'], 'integer'],
            [['currency_ccy'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'currency_id' => 'Currency ID',
            'currency_code' => 'Currency Code',
            'currency_ccy' => 'Currency Ccy',
        ];
    }
}
