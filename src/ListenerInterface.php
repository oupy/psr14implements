<?php
namespace Test;

interface ListenerInterface
{

	public function listen():array;

	public function hanlde(object $event);

}