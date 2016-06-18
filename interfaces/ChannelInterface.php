<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\queue\interfaces;

/**
 * Channel inteface
 *
 * @author Anton Ermolovich <anton.ermolovich@gmail.com>
 */
interface ChannelInterface
{

	/**
	 * Create channel
	 *
	 * @param array $options
	 */
	public function create(array $options);

	/**
	 * Open channel connection
	 */
	public function open();

	/**
	 * Close channel connection
	 */
	public function close();

	/**
	 * Send data to channel connection
	 *
	 * @param type $name
	 * @param type $data
	 */
	public function send($name, $data);

	/**
	 * Push payload to the queue.
	 *
	 * @param mixed $payload
	 * @param integer $delay
	 * @param string $queue
	 * @return string
	 */
	public function push($payload, $queue, $delay = 0);

	/**
	 * Pops message from the queue.
	 *
	 * @param string $queue
	 * @return array|false
	 */
	public function pop($queue);

	/**
	 * Purge the queue.
	 *
	 * @param string $queue
	 */
	public function purge($queue);

	/**
	 * Release the message.
	 *
	 * @param array $message
	 * @param integer $delay
	 */
	public function release(array $message, $delay = 0);

	/**
	 * Delete the message.
	 *
	 * @param array $message
	 */
	public function delete(array $message);
}
