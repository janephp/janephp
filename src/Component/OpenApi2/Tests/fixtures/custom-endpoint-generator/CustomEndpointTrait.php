<?php

declare(strict_types=1);

namespace Jane\Component\OpenApi2\Tests\Fixtures\CustomEndpointGenerator;

use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

trait CustomEndpointTrait
{
    abstract protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, string $contentType = null);

    public function parsePSR7Response(ResponseInterface $response, SerializerInterface $serializer, string $fetchMode = Client::FETCH_OBJECT)
    {
        //do something awesome
    }
}
