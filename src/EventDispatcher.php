<?php
namespace Test;

require 'vendor/autoload.php';

use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\EventDispatcher\ListenerProviderInterface;
use Psr\EventDispatcher\StoppableEventInterface;


/**
 * 
 */
class EventDispatcher implements EventDispatcherInterface
{
	

	private $listeners;

	public function __construct(ListenerProviderInterface $listeners)
	{
		$this->listeners = $listeners;
	}


 	public function dispatch(object $event)
 	{
        echo '事件：'.$event->info;
        foreach ($this->listeners->getListenersForEvent($event) as $listener) {
            $returnedEvent = $listener($event);  
            if ($returnedEvent instanceof StoppableEventInterface && $returnedEvent->isPropagationStopped()) {
                echo '事件打断'.PHP_EOL;
                break;
            }
        }
        return $event;
 	}

}










