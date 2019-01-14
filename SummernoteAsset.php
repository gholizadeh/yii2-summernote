<?php

namespace gholizadeh\summernote;

use Yii;
use yii\web\AssetBundle;

class SummernoteAsset extends AssetBundle
{
    /** @var string */
    public $sourcePath = '@bower/summernote/dist';
    /** @var array */
    public $depends = [
        'yii\bootstrap4\BootstrapPluginAsset',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->css[] = 'summernote-bs4.css';
        $this->js[] = 'summernote-bs4.js';

        parent::init();
    }
}
