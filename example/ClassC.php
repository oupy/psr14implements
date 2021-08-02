<?php

namespace OupyTest;
  
require_once __DIR__.'/../src/ListenerInterface.php';
use OupyTest\ListenerInterface;
  

//C  也监听这两个事件
Class ClassC implements ListenerInterface
{
 
	public function listen():array
	{
		return [
			EventA::class,
			EventB::class,
		];
	}


	public function hanlde(object $event)
	{
		if($event instanceof EventA){
			echo 'C出去了'.PHP_EOL;
		}else if($event instanceof EventB){
			echo 'C回去工作了'.PHP_EOL;
		}
		return $event;
	}
}