<?php

namespace app\components;

use yii\base\Widget;

class CategoriesWidget extends Widget
{
    public $name;

    public function init()
    {
        parent::init();
        if ($this->name === null) {
            $this->name = "test";
        }

        ob_start();
    }

    public function run()
    {
        $content = ob_get_clean();
        $content = mb_strtoupper($content);
        return $this->render('categories', compact('content'));
    }
}