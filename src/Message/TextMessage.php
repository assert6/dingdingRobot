<?php


namespace DingRobot\Message;


class TextMessage extends AbstractMessage
{
    use AtTrait;

    protected $msgType = 'text';

    /**
     * @var string
     */
    protected $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function format(): array
    {
        return [
            'msgtype' => $this->msgType,
            'text' => [
                'content' => $this->content
            ],
            'at' => [
                'atMobiles' => $this->atMobiles,
                'isAtAll' => $this->isAtAll,
            ]
        ];
    }
}