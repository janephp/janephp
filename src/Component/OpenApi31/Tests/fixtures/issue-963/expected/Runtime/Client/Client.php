<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue963\Runtime\Client;

use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;
use Symfony\Component\Serializer\SerializerInterface;
abstract class Client
{
    public const FETCH_OBJECT = 'object';
    public function __construct(protected readonly ClientInterface $httpClient, protected readonly RequestFactoryInterface $requestFactory, protected readonly SerializerInterface $serializer, protected readonly StreamFactoryInterface $streamFactory)
    {
    }
    public function executeEndpoint(Endpoint $endpoint, string $fetch = self::FETCH_OBJECT): mixed
    {
        return $endpoint->parseResponse($this->processEndpoint($endpoint), $this->serializer, $fetch);
    }
    public function executeRawEndpoint(Endpoint $endpoint): ResponseInterface
    {
        return $this->processEndpoint($endpoint);
    }
    private function processEndpoint(Endpoint $endpoint): ResponseInterface
    {
        [$bodyHeaders, $body] = $endpoint->getBody($this->serializer, $this->streamFactory);
        $queryString = $endpoint->getQueryString();
        $uriGlue = !str_contains($endpoint->getUri(), '?') ? '?' : '&';
        $uri = $queryString !== '' ? $endpoint->getUri() . $uriGlue . $queryString : $endpoint->getUri();
        $request = $this->requestFactory->createRequest($endpoint->getMethod(), $uri);
        if ($body) {
            if ($body instanceof StreamInterface) {
                $request = $request->withBody($body);
            } elseif (is_resource($body)) {
                $request = $request->withBody($this->streamFactory->createStreamFromResource($body));
            } elseif (strlen($body) <= 4000 && @file_exists($body)) {
                // more than 4096 chars will trigger an error
                $request = $request->withBody($this->streamFactory->createStreamFromFile($body));
            } else {
                $request = $request->withBody($this->streamFactory->createStream($body));
            }
        }
        foreach ($endpoint->getHeaders($bodyHeaders) as $name => $value) {
            $request = $request->withHeader($name, !is_bool($value) ? $value : ($value ? 'true' : 'false'));
        }
        $authenticationScopes = $endpoint->getAuthenticationScopes();
        if ([] !== $authenticationScopes) {
            $request = $request->withHeader(AuthenticationRegistry::SCOPES_HEADER, $authenticationScopes);
        }
        return $this->httpClient->sendRequest($request);
    }
}