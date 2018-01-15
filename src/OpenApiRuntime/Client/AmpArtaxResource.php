<?php

namespace Jane\OpenApiRuntime\Client;

use Amp\Artax\Client;
use Amp\Artax\Request;
use Amp\Artax\Response;
use function Amp\call;
use Amp\Promise;
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

    public function executeArtaxEndpoint(BaseEndpoint $endpoint, string $fetch = self::FETCH_OBJECT): Promise
    {
        return call(function () use ($endpoint, $fetch) {
            [$bodyHeaders, $body] = $endpoint->getBody($this->serializer);
            $request = new Request($endpoint->getUri() . '?' . $endpoint->getQueryString(), $endpoint->getMethod());
            $request = $request->withBody($body);
            $request = $request->withHeaders($endpoint->getHeaders($bodyHeaders));

            /** @var Response $response */
            $response = yield $this->httpClient->request($request);

            if ($fetch === self::FETCH_OBJECT) {
                return $endpoint->transformResponseBody(yield $response->getBody(), $response->getStatus(), $this->serializer);
            }

            return $response;
        });
    }
}
