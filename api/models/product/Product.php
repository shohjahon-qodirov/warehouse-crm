<?php

namespace api\models\product;

class Product extends \common\models\product\Product {

    public function fields()
    {
        return [
            'id',
            'name',
            'price',
            'new_price',
        ];
    }

}