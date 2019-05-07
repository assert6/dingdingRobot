<?php

namespace DingRobotTest\Robot;

use DingRobot\AbstractRobot;

class TestRobot extends AbstractRobot
{
    public function getWebhook(): string
    {
        return 'https://oapi.dingtalk.com/robot/send?access_token=5017b6f3e127b6d827370003b1ab7fb269ba7fb2f778e6339ea33a68698a0cee';
    }

    public function getName(): string
    {
        return '自定义';
    }
}