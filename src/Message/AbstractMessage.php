<?php


namespace DingRobot\Message;


abstract class AbstractMessage
{
    protected $msgType;

    abstract public function format(): array ;
}