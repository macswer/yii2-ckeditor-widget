<?php
/**
 * @copyright Copyright (c) 2013-2015 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace macswer\ckeditor;

use yii\web\AssetBundle;

/**
 * CKEditorWidgetAsset
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package macswer\ckeditor
 */
class CKEditorWidgetAsset extends AssetBundle
{
    public $depends = [
        'macswer\ckeditor\CKEditorAsset'
    ];
    public $js = [
        'dosamigos-ckeditor.widget.js'
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        $this->publishOptions = [
		'except' => [
			'ckeditor/',
		]
	];
        parent::init();
    }
}
