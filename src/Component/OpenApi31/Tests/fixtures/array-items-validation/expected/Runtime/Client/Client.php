<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ArrayItemsValidation\Runtime\Client;

use Jane\Component\OpenApiRuntime\Client\FetchMode;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Jane\Component\OpenApiRuntime\Client\Result;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;
use Symfony\Contracts\HttpClient\ResponseStreamInterface;
abstract class Client
{
    public function __construct(protected readonly HttpClientInterface $httpClient, protected readonly SerializerInterface $serializer)
    {
    }
    /**
     * Execute the endpoint according to its fetch mode:
     *
     * - eager: blocking request + parse, returns the parsed value (historical
     *   behavior, also used by every mutating verb);
     * - preload: the request is registered immediately, a Result holding the
     *   in-flight response is returned (parse on first access);
     * - lazy: nothing is sent until the Result is first accessed, a Result
     *   holding a deferred send is returned.
     */
    public function executeEndpoint(Endpoint $endpoint): mixed
    {
        return match ($endpoint->getFetchMode()) {
            FetchMode::Eager->value => $endpoint->parseResponse($this->processEndpoint($endpoint), $this->serializer),
            FetchMode::Preload->value => new Result($this->processEndpoint($endpoint), fn(ResponseInterface $response): mixed => $endpoint->parseResponse($response, $this->serializer)),
            default => new Result(fn(): ResponseInterface => $this->processEndpoint($endpoint), fn(ResponseInterface $response): mixed => $endpoint->parseResponse($response, $this->serializer)),
        };
    }
    public function executeRawEndpoint(Endpoint $endpoint): ResponseInterface
    {
        return $this->processEndpoint($endpoint);
    }
    /**
     * Drive a batch of in-flight responses (or Results) concurrently: every
     * request of the client progresses on each tick of the returned stream.
     *
     * @param iterable<ResponseInterface|Result>|ResponseInterface $responses
     */
    public function stream(iterable|ResponseInterface $responses, ?float $timeout = null): ResponseStreamInterface
    {
        $mapped = [];
        foreach ($responses as $response) {
            $mapped[] = $response instanceof Result ? $response->getResponse() : $response;
        }
        return $this->httpClient->stream($mapped, $timeout);
    }
    private function processEndpoint(Endpoint $endpoint): ResponseInterface
    {
        [$bodyHeaders, $body] = $endpoint->getBody($this->serializer);
        $queryString = $endpoint->getQueryString();
        $uriGlue = !str_contains($endpoint->getUri(), '?') ? '?' : '&';
        $uri = $queryString !== '' ? $endpoint->getUri() . $uriGlue . $queryString : $endpoint->getUri();
        $headers = [];
        foreach ($endpoint->getHeaders($bodyHeaders) as $name => $value) {
            $headers[$name] = !is_bool($value) ? $value : ($value ? 'true' : 'false');
        }
        $options = ['headers' => $headers];
        if ($body) {
            if (is_resource($body)) {
                $options['body'] = $body;
            } elseif (is_string($body) && strlen($body) <= 4000 && @file_exists($body)) {
                // more than 4096 chars will trigger an error
                $options['body'] = fopen($body, 'rb');
            } else {
                $options['body'] = $body;
            }
        }
        $authenticationScopes = $endpoint->getAuthenticationScopes();
        if ([] !== $authenticationScopes) {
            $options['extra'][AuthenticationRegistry::SCOPES_OPTION] = $authenticationScopes;
        }
        return $this->httpClient->request($endpoint->getMethod(), $uri, $options);
    }
}