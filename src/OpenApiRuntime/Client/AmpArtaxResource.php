<?php

namespace Jane\OpenApiRuntime\Client;

use Amp\Artax\Client;
use Symfony\Component\Serializer\SerializerInterface;

abstract class AmpArtaxResource extends Resource
{
    /**
     * @var Client
     */
    protected $httpClient;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    public function __construct(Client $httpClient, SerializerInterface $serializer)
    {
        $this->httpClient = $httpClient;
        $this->serializer = $serializer;
    }
}
