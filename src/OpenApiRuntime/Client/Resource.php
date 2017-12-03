<?php

namespace Jane\OpenApiRuntime\Client;

use Http\Client\Common\FlexibleHttpClient;
use Http\Client\HttpAsyncClient;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use Symfony\Component\Serializer\SerializerInterface;

abstract class Resource
{
    public const FETCH_RESPONSE = 'response';
    public const FETCH_OBJECT = 'object';
    public const FETCH_PROMISE = 'promise';

    /**
     * @var HttpClient|HttpAsyncClient
     */
    protected $httpAsyncClient;

    /**
     * @var MessageFactory
     */
    protected $messageFactory;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    public function __construct($httpClient, MessageFactory $messageFactory, SerializerInterface $serializer)
    {
        $this->httpClient = new FlexibleHttpClient($httpClient);
        $this->messageFactory = $messageFactory;
        $this->serializer = $serializer;
    }
}
