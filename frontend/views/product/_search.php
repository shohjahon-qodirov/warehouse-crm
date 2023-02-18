<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\product\ProductSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="product-item-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <div class="position-relative">
        <input type="text" id="productsearch-search" style="max-width: 800px; min-width: 500px" name="ProductSearch[search]" class="form-control" placeholder="Izlash..." value="<?=$model->search?>">
        <i class="bx bx-search-alt search-icon"></i>
    </div>

    <?php ActiveForm::end(); ?>

</div>
