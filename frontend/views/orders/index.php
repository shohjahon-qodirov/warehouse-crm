<?php

use common\models\order\Orders;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var common\models\order\OrdersSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Buyurtmalar';
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
                                <?= Html::a('Yangi chek ochish <i class="fa fa-plus"></i>', ['create'], ['class' => 'btn btn-outline-success m-b-xs']) ?>
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

                                [
                                    'attribute' => 'id',
                                    'value' => function ($model) {
                                        return '№' . $model->id;
                                    }
                                ],
                                [
                                    'attribute' => 'client_id',
                                    'format' => 'html',
                                    'filter' => \common\models\client\Client::getFilter(),
                                    'value' => function ($model) {
                                        return '<b>FIO:</b> ' . $model->client->name . ' <br> <b>Telefon:</b> ' . $model->client->phone . ' <br> <b>Manzili:</b> ' . $model->client->address;
                                    }
                                ],
                                [
                                    'attribute' => 'sum',
                                    'format' => 'html',
                                    'value' => function ($model) {
                                        return number_format($model->sum, 2) . ' so\'m';
                                    }
                                ],
                                [
                                    'attribute' => 'status',
                                    'format' => 'html',
                                    'filter' => Orders::getStatusFilter(),
                                    'value' => function ($model) {
                                        return Orders::getStatusName($model->status);
                                    }
                                ],
                                //'user_id',
                                [
                                    'attribute' => 'created',
                                    'value' => function ($model) {
                                        return date('d.m.Y H:i', $model->created);
                                    }
                                ],

                                ['class' => 'yii\grid\ActionColumn',
                                    'template' => '{view} {delete}',
                                    'buttons' => [
                                        'view' => function ($url, $model) {
                                            return Html::a('<span class="fa fa-file-word"></span> Batafsil', $url, [
                                                'title' => Yii::t('app', 'Batafsil'),
                                                'class'=>'btn btn-outline-primary btn-sm btn-block',
                                            ]);
                                        },
                                        'delete' => function ($url, $model) {
                                            return Html::a('<span class="fa fa-trash"></span> Oʻchirish', $url, [
                                                'title' => Yii::t('app', 'Oʻchirish'),
                                                'class'=>'btn btn-outline-danger btn-sm btn-block',
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