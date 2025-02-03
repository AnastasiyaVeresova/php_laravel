<?php

namespace App\Services;
use Twilio\Rest\Client as TwilioClient;

class SmsSenderService implements SmsSenderInterface
{
    protected $client;
    public function __constructor($sid, $token)
    {
        $this->client = new TwilioClient($sid, $token);
    }
    public function send($message)
    {
        $this->client->messages->create(
            89115555555,
            [
                'from' => 89213333333,
                'body' => 'bread'
            ]
        );
    }
}
