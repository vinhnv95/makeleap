<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\LoginAsset;
use app\web\images;

LoginAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>

<body>
<div>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">WebSiteName</a>
            </div>

            <ul class="dropdown nav navbar-nav navbar-right">
                <li>
                    <a href="" class="dropdown-toggle">English
                        <b class="caret"></b></a>
                </li>
            </ul>
            <ul class="dropdown-menu">
                <li>
                    <button type="submit">nihongo</button>
                </li>
                <li>
                    <button type="submit">english</button>
                </li>
            </ul>

        </div>
    </nav>
</div>
<div >
<!--    <a href="https://www.makeleaps.com/en/"><img class="img-header" src="web/images/makeleaps_logo.jpg">-->
        <img class="logo" src="web/images/makeleaps_logo.jpg" width="780" height="132" ">
</div>
<?php
    $this->beginBody();
?>
<?= $content?>
<?php
    $this->endBody();
?>
<footer class="footer">
    <a href="https://www.makeleaps.jp/blog/en/">Blog</a>
    <a href="https://www.makeleaps.com/en/about-us/">About</a>
    <a href="https://www.makeleaps.jp/makeleaps%E3%83%9E%E3%83%8B%E3%83%A5%E3%82%A2%E3%83%AB/">Manual</a>
    <a href="https://www.makeleaps.com/en/q-a/">Q&A</a>
</footer>
</body>

</html>
<?php $this->endPage() ?>
