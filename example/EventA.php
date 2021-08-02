<?php

namespace OupyTest;
require 'vendor/autoload.php';
use Psr\EventDispatcher\StoppableEventInterface;

//准备打扫事件
Class EventA implements StoppableEventInterface
{
	public $info = '准备打扫了'.PHP_EOL;

	public $isProStop  = false;


	public function isPropagationStopped() : bool
	{
		return $this->isProStop;
	}


	public function setPropagationStopped(bool $ret)
	{
		$this->isProStop = $ret;
	}


}