<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\helpers\Url;
use yii\helpers\Html;

$url = Yii::$app->request->url;
$controller = Yii::$app->controller->id;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body <?php if (!Yii::$app->user->isGuest):?>class="login-page"<?php endif;?>>
    <?php $this->beginBody() ?>
    <div class='loader'>
        <div class='spinner-grow text-primary' role='status'>
            <span class='sr-only'>Yuklanmoqda...</span>
        </div>
    </div>
    <?php if (Yii::$app->user->isGuest):?>
    <div class="page-container">
        <div class="page-header">
            <nav class="navbar navbar-expand-lg d-flex justify-content-between">
                <div class="" id="navbarNav">
                    <ul class="navbar-nav" id="leftNav">
                        <li class="nav-item">
                            <a class="nav-link" id="sidebar-toggle" href="javascript::void()"><i data-feather="arrow-left"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=Yii::$app->homeUrl?>">
                                Bosh sahifa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=Url::to(['user/password'])?>">
                                Parolni o'zgartirish
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="logo">
                    <a class="navbar-brand" href="<?=Yii::$app->homeUrl?>" style="background: url(<?=Yii::$app->request->baseUrl?>/static/logo.jpg) center center no-repeat; background-size: cover;">

                    </a>
                </div>
                <div class="" id="headerNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript::void()" style="padding: 20px 0;">
                            <span>
                                <?=Yii::$app->user->identity->username?>
                            </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript::void()">
                                <img src="<?=Yii::$app->request->baseUrl?>/static/avatar.png" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="page-sidebar">
            <ul class="list-unstyled accordion-menu">
                <li class="sidebar-title">
                    Bosh sahifa
                </li>
                <li <?php if ($url == '/'){?>class="active-page"<?php }?>>
                    <a href="<?=Yii::$app->homeUrl?>">
                        <i data-feather="home"></i>
                        Bosh sahifa
                    </a>
                </li>
                <li class="sidebar-title">
                    Do'kon
                </li>
                <li <?php if ($url == '/order/index' || $controller == 'order'){?>class="active-page"<?php }?>>
                    <a href="<?=Url::to(['order/index'])?>">
                        <i data-feather="shopping-cart"></i>
                        Kassa
                    </a>
                </li>
                <li class="sidebar-title">
                    Tovarlar
                </li>
                <li <?php if ($url == '/product/index' || $controller == 'product'){?>class="active-page"<?php }?>>
                    <a href="/product/index">
                        <i data-feather="box"></i>
                        Barcha tovarlar
                    </a>
                </li>
                <li class="sidebar-title">
                    Mijozlar
                </li>
                <li <?php if ($url == '/client/index' || $controller == 'client'){?>class="active-page"<?php }?>>
                    <a href="<?=Url::to(['client/index'])?>">
                        <i data-feather="users"></i>
                        Barcha mijozlar
                    </a>
                </li>
                <li <?php if ($url == '/client/index' || $controller == 'client'){?>class="active-page"<?php }?>>
                    <a href="<?=Url::to(['client/index'])?>">
                        <i data-feather="user-minus"></i>
                        Qarzdor mijozlar
                    </a>
                </li>
                <li class="sidebar-title">
                    Sozlamalar
                </li>
                <li <?php if ($url == '/user/index' || $url == '/user/create'){?>class="active-page"<?php }?>>
                    <a href="<?=Url::to(['user/index'])?>">
                        <i data-feather="user-plus"></i>
                        Foydalanuvchilar
                    </a>
                </li>
                <li <?php if ($url == '/user/password'){?>class="active-page"<?php }?>>
                    <a href="<?=Url::to(['user/password'])?>">
                        <i data-feather="settings"></i>
                        Parolni o'zgartirish
                    </a>
                </li>
                <li>
                    <a href="<?=Url::to(['site/logout'])?>">
                        <i data-feather="x-square"></i>
                        Chiqish
                    </a>
                </li>
            </ul>
        </div>
        <?php endif;?>

        <?= $content ?>
        <?php if (!Yii::$app->user->isGuest):?>
    </div>
    <?php endif;?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
