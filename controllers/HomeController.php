<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 30/09/2016
 * Time: 09:26
 */

namespace app\controllers;

use yii\filters\AccessControl;
use yii\web\Controller;
use Yii;
use app\models\User;

class HomeController extends Controller
{
    public function actionIndex(){
        $model = new User();
        $this->layout = 'main';
        if ($model->load(Yii::$app->request->post()))
        {
            $request = Yii::$app->request->post('User');
            $username = $request['username'];
            $password = $request['password'];
            if($model->checkLogin($username,$password)) {
                Yii::$app->session->setFlash('LoginOk');
                return $this->redirect('@web/homepage/index');
            }
            else
                Yii::$app->session->setFlash('LoginFail');
        }

       return $this->render('index',['model'=>$model]);
    }
    public function actionCreate(){
        return $this->render('create');
    }

}