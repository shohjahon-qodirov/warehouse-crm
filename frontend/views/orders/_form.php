<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var common\models\order\Orders $model */
/** @var yii\widgets\ActiveForm $form */
?>
<div class="card-body">
    <h5 class="card-title">
        Forma
    </h5>
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <?= $form->field($model, 'client_id')->dropDownList(\common\models\client\Client::getFullInfo(),
                [
                    'prompt' => 'Mijozni tanlang',
                ]); ?>
        </div>
        <div class="col-lg-12 col-sm-12" style="padding-top: 20px">
            <?= Html::submitButton('Saqlash', ['class' => 'btn btn-outline-success btn-block']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>