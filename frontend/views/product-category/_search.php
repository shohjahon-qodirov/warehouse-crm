<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\product\ProductCategorySearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="product-category-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <div class="position-relative">
        <input type="text" id="productcategorysearch-name" style="max-width: 800px; min-width: 500px" name="ProductCategorySearch[name]" class="form-control" placeholder="Izlash..." value="<?=$model->name?>">
        <i class="bx bx-search-alt search-icon"></i>
    </div>

    <?php ActiveForm::end(); ?>

</div>
