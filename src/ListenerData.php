<?php
namespace Test;

class ListenerData
{
    /**
     * @var string
     */
    public $event;

    /**
     * @var callable
     */
    public $listener;

 

    public function __construct(string $event, callable $listener)
    {
        $this->event = $event;
        $this->listener = $listener; 
    }
}
