<?php


namespace DingRobot;

use DingRobot\Message\AbstractMessage;

interface RobotInterface
{
    public function getWebhook(): string ;
    public function getName(): string ;
    public function send(AbstractMessage $message);
}