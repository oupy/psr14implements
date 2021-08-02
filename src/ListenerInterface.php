<?php
namespace OupyTest;

interface ListenerInterface
{

	public function listen():array;

	public function hanlde(object $event);

}