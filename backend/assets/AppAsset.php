<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'libs/select2/css/select2.min.css',
        'libs/dropzone/min/dropzone.min.css',
        'css/bootstrap.min.css',
        'css/icons.min.css',
        'css/app.min.css',
    ];
    public $js = [
        //'libs/jquery/jquery.min.js',
        'libs/bootstrap/js/bootstrap.bundle.min.js',
        'libs/metismenu/metisMenu.min.js',
        'libs/simplebar/simplebar.min.js',
        'libs/node-waves/waves.min.js',
        'libs/select2/js/select2.min.js',
        'libs/dropzone/min/dropzone.min.js',
        'js/pages/ecommerce-select2.init.js',
//        'libs/apexcharts/apexcharts.min.js',
//        'js/pages/dashboard.init.js',
        'js/app.js',
    ];
}
