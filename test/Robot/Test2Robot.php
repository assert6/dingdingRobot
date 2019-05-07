<?php

namespace DingRobotTest\Robot;

use DingRobot\AbstractRobot;

class Test2Robot extends AbstractRobot
{
    public function getWebhook(): string
    {
        return 'https://oapi.dingtalk.com/robot/send?access_token=4fa81f4c84335dabe7b979d4b2841f45a345b37951fd83f4f8b1063ecd84ac71';
    }

    public function getName(): string
    {
        return '测试多机器人';
    }
}