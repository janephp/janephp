<?php

use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

trait EndpointTrait
{
    abstract protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null);

    public function parseResponse(ResponseInterface $response, SerializerInterface $serializer, string $fetchMode = Client::FETCH_OBJECT)
    {
        $contentType = $response->hasHeader('Content-Type') ? current($response->getHeader('Content-Type')) : null;

        return $this->transformResponseBody($response, $serializer, $contentType);
    }
}
