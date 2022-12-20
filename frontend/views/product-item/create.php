<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\product\ProductItem $model */

$this->title = 'Create Product Item';
$this->params['breadcrumbs'][] = ['label' => 'Product Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
