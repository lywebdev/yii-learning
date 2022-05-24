<?php

namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class TestForm extends Post
{
//    public $title;
//    public $email;
//    public $text;

//    public static function tableName()
//    {
//        return 'posts';
//    }

    public function formName()
    {
        return "post";
    }

    public function attributeLabels() {
        return [
            'title' => 'Название поста',
            'text' => 'Текст поста'
        ];
    }

    public function rules() {
        return [
            [['title'], 'required', 'message' => 'Поле обязательно'],
            [['text'], 'string']
//            ['email', 'email'],
//            ['name', 'string', 'min' => 2, 'tooShort' => 'Короткое имя'],
//            ['name', 'string', 'max' => 99, 'tooLong' => 'Длинное имя'],
//            ['name', 'string', 'length' => [2,99]],

//            ['name' => 'myRule']
        ];
    }

//    public function myRule($attr) {
//        if ( !in_array($this->attrs, ['leonid', 'vasiliy'])) {
//            $this->addError($attr, 'Wrong');
//        }
//    }
}