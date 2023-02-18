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
        'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css',
        'https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css',
        'plugins/font-awesome/css/all.min.css',
        'plugins/perfectscroll/perfect-scrollbar.css',
        'plugins/apexcharts/apexcharts.css',
        'css/main.min.css',
        'css/custom.css',
    ];
    public $js = [
        'plugins/jquery/jquery-3.4.1.min.js',
        'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
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
