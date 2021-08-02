<?php
namespace OupyTest;

require 'vendor/autoload.php';
require_once 'ListenerData.php';


use Psr\EventDispatcher\ListenerProviderInterface;
use SplPriorityQueue;
use OupyTest\ListenerData;
/**
 * 
 */
class ListenerProvider implements ListenerProviderInterface
{
	
	public $listenerData = [];


	public function getListenersForEvent(object $event):iterable
	{
		$queue = new SplPriorityQueue();
		$i =1;
        foreach ($this->listenerData as $listener) { 
            if ($event instanceof $listener->event) {
                $queue->insert($listener->listener, $i);
                $i++;
            }
        }
        return $queue;
	}


	public function register_listener(ListenerInterface $listener)
	{ 
		foreach ($listener->listen() as $event) { 
			array_push($this->listenerData, new ListenerData($event,[$listener,'hanlde']));
		}
	}

}










