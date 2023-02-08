<?php

namespace frontend\controllers;

use common\models\product\Price;
use common\models\product\Product;
use common\models\product\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
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
     * Lists all Product models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionPrice($id) {
        $priceItems = Price::find()->where(['product_item_id' => $id])->all();
        $model = Product::find()->where(['id' => $id])->one();
        if (!empty($model) || (!empty($model->price) && !empty($model->new_price))){
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
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Product();
        $model->barcode = '0';

        if ($this->request->isPost) {
            $price = new Price();
            if ($model->load($this->request->post()) && $model->save()) {
                if ($model->price && $model->new_price) {
                    $price->product_item_id = $model->id;
                    $price->type = 0;
                    $price->price = $model->price;
                    $price->new_price = $model->new_price;
                    $price->created = time();
                    if ($price->save()) {
                        return $this->redirect(['index']);
                    }
                } else {
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
     * Updates an existing Product model.
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
     * Deletes an existing Product model.
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
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
