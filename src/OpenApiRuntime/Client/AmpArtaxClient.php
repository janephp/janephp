<?php

namespace Jane\OpenApiRuntime\Client;

use Amp\Artax\Client as ArtaxClient;
use Amp\Artax\Request;
use function Amp\call;
use Amp\Promise;
use Symfony\Component\Serializer\SerializerInterface;

abstract class AmpArtaxClient extends Client
{
    /**
     * @var ArtaxClient
     */
    protected $httpClient;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    public function __construct(ArtaxClient $httpClient, SerializerInterface $serializer)
    {
        $this->httpClient = $httpClient;
        $this->serializer = $serializer;
    }

    public function executeArtaxEndpoint(AmpArtaxEndpoint $endpoint, string $fetch = self::FETCH_OBJECT): Promise
    {
        return call(function () use ($endpoint, $fetch) {
            [$bodyHeaders, $body] = $endpoint->getBody($this->serializer);
            $queryString = $endpoint->getQueryString();
            $uri = $queryString !== '' ? $endpoint->getUri() . '?' . $queryString : $endpoint->getUri();
            $request = new Request($uri, $endpoint->getMethod());
            $request = $request->withBody($body);
            $request = $request->withHeaders($endpoint->getHeaders($bodyHeaders));

            return $endpoint->parseArtaxResponse(yield $this->httpClient->request($request), $this->serializer, $fetch);
        });
    }
}
