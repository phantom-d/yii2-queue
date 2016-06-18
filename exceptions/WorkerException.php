<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\queue\exceptions;

/**
 * WorkerException
 *
 * @author Alexander Kochetov <creocoder@gmail.com>
 */
class WorkerException extends \yii\base\Exception
{

	/**
	 * @inheritdoc
	 */
	public function getName()
	{
		return 'Worker Exception';
	}

}
