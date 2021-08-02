<?php

spl_autoload_register(function($class){
	$classes = [
		'OupyTest\\EventDispatcher' => '/src/EventDispatcher.php',
		'OupyTest\\ListenerData' => '/src/ListenerData.php',
		'OupyTest\\ListenerInterface' => '/src/ListenerInterface.php',
		'OupyTest\\ListenerProvider' => '/src/ListenerProvider.php',
		'ClassA' => '/example/ClassA.php',
		'ClassB' => '/example/ClassB.php',
		'ClassC' => '/example/ClassC.php',
		'EventA' => '/example/EventA.php',
		'EventB' => '/example/EventB.php',
		'OupyTest\\EventDispatcherTest' => '/tests/EventDispatcherTest.php',
	];   
    if (isset($classes[$class])) { 
        require __DIR__ .'/../'. $classes[$class];
    } 
},true,true);