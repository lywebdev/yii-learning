<?php

namespace app\models;

use yii\base\Model;

class TestForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function attributeLabels() {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'text' => 'Текст сообщения'
        ];
    }

    public function rules() {
        return [
            [['name', 'email'], 'required', 'message' => 'Поле обязательно'],
            ['email', 'email'],
            ['name', 'string', 'min' => 2, 'tooShort' => 'Короткое имя'],
            ['name', 'string', 'max' => 99, 'tooLong' => 'Длинное имя'],
            ['name', 'string', 'length' => [2,99]],

//            ['name' => 'myRule']
        ];
    }

//    public function myRule($attr) {
//        if ( !in_array($this->attrs, ['leonid', 'vasiliy'])) {
//            $this->addError($attr, 'Wrong');
//        }
//    }
}