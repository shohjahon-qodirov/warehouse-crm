<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\quantity\ProductQuantityType $model */

$this->title = 'Create Product Quantity Type';
$this->params['breadcrumbs'][] = ['label' => 'Product Quantity Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-quantity-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
