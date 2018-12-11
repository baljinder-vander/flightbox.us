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
        'css/bootstrap.css',
		'css/font-awesome.min.css',
        'css/site.css',
        'css/daterangepicker.css',
    ];
    public $js = [
		/*'js/aui-min.js',*/
		'js/bootstrap.min.js',
		'js/custom.js',
		'js/moment.min.js',
		'js/daterangepicker.min.js',
		/* 'js/jquery.lazyloadxt.js', */
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
