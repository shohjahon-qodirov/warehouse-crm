<?php

namespace api\controllers;

use api\models\user\ApiLogin;
use common\models\User;
use Yii;
use yii\rest\Controller;

class AuthController extends Controller
{

    public $modelClass = 'api\models\user\Users';

    public function actions()
    {
        $actions = parent::actions();

        // disable the "delete" and "create" actions
        unset($actions['index']);
        unset($actions['view']);
        unset($actions['create']);
        unset($actions['update']);
        unset($actions['delete']);

        return $actions;
    }

    public function actionLogin()
    {
        $model = new ApiLogin();
        if ($model->load(Yii::$app->request->post(), '') && ($token = $model->login())){
            $user = User::find()->where(['username' => $model->username])->one();
            $result = ['data' => [
                'message' => 'token_generated',
                'token' => $token,
                'data' => $model,
                'user_id' => $user->id,
            ]];
            return $result;
        }else{
            return $model;
        }
    }

}