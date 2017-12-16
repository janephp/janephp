<?php

namespace Jane\OpenApiRuntime\Client;

use Http\Client\Common\FlexibleHttpClient;
use Http\Client\HttpAsyncClient;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use Symfony\Component\Serializer\SerializerInterface;

abstract class Psr7HttplugResource extends Resource
{
    /**
     * @var HttpClient
     */
    protected $httpClient;

    /**
     * @var MessageFactory
     */
    protected $messageFactory;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    public function __construct(HttpClient $httpClient, MessageFactory $messageFactory, SerializerInterface $serializer)
    {
        $this->httpClient = $httpClient;
        $this->messageFactory = $messageFactory;
        $this->serializer = $serializer;
    }
}
