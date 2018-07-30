<?php

/**
 * @copyright Copyright &copy; Bruno H. G. Gouvêa
 * @package yii2-jsbeautify
 */

namespace brunohenriquebh\jsbeautify;

use yii\web\AssetBundle;

/**
 * Js-beautfy bundle for \brunohenriquebh\CodeMirror
 *
 * @author Bruno H. Gouvêa <brunohenriquebh@gmail.com>
 * @since 1.0.0
 */
class JsBeautifyAsset extends AssetBundle
{
    public $sourcePath = '@npm/js-beautify/js/lib';

    /**
     * Register required assets
     */
    public function init()
    {
        parent::init();
        $this->js = array_merge(['beautify.js', 'beautify-css.js','beautify-html.js'], $this->js);
    }

}
