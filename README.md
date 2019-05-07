# 如何使用
## 安装组件
>composer require zcmzc/dingding-robot
## 新建Robot 类
```php
<?php

namespace DingRobotTest\Robot;

class TestRobot extends \DingRobot\AbstractRobot
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
``` 
## 发送信息
```php
<?php
use DingRobotTest\Robot\TestRobot;
use GuzzleHttp\Client;
use DingRobot\Message\TextMessage;

(new TestRobot(new Client()))->send(new TextMessage('这是测试消息'));
```
