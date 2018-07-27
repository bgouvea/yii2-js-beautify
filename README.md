Js-beautify
==========
This little beautifier will reformat and reindent bookmarklets, ugly JavaScript, unpack scripts packed by Dean Edward’s popular packer, as well as deobfuscate scripts processed by javascriptobfuscator.com.  Extension for Yii2.

[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist brunohenriquebh/yii2-js-beautify "*"
```

or add

```
"brunohenriquebh/yii2-js-beautify": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php

<?php 

use leandrogehlen\codemirror\CodeMirror;

<?= $form->field($file, 'description')->widget(CodeMirror::className(), [
    'pluginOptions' => [
        'mode' => 'application/x-httpd-php', 
        'theme' => 'solarized dark',
        ...
    ]
]);

?>
```

