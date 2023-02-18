<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\order\Orders $model */

$this->title = 'Chek №' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Buyurtmalar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
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
                                <p class="info">
                                    <b>Chek holati:</b>
                                    <?= \common\models\order\Orders::getStatusName($model->status)?>
                                </p>
                            </div>
                            <div class="col-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="float-end">
                                            <b>Mijoz FIO: </b><?=$model->client->name?>
                                        </h4>
                                    </div>
                                    <div class="col">
                                        <p class="float-end">
                                            <b>
                                                Mijoz telefon raqami:
                                            </b>
                                            <?=$model->client->phone?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row invoice-last">
                            <div class="col-12">
                                <div class="card-body">
                                    <h5 class="card-title text-center">
                                        Forma
                                    </h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="product-select">
                                                    Tovarlar
                                                </label>
                                                <select class="form-select" id="product-select">
                                                    <option>
                                                        Barcha tovarlar
                                                    </option>
                                                    <?php $productItems = \common\models\product\Product::find()->all();
                                                    foreach ($productItems as $productItem):?>
                                                        <option value="<?=$productItem->id?>">
                                                            <?=ucfirst($productItem->name)?>
                                                        </option>
                                                    <?php endforeach;?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="product-count">
                                                    Tovar soni
                                                </label>
                                                <input type="number" class="form-control" id="product-count" value="1">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="product-price">
                                                    Tovar narxi
                                                </label>
                                                <input type="number" class="form-control" id="product-price" value="0">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="product-sum">
                                                    Umumiy narx
                                                </label>
                                                <input type="number" class="form-control" id="product-sum" value="0" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-outline-success btn-lg" type="button">
                                            <i class="fa fa-plus"></i>
                                            Qo'shish
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <hr>
                            <div class="table-responsive">
                                <table class="table invoice-table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">
                                            Tovar nomi
                                        </th>
                                        <th scope="col">
                                            Narxi
                                        </th>
                                        <th scope="col">
                                            Soni
                                        </th>
                                        <th>
                                            Umumiy narxi
                                        </th>
                                        <th scope="col">
                                            Yaratilgan vaqti
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
<!--                                    --><?php //$i = 1;
//                                    foreach ($priceItems as $priceItem):?>
<!--                                        <tr>-->
<!--                                            <th scope="row">-->
<!--                                                --><?php //=$i?>
<!--                                            </th>-->
<!--                                            <td>-->
<!--                                                --><?php //if ($priceItem->type == 0):?>
<!--                                                    <span class="badge bg-primary">-->
<!--                                                            Narx o'zgartirilmagan!!!-->
<!--                                                        </span>-->
<!--                                                --><?php //elseif($priceItem->type == 1):?>
<!--                                                    <span class="badge bg-danger">-->
<!--                                                            Narx tushdi!!!-->
<!--                                                        </span>-->
<!--                                                --><?php //elseif($priceItem->type == 2):?>
<!--                                                    <span class="badge bg-success">-->
<!--                                                            Narx ko'tarildi!!!-->
<!--                                                        </span>-->
<!--                                                --><?php //endif;?>
<!--                                            </td>-->
<!--                                            <td>-->
<!--                                                --><?php //=number_format($priceItem->price, 2);?><!-- so'm-->
<!--                                            </td>-->
<!--                                            <td>-->
<!--                                                --><?php //=number_format($priceItem->new_price, 2);?><!-- so'm-->
<!--                                            </td>-->
<!--                                            <td>-->
<!--                                                <p>-->
<!--                                                    <b>-->
<!--                                                        Pul miqdorida:-->
<!--                                                    </b>-->
<!--                                                    --><?php //= number_format($priceItem->new_price - $priceItem->price,2)?><!-- so'm-->
<!--                                                </p>-->
<!--                                                <p>-->
<!--                                                    <b>-->
<!--                                                        Foizda:-->
<!--                                                    </b>-->
<!--                                                    --><?php //=floor((($priceItem->new_price / $priceItem->price) - 1) * 100)?><!-- %-->
<!--                                                </p>-->
<!--                                            </td>-->
<!--                                            <td>-->
<!--                                                --><?php //=date('d.m.Y', $priceItem->created)?>
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                        --><?php //$i++; endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>