<?php
use yii\helpers\Url;

?>
<ul class="metismenu list-unstyled" id="side-menu">
    <li class="menu-title" key="t-menu">
        Statistika
    </li>

    <li>
        <a href="<?=Yii::$app->homeUrl?>" class="waves-effect">
            <i class="bx bx-home-circle"></i>
            <span key="t-dashboards">
                Bosh sahifa
            </span>
        </a>

    </li>

    <li>
        <a href="javascript: void(0);" class="waves-effect">
            <i class="bx bx-food-menu"></i>
            <span class="badge rounded-pill bg-success float-end">
                Yangi
            </span>
            <span key="t-dashboards">
                Arizalar
            </span>
        </a>
        <ul class="sub-menu mm-collapse" aria-expanded="false">
            <a href="<?=Url::to(['application-hostel/index'])?>" key="t-dashboards">
                <i class="bx bxs-hotel"></i>
                Yotoqxona uchun
            </a>
        </ul>
    </li>

    <li>
        <a href="<?=Url::to(['users/index'])?>" class="waves-effect">
            <i class="bx bx-user-check"></i>
            <span key="t-dashboards">
                Tizim foydalanuvchilari
            </span>
        </a>

    </li>

    <li class="menu-title" key="t-apps">
        Sayt boshqaruvi
    </li>

    <li>
        <a href="<?=Url::to(['page/index'])?>" class="waves-effect">
            <i class="mdi mdi-stretch-to-page"></i>
            <span key="t-dashboards">
                Sahifalar
            </span>
        </a>
    </li>

    <li>
        <a href="<?=Url::to(['menu/index'])?>" class="waves-effect">
            <i class="bx bx-menu"></i>
            <span key="t-dashboards">
                Menyular
            </span>
        </a>
    </li>

    <li>
        <a href="<?=Url::to(['translate/index'])?>" class="waves-effect">
            <i class="bx bx-globe"></i>
            <span key="t-chat">
                Tarjimalar
            </span>
        </a>
    </li>

    <li>
        <a href="<?=Url::to(['site/logout'])?>" class="waves-effect">
            <i class="bx bx-log-out"></i>
            <span key="t-chat">
                Chiqish
            </span>
        </a>
    </li>

</ul>
