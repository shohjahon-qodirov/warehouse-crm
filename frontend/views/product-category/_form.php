<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\product\ProductCategory $model */
/** @var yii\widgets\ActiveForm $form */
?>
<div class="card-body">
    <h5 class="card-title">
        Forma
    </h5>
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-6 col-sm-12">
            <?= $form->field($model, 'status')->dropDownList([
                    '1' => 'Faol',
                    '0' => 'Faol emas'
            ]) ?>
        </div>
        <div class="col-lg-12 col-sm-12" style="padding-top: 20px">
            <?= Html::submitButton('Saqlash', ['class' => 'btn btn-outline-success btn-block']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>