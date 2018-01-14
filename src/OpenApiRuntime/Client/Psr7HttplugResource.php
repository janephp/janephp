<?php

namespace Jane\OpenApiRuntime\Client;

use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use Http\Message\StreamFactory;
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

    /**
     * @var StreamFactory
     */
    protected $streamFactory;

    public function __construct(HttpClient $httpClient, MessageFactory $messageFactory, SerializerInterface $serializer, StreamFactory $streamFactory = null)
    {
        $this->httpClient = $httpClient;
        $this->messageFactory = $messageFactory;
        $this->serializer = $serializer;
        $this->streamFactory = $streamFactory;
    }

    public function executePsr7Endpoint(BaseEndpoint $endpoint, string $fetch = self::FETCH_OBJECT)
    {
        [$bodyHeaders, $body] = $endpoint->getBody($this->serializer, $this->streamFactory);
        $request = $this->messageFactory->createRequest($endpoint->getMethod(), $endpoint->getUri(), $endpoint->getHeaders($bodyHeaders), $body);
        $response = $this->httpClient->sendRequest($request);

        if ($fetch === self::FETCH_OBJECT) {
            return $endpoint->transformResponseBody((string) $response->getBody(), $response->getStatusCode(), $this->serializer);
        }

        return $response;
    }
}
