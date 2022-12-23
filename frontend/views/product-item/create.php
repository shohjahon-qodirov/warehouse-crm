<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\product\ProductItem $model */

$this->title = 'Yangi tovar qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Tovarlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col-12">
                <h2>
                    <?= Html::encode($this->title) ?>
                </h2>
            </div>
            <div class="col">
                <div class="card">
                    <?= $this->render('_form', [
                        'model' => $model,
                        'type' => 'create',
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>
