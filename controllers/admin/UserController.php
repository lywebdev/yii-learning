<?php

namespace app\controllers\admin;

use yii\web\Controller;

class UserController extends Controller
{
    public function actionHome()
    {
        return $this->render('home');
    }
}