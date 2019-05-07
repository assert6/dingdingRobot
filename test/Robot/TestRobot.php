<?php

namespace DingRobotTest\Robot;

use DingRobot\AbstractRobot;

class TestRobot extends AbstractRobot
{
    public function getWebhook(): string
    {
        return 'https://oapi.dingtalk.com/robot/send?access_token=';
    }

    public function getName(): string
    {
        return '自定义';
    }
}