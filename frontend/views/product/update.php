<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\product\Product $model */

$this->title = 'O\'zgartirish: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tovarlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'O\'zgartirish';
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
                        'type' => 'update',
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>
