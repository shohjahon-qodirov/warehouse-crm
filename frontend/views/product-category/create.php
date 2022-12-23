<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\product\ProductCategory $model */

$this->title = 'Yangi kategoriya yaratish';
$this->params['breadcrumbs'][] = ['label' => 'Tovar kategoriyalari', 'url' => ['index']];
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
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>