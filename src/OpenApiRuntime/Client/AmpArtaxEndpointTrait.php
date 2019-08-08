<?php

declare(strict_types=1);

namespace Jane\OpenApiRuntime\Client;

use Amp\Artax\Response;
use function Amp\call;
use Amp\Promise;
use Jane\OpenApiRuntime\Client\Exception\InvalidFetchModeException;
use Symfony\Component\Serializer\SerializerInterface;

trait AmpArtaxEndpointTrait
{
    abstract protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null);

    public function parseArtaxResponse(Response $response, SerializerInterface $serializer, string $fetchMode = Client::FETCH_OBJECT): Promise
    {
        return call(function () use ($response, $serializer, $fetchMode) {
            if ($fetchMode === Client::FETCH_OBJECT) {
                $contentType = $response->hasHeader('Content-Type') ? current($response->getHeader('Content-Type')) : null;

                return $this->transformResponseBody(yield $response->getBody(), $response->getStatus(), $serializer, $contentType);
            }

            if ($fetchMode === Client::FETCH_RESPONSE) {
                return $response;
            }

            throw new InvalidFetchModeException(sprintf('Fetch mode %s is not supported', $fetchMode));
        });
    }
}
