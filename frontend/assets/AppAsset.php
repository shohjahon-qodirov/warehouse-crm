<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap',
        'plugins/bootstrap/css/bootstrap.min.css',
        'plugins/font-awesome/css/all.min.css',
        'plugins/perfectscroll/perfect-scrollbar.css',
        'plugins/apexcharts/apexcharts.css',
        'css/main.min.css',
        'css/custom.css',
    ];
    public $js = [
        'plugins/jquery/jquery-3.4.1.min.js',
        'js/popper.min.js',
        'plugins/bootstrap/js/bootstrap.min.js',
        'js/feather.min.js',
        'plugins/perfectscroll/perfect-scrollbar.min.js',
        //'plugins/apexcharts/apexcharts.min.js',
        'js/main.min.js',
        //'js/pages/dashboard.js',
        'js/default.js',
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap4\BootstrapAsset',
    ];
}
