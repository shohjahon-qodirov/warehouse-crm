<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\client\Client $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="card-body">
    <h5 class="card-title">
        Forma
    </h5>
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-4 col-sm-12">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4 col-sm-12">
            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4 col-sm-12">
            <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-12 col-sm-12" style="padding-top: 20px">
            <?= Html::submitButton('Saqlash', ['class' => 'btn btn-outline-success btn-block']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>