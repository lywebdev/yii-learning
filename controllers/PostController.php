<?php

namespace app\controllers;

use Yii;

class PostController extends AppController
{
    public function actionTest()
    {
        $this->debug(Yii::$app);

        return $this->render('test');
    }
}