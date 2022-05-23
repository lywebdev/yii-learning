<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;


class TestController extends AppController
{
    public function actionTest($postId = null)
    {
        $testMsg = "Test message for view";
        return $this->render('test', ['message' => $testMsg, 'postId' => $postId]);
    }
}