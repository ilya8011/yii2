<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\validators;
use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ValidationAsset extends AssetBundle
{
	public $sourcePath = '@yii/assets';
	public $js = array(
		'yii.validation.js',
	);
	public $depends = array(
		'yii\web\YiiAsset',
	);
}
