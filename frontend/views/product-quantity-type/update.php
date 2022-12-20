<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\quantity\ProductQuantityType $model */

$this->title = 'Update Product Quantity Type: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Product Quantity Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-quantity-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
