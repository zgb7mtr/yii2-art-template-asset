<?php
/**
 * @author Tommy Zheng <tommy@vlv.pw>
 * @link https://github.com/zgb7mtr/yii2-artTemplate
 */
namespace zgb7mtr\artTemplate;

use yii\web\AssetBundle;

class ArtTemplateAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/aui/artTemplate/dist';
    public $nativeVersion = false;

    public function init()
    {
        parent::init();
        if($this->nativeVersion){
            $this->js[] = YII_DEBUG ? 'template-native-debug.js' : 'template-native.js';
        }else{
            $this->js[] = YII_DEBUG ? 'template-debug.js' : 'template.js';
        }
    }
}