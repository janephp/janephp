<?php

declare(strict_types=1);

namespace Jane\OpenApiRuntime\Client;

use Jane\OpenApiRuntime\Client\Exception\InvalidFetchModeException;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

trait Psr7HttplugEndpointTrait
{
    abstract protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer);

    public function parsePSR7Response(ResponseInterface $response, SerializerInterface $serializer, string $fetchMode = Client::FETCH_OBJECT)
    {
        if ($fetchMode === Client::FETCH_OBJECT) {
            return $this->transformResponseBody((string) $response->getBody(), $response->getStatusCode(), $serializer);
        }

        if ($fetchMode === Client::FETCH_RESPONSE) {
            return $response;
        }

        throw new InvalidFetchModeException(sprintf('Fetch mode %s is not supported', $fetchMode));
    }
}
