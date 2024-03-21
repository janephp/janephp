<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Runtime\Client;

use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;
trait EndpointTrait
{
    protected abstract function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null);
    public function parseResponse(ResponseInterface $response, SerializerInterface $serializer, string $fetchMode = Client::FETCH_OBJECT)
    {
        $contentType = $response->hasHeader('Content-Type') ? current($response->getHeader('Content-Type')) : null;
        return $this->transformResponseBody($response, $serializer, $contentType);
    }
}