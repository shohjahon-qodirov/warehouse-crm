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
        <input type="text" id="orderssearch-name" style="max-width: 800px; min-width: 500px" name="OrdersSearch[search]" class="form-control" placeholder="Izlash..." value="<?=$model->search?>">
        <i class="bx bx-search-alt search-icon"></i>
    </div>

    <?php ActiveForm::end(); ?>

</div>