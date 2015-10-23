<?php

namespace yii\jquery\magnificpopup;

use yii\web\AssetBundle;

class MagnificPopupAsset extends AssetBundle
{

    public $sourcePath = '@bower/magnific-popup/dist';

    public $depends = ['yii\web\JqueryAsset'];

    public $js = ['jquery.magnific-popup.min.js'];

    public $css = ['magnific-popup.css'];
}
