<?php

$_SERVER['SCRIPT_NAME'] = '/tests/' . basename(__FILE__);
$_SERVER['SCRIPT_FILENAME'] = __FILE__;

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

Yii::setAlias('@tests/jquery/magnificpopup', __DIR__);
