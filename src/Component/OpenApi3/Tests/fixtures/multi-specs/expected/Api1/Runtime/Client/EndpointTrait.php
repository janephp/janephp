<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Api1\Runtime\Client;

use Jane\Component\OpenApiRuntime\Client\Exception\InvalidFetchModeException;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;
trait EndpointTrait
{
    public function parseResponse(ResponseInterface $response, SerializerInterface $serializer, string $fetchMode = Client::FETCH_OBJECT)
    {
        if (Client::FETCH_OBJECT === $fetchMode) {
            $contentType = $response->hasHeader('Content-Type') ? current($response->getHeader('Content-Type')) : null;
            return $this->transformResponseBody((string) $response->getBody(), $response->getStatusCode(), $serializer, $contentType);
        }
        if (Client::FETCH_RESPONSE === $fetchMode) {
            return $response;
        }
        throw new InvalidFetchModeException(sprintf('Fetch mode %s is not supported', $fetchMode));
    }
    protected abstract function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null);
}