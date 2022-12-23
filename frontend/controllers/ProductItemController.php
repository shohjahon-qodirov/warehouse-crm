<?php

namespace frontend\controllers;

use common\models\product\Price;
use common\models\product\ProductItem;
use common\models\product\ProductItemSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProductItemController implements the CRUD actions for ProductItem model.
 */
class ProductItemController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all ProductItem models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProductItemSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProductCategory model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
//    public function actionView($id)
//    {
//        return $this->render('view', [
//            'model' => $this->findModel($id),
//        ]);
//    }

    public function actionPrice($id) {
        $priceItems = Price::find()->where(['product_item_id' => $id])->all();
        $model = ProductItem::find()->where(['id' => $id])->one();
        if (!empty($model)){
            $priceForm = new Price();
            $priceForm->product_item_id = $id;
            $priceForm->created = time();
            if ($priceForm->load($this->request->post()) && $priceForm->save()) {
                $model->price = $priceForm->price;
                $model->new_price = $priceForm->new_price;
                $model->save();
                $this->refresh();
            }
            return $this->render('price', [
                'priceItems' => $priceItems,
                'model' => $model,
                'priceForm' => $priceForm,
            ]);
        } else {
            throw new NotFoundHttpException('404 sahifa topilmadi!');
        }
    }

    /**
     * Creates a new ProductItem model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ProductItem();
        $model->product_type_id = 0;
        $model->currency_id = 0;
        $model->barcode = '0';

        if ($this->request->isPost) {
            $price = new Price();
            if ($model->load($this->request->post()) && $model->save()) {
                $price->product_item_id = $model->id;
                $price->type = 0;
                $price->price = $model->price;
                $price->new_price = $model->new_price;
                $price->created = time();
                if ($price->save()){
                    return $this->redirect(['index']);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ProductItem model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ProductItem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ProductItem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return ProductItem the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ProductItem::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
