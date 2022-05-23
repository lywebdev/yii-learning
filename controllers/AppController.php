<?php

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    protected $appName = "Тестовое приложение - обучение Yii";

    public function debug($param)
    {
        echo "<pre>" . print_r($param) . "</pre>";
    }
}

function debug($param)
{
    echo "<pre>" . print_r($param) . "</pre>";
}