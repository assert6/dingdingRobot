<?php


namespace DingRobot\Message;


class LinkMessage extends AbstractMessage
{
    protected $msgType = 'link';

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $text;

    /**
     * @var string
     */
    protected $messageUrl;

    /**
     * @var string
     */
    protected $picUrl;

    public function __construct(string $title, string $text, string $messageUrl)
    {
        $this->title = $title;
        $this->text = $text;
        $this->messageUrl = $messageUrl;
    }

    public function setPicUrl(string $picUrl)
    {
        $this->picUrl = $picUrl;
        return $this;
    }

    public function format(): array
    {
        return [
            'msgtype' => $this->msgType,
            'link' => [
                'text' => $this->text,
                'title' => $this->title,
                'messageUrl' => $this->messageUrl,
                'picUrl' => $this->picUrl,
            ]
        ];
    }
}