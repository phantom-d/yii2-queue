<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\queue;

/**
 * Description of QueueAbstract
 *
 * @author phantom
 */
class QueueAbstract
{

	public $driver;

	public function getDriver()
	{
		if (is_array($this->driver)) {
			return \Yii::createObject($this->driver);
		} elseif (class_exists($this->driver)) {
			return \Yii::createObject($this->driver);
		} elseif (\Yii::$app->has($this->driver)) {
			return \Yii::$app->get($this->driver);
		}
		throw new \yii\base\InvalidParamException();
	}

}
