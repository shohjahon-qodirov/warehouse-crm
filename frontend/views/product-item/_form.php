<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var common\models\product\ProductItem $model */
/** @var yii\widgets\ActiveForm $form */
?>
<div class="card-body">
    <h5 class="card-title">
        Forma
    </h5>
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <?php if ($type == 'create'):?>
            <div class="col-lg-6 col-sm-12">
                <?= $form->field($model, 'product_category_id')->dropDownList(ArrayHelper::map(\common\models\product\ProductCategory::find()->all(), 'id', 'name'),
                    [
                        'prompt' => 'Tanlash',
                    ]); ?>
            </div>
            <div class="col-lg-6 col-sm-12">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-4 col-sm-12">
                <?= $form->field($model, 'vendor_code')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-4 col-sm-12">
                <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-4 col-sm-12">
                <?= $form->field($model, 'new_price')->textInput(['maxlength' => true]) ?>
            </div>
        <?php elseif ($type == 'update'):?>
            <div class="col-lg-4 col-sm-12">
                <?= $form->field($model, 'product_category_id')->dropDownList(ArrayHelper::map(\common\models\product\ProductCategory::find()->all(), 'id', 'name'),
                    [
                        'prompt' => 'Tanlash',
                    ]); ?>
            </div>
            <div class="col-lg-4 col-sm-12">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-4 col-sm-12">
                <?= $form->field($model, 'vendor_code')->textInput(['maxlength' => true]) ?>
            </div>
        <?php endif;?>
        <div class="col-lg-12 col-sm-12" style="padding-top: 20px">
            <?= Html::submitButton('Saqlash', ['class' => 'btn btn-outline-success btn-block']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>