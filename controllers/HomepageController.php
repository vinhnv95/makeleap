<?php

namespace app\controllers;

class HomepageController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'homepage';
        return $this->render('index');
    }

}
