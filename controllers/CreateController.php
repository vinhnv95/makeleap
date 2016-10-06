<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 30/09/2016
 * Time: 16:37
 */

namespace app\controllers;


use yii\web\Controller;
use app\models\User;

class CreateController extends Controller
{
    public function actionIndex()
    {
    	$model = new User();   
        return $this->render('index',['model'=>$model]);
    }
    
}