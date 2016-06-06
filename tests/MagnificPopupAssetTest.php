<?php

namespace yii\jquery\magnificpopup\tests;

use yii\helpers\FileHelper;
use yii\jquery\magnificpopup\MagnificPopupAsset;
use yii\phpunit\TestCase;
use Yii;

class MagnificPopupAssetTest extends TestCase
{

    /**
     * @inheritdoc
     */
    protected function setUp()
    {
        parent::setUp();
        foreach (glob(Yii::$app->getAssetManager()->basePath . DIRECTORY_SEPARATOR . '*', GLOB_ONLYDIR) as $dir) {
            FileHelper::removeDirectory($dir);
            $this->assertFalse(is_dir($dir));
        }
    }

    public function testBundle()
    {
        $bundle = Yii::$app->getAssetManager()->getBundle(MagnificPopupAsset::className());
        $this->assertInstanceOf('yii\jquery\magnificpopup\MagnificPopupAsset', $bundle);
        $this->assertArrayHasKey(0, $bundle->depends);
        $this->assertEquals('yii\web\JqueryAsset', $bundle->depends[0]);
        $this->assertArrayHasKey(0, $bundle->js);
        $this->assertFileExists($bundle->basePath . DIRECTORY_SEPARATOR . $bundle->js[0]);
        $this->assertArrayHasKey(0, $bundle->css);
        $this->assertFileExists($bundle->basePath . DIRECTORY_SEPARATOR . $bundle->css[0]);
    }
}
