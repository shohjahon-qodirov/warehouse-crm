<?php

namespace common\models\order;

use Yii;
use common\models\client\Client;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int $client_id
 * @property int $sum
 * @property int $status
 * @property int $user_id
 * @property int $created
 */
class Orders extends \yii\db\ActiveRecord
{

    public $search;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_id', 'sum', 'status', 'user_id', 'created'], 'required'],
            [['client_id', 'sum', 'status', 'user_id', 'created'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Chek raqami',
            'client_id' => 'Mijoz',
            'sum' => 'Jami (so\'m)',
            'status' => 'Holati',
            'user_id' => 'Foydalanuvchi',
            'created' => 'Yaratilgan vaqti',
        ];
    }

    public function getClient()
    {
        return $this->hasOne(Client::className(), ['id' => 'client_id']);
    }

    public static function getStatusFilter()
    {
        return [
            0 => 'Jarayonda',
            1 => 'Muaffaqiyatli',
            2 => 'Bekor qilingan',
            3 => 'Xatolik',
        ];
    }

    public static function getStatusName($status)
    {
        switch ($status) {
            case 0:
                return '<span class="badge bg-warning p-2">Jarayonda</span>';
                break;
            case 1:
                return '<span class="badge bg-success p-2">Muaffaqiyatli</span>';
                break;
            case 2:
                return '<span class="badge bg-danger p-2">Bekor qilingan</span>';
                break;
            case 3:
                return '<span class="badge bg-danger p-2">Xatolik</span>';
                break;
            default:
                return '<span class="badge bg-warning p-2">Jarayonda</span>';
                break;
        }
    }

}
