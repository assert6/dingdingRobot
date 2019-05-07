<?php


namespace DingRobot;


use DingRobot\Message\AbstractMessage;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\ResponseInterface;

abstract class AbstractRobot implements RobotInterface
{
    /**
     * @var ClientInterface
     */
    protected $client;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function send(AbstractMessage $message)
    {
        $response = $this->client->request('POST', $this->getWebhook(), [
            'json' => $message->format(),
        ]);
        return $this->afterSend($response);
    }

    protected function afterSend(ResponseInterface $response): array
    {
        return json_decode($response->getBody()->getContents(), true);
    }
}