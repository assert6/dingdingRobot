<?php

namespace DingRobotTest\Robot;

use DingRobot\AbstractRobot;

class Test2Robot extends AbstractRobot
{
    public function getWebhook(): string
    {
        return 'https://oapi.dingtalk.com/robot/send?access_token=';
    }

    public function getName(): string
    {
        return '测试多机器人';
    }
}