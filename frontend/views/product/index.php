<?php

use common\models\product\Product;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
/** @var yii\web\View $this */
/** @var common\models\product\ProductSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tovarlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col-12">
                <h1><?= Html::encode($this->title) ?></h1>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="search-box me-2 mb-2 d-inline-block">
                                    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
                                </div>
                                <p class="text-danger">
                                    * Izlash formasi to'ldirilgandan so'ng Enter-ni bosing.
                                </p>
                            </div>
                            <div class="col-md-8 text-right">
                                <?= Html::a('Yangi tovar qo\'shish <i class="fa fa-plus"></i>', ['create'], ['class' => 'btn btn-outline-success m-b-xs']) ?>
                            </div>
                        </div>
                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'tableOptions' => [
                                'class' => 'table table-striped table-bordered text-center',
                            ],
                            'pager' => [
                                'options' => [
                                    'tag' => 'ul',
                                    'class' => 'pagination text-center'
                                ],
                                'linkOptions' => ['class' => 'page-link'],
                                'linkContainerOptions' => ['class' => 'page-item'],
                                'disabledListItemSubTagOptions' => ['tag' => 'a', 'class' => 'page-link'],

                            ],
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                //'id',
//                                [
//                                    'attribute' => 'product_category_id',
//                                    'filter' => ArrayHelper::map(\common\models\product\ProductCategory::find()->all(), 'id', 'name'),
//                                    'value' => function($model) {
//                                        return $model->category->name;
//                                    }
//                                ],
                                //'product_type_id',
                                //'currency_id',
                                'vendor_code',
                                'name',
                                //'barcode',
                                //'price',
                                [
                                    'attribute' => 'new_price',
                                    'value' => function ($model) {
                                        return number_format($model->new_price,2);
                                    }
                                ],

                                ['class' => 'yii\grid\ActionColumn',
                                    'template' => '{price} {update} {delete}',
                                    'buttons' => [
                                        'price' => function ($url, $model) {
                                            return Html::a('<span class="fa fa-money-check-alt"></span> Narxlash', $url, [
                                                'title' => Yii::t('app', 'Narxlash'),
                                                'class'=>'btn btn-outline-success btn-block',
                                            ]);
                                        },
                                        'update' => function ($url, $model) {
                                            return Html::a('<span class="fa fa-edit"></span> O\'zgartirish', $url, [
                                                'title' => Yii::t('app', 'O\'zgartirish'),
                                                'class'=>'btn btn-outline-primary btn-block',
                                            ]);
                                        },
                                        'delete' => function ($url, $model) {
                                            return Html::a('<span class="fa fa-trash"></span> O\'chirish', $url, [
                                                'title' => Yii::t('app', 'Oʻchirish'),
                                                'class'=>'btn btn-outline-danger btn-block',
                                                'data-confirm' => Yii::t('yii', 'Вы уверены, что хотите удалить этот элемент?'),
                                                'data-method'  => 'post',
                                            ]);
                                        },
                                    ],
                                ],
                            ],
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
