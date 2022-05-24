<?php

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Блог | <?= $this->title ?></title>

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="app">

    <header id="header" class="header container">
        <h1>Blog</h1>
        <nav id="sidebar" class="sidebar">
            <ul>
                <li><?= Html::a('Главная', '/') ?></li>
                <li><?= Html::a('Блог', ['post/index']) ?></li>
            </ul>
        </nav>
    </header>
    <section id="content" class="content container">
        <?php
            if (isset($this->blocks['block1'])) {
                echo $this->blocks['block1'];
            }
        ?>

        <?= $content ?>
    </section>
<!--    <footer id="footer" class="footer container">-->
<!--        <p>Blog Section Footer</p>-->
<!--    </footer>-->
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>