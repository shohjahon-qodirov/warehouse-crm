<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Kirish sahifasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12 col-lg-4">
            <div class="card login-box-container">
                <div class="card-body">
                    <div class="authent-logo">
                        <img src="<?=Yii::$app->request->baseUrl?>/static/logo.jpg" style="background-size: cover; width: 100px;" alt="Logo">
                    </div>
                    <div class="authent-text">
                        <p>
                            ZealSoft-ga xush kelibsiz
                        </p>
                        <p>
                            Iltimos, shaxsiy hisobingizga kiring.
                        </p>
                    </div>

                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',

                    ]); ?>
                    <div class="mb-3">
                        <div class="form-floating">
                            <?= $form->field($model, 'username')->textInput(['placeholder' => 'Login', 'autofocus' => true])->label(false) ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Parol'])->label(false) ?>
                        </div>
                    </div>
                    <div class="mb-3 form-check">
                        <?= $form->field($model, 'rememberMe')->checkbox()->label('Eslab qolish') ?>
                    </div>
                    <div class="d-grid">
                        <?= Html::submitButton('Kirish', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>