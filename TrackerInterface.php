<?php

namespace Tirna\KissmetricsBundle;

use Tirna\KissmetricsBundle\Queue;

interface TrackerInterface {

	public function setApiKey($apiKey);
	public function getApiKey();
	public function setConfig(array $config = array());
	public function getConfig();
	public function getIdentifier();
	public function hasItem(Queue\Item $item);
	public function addItem(Queue\Item $item);
	public function removeItem(Queue\Item $item);
	public function hasQueue();
	public function setQueue($queue);
	public function getQueue();
	public function addIdentify($name);
	public function addRecord($name, $properties = null);
	public function addSet($properties);
	public function addAlias($identity, $associate);

}
