<?php 
  
require_once __DIR__.'/../src/autoload.php';   
 
use OupyTest\ListenerInterface;

//B
Class ClassB implements ListenerInterface
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
			echo 'B出去了'.PHP_EOL;
			$event->setPropagationStopped(true);
		}else if($event instanceof EventB){
			echo 'B回去工作了'.PHP_EOL;
		}
		return $event;
	}

}