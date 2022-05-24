<?php
 use yii\widgets\ActiveForm;
 use yii\helpers\Html;
?>

<?php
$form = ActiveForm::begin(['options' => ['id' => 'testForm', 'method' => 'post']]);
echo $form->field($model, 'title')->input('text', ['placeholder' => 'Введите текст поста'])/*->label('Имя')*/;
//echo $form->field($model, 'email')->input('email', ['placeholder' => 'Укажите email']);
echo $form->field($model, 'text')->label('Текст сообщения')->textarea(['placeholder' => 'Введите текст поста']);
echo Html::submitButton('Отправить', ['class' => 'btn btn-success']);
ActiveForm::end()

?>
