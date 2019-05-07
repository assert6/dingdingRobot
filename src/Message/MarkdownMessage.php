<?php


namespace DingRobot\Message;


class MarkdownMessage extends AbstractMessage
{
    use AtTrait;

    protected $msgType = 'markdown';

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $text;

    public function __construct(string $title, string $text)
    {
        $this->title = $title;
        $this->text = $text;
    }

    public function format(): array
    {
        return [
            'msgtype' => $this->msgType,
            'markdown' => [
                'title' => $this->title,
                'text' => $this->text
            ],
            'at' => [
                'atMobiles' => $this->atMobiles,
                'isAtAll' => $this->isAtAll,
            ]
        ];
    }
}