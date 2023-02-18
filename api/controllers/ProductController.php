<?php

namespace api\controllers;

use api\models\product\Product;
use common\models\product\Price;
use Yii;

class ProductController extends DefaultController {

    public $modelClass = 'api\models\product\Product';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    public function actions()
    {
        $actions = parent::actions();

        // disable the "delete" and "create" actions
        //unset($actions['index']);
        //unset($actions['view']);
        unset($actions['create']);
        //unset($actions['update']);
        //unset($actions['delete']);

        return $actions;
    }

    public function actionCreate() {

        $model = new Product();
        $model->load(Yii::$app->request->post(), '');
        if ($model->save(false)) {
            $price = new Price();
            $price->product_item_id = $model->id;
            $price->type = 0;
            $price->price = $model->price;
            $price->new_price = $model->new_price;
            $price->created = time();
            if ($price->save(false)) {
                return [
                    'success' => true,
                    'data' => [
                        'message' => 'Product saved',
                        'data' => $model
                    ],
                ];
            } else {
                return 'false';
            }
        } else {
            return $model;
        }

    }
}