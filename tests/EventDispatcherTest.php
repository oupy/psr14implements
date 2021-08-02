<?php declare(strict_types=1);
namespace OupyTest;


require_once __DIR__.'/../src/autoload.php';   
require_once __DIR__.'/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

use OupyTest\ListenerProvider;
use OupyTest\EventDispatcher;
use OupyTest\ListenerInterface;


final class EventDispatcherTest extends TestCase
{

    private $listeners;

    protected function setUp(): void
    {
        $this->listeners = $provider = new ListenerProvider();
        $provider->register_listener(new Class() implements ListenerInterface{
            public function listen():array
            {
                return [
                    EventA::class,
                    EventB::class,
                ];
            }


            public function hanlde(object $event)
            {
                echo 'wtf';
                return $event;
            }
        });  
    }

    public function testDispatch(): void
    {

        $dispatcher = new EventDispatcher($this->listeners);
        $event = new Class(){public $info = '这是事件呀';};

        $this->assertSame($event, $dispatcher->dispatch($event));
 
    }
}