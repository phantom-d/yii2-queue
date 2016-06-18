<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\queue\interfaces;

/**
 * QueueInterface
 *
 * @author Alexander Kochetov <creocoder@gmail.com>
 */
interface QueueInterface
{

	/**
	 * Get channel object
	 *
	 * @param string $name
	 */
	public function getChannel($name);
	
	
}
