<?php
 
require_once __DIR__.'/../src/autoload.php';   
 
use OupyTest\ListenerProvider;
use OupyTest\EventDispatcher;

$a = new ClassA();

$b = new ClassB();
$c = new ClassC();

$provider = new ListenerProvider();
$provider->register_listener($c);
$provider->register_listener($b);
$dispatcher = new EventDispatcher($provider);

$dispatcher->dispatch(new EventA());
$a->do();
$dispatcher->dispatch(new EventB());
function formatBytes($bytes, $precision = 2) {
    $units = array("b", "kb", "mb", "gb", "tb");
    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);
    $bytes /= (1 << (10 * $pow));
    return round($bytes, $precision) . " " . $units[$pow];
}
$ddd = memory_get_usage();
$ccc = memory_get_peak_usage(true);

var_dump(formatBytes($ddd));
var_dump(formatBytes($ccc));











