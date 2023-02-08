<?php
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

$this->title = 'Qayta narxlash';
?>
<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <h2>
                                    <?=$this->title?>
                                </h2>
                            </div>
                            <div class="col-4">
                                <h4 class="float-end">
                                    <b>Tovar nomi: </b><?=$model->name?>
                                </h4>
                            </div>
                        </div>
                        <div class="invoice-details">
                            <div class="row">
                                <div class="col">
                                    <p class="info">Joriy narx:</p>
                                    <p>
                                        <b>
                                            Narxi:
                                        </b>
                                        <?=number_format($model->price, 2);?>
                                    </p>
                                    <p>
                                        <b>
                                            Sotilish narxi:
                                        </b>
                                        <?=number_format($model->new_price, 2);?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table invoice-table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">
                                                Narx turi
                                            </th>
                                            <th scope="col">
                                                Narxi
                                            </th>
                                            <th scope="col">
                                                Yangi narx
                                            </th>
                                            <th>
                                                Foyda
                                            </th>
                                            <th scope="col">
                                                Yaratilgan vaqti
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($priceItems as $priceItem):?>
                                            <tr>
                                                <th scope="row">
                                                    <?=$i?>
                                                </th>
                                                <td>
                                                    <?php if ($priceItem->type == 0):?>
                                                        <span class="badge bg-primary">
                                                            Narx o'zgartirilmagan!!!
                                                        </span>
                                                    <?php elseif($priceItem->type == 1):?>
                                                        <span class="badge bg-danger">
                                                            Narx tushdi!!!
                                                        </span>
                                                    <?php elseif($priceItem->type == 2):?>
                                                        <span class="badge bg-success">
                                                            Narx ko'tarildi!!!
                                                        </span>
                                                    <?php endif;?>
                                                </td>
                                                <td>
                                                    <?=number_format($priceItem->price, 2);?> so'm
                                                </td>
                                                <td>
                                                    <?=number_format($priceItem->new_price, 2);?> so'm
                                                </td>
                                                <td>
                                                    <p>
                                                        <b>
                                                            Pul miqdorida:
                                                        </b>
                                                        <?= number_format($priceItem->new_price - $priceItem->price,2)?> so'm
                                                    </p>
                                                    <p>
                                                        <b>
                                                            Foizda:
                                                        </b>
                                                        <?=floor((($priceItem->new_price / $priceItem->price) - 1) * 100)?> %
                                                    </p>
                                                </td>
                                                <td>
                                                    <?=date('d.m.Y', $priceItem->created)?>
                                                </td>
                                            </tr>
                                        <?php $i++; endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row invoice-last">
                            <div class="col-12">
                                <hr>
                                <div class="card-body">
                                    <h5 class="card-title text-center">
                                        Forma
                                    </h5>
                                    <?php $form = ActiveForm::begin(); ?>
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-12">
                                            <?= $form->field($priceForm, 'type')->dropDownList([
                                                '2' => 'Narxni ko\'tarish',
                                                '1' => 'Narxni tushurish'
                                            ]) ?>
                                        </div>
                                        <div class="col-lg-4 col-sm-12">
                                            <?= $form->field($priceForm, 'price')->textInput(['maxlength' => true]) ?>
                                        </div>
                                        <div class="col-lg-4 col-sm-12">
                                            <?= $form->field($priceForm, 'new_price')->textInput(['maxlength' => true]) ?>
                                        </div>
                                        <div class="col-lg-12 col-sm-12 d-grid gap-2" style="padding-top: 20px">
                                            <?= Html::submitButton('<i class="fa fa-check"></i> Saqlash', ['class' => 'btn btn-outline-success btn-block']) ?>
                                        </div>
                                    </div>
                                    <?php ActiveForm::end(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
