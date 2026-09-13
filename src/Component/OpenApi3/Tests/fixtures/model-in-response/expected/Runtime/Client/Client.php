<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Runtime\Client;

use Jane\Component\OpenApiRuntime\Client\FetchMode;
use Jane\Component\OpenApiRuntime\Client\GhostFactory;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
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
     * - preload: the request is registered immediately and travels via the
     *   first access of the returned proxy;
     * - lazy: nothing is sent until the proxy is first accessed, where the
     *   request is sent and parsed through the endpoint's own status-code
     *   mapping.
     *
     * The returned value is a lazy ghost proxy of the endpoint's target model
     * class: reading any property triggers the request + parse and copies the
     * parsed model's properties onto the proxy. Endpoints whose success
     * response is not a single generated model (JSON arrays and maps, scalar
     * bodies, multi-content-type responses...) are not ghostable: their mode
     * degrades to the eager behavior.
     */
    public function executeEndpoint(Endpoint $endpoint): mixed
    {
        return match ($endpoint->getFetchMode()) {
            FetchMode::Eager->value => $endpoint->parseResponse($this->processEndpoint($endpoint), $this->serializer),
            FetchMode::Preload->value, FetchMode::Lazy->value => $this->executeDeferredEndpoint($endpoint),
            default => $endpoint->parseResponse($this->processEndpoint($endpoint), $this->serializer),
        };
    }
    private function executeDeferredEndpoint(Endpoint $endpoint): mixed
    {
        $targetClass = GhostFactory::canCreate() ? $endpoint->getTargetClass() : null;
        if (null === $targetClass) {
            return $endpoint->parseResponse($this->processEndpoint($endpoint), $this->serializer);
        }
        // preload registers the request immediately (the transfer still
        // progresses at the first tick); for lazy this closure runs on first
        // access of the proxy only.
        $response = FetchMode::Preload->value === $endpoint->getFetchMode() ? $this->processEndpoint($endpoint) : null;
        $proxy = GhostFactory::create($targetClass, fn(): mixed => $endpoint->parseResponse($response ?? $this->processEndpoint($endpoint), $this->serializer));
        return $proxy;
    }
    public function executeRawEndpoint(Endpoint $endpoint): ResponseInterface
    {
        return $this->processEndpoint($endpoint);
    }
    /**
     * Drive a batch of in-flight responses concurrently: every request of the
     * client progresses on each tick of the returned stream.
     *
     * Ghost proxies are not streamable: build responses with
     * executeRawEndpoint() to batch them.
     *
     * @param iterable<ResponseInterface>|ResponseInterface $responses
     */
    public function stream(iterable|ResponseInterface $responses, ?float $timeout = null): ResponseStreamInterface
    {
        if ($responses instanceof ResponseInterface) {
            $responses = [$responses];
        }
        return $this->httpClient->stream($responses, $timeout);
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