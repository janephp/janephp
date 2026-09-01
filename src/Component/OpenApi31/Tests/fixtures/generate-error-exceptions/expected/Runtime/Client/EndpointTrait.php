<?php

namespace Jane\Component\OpenApi31\Tests\Expected\GenerateErrorExceptions\Runtime\Client;

use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;
trait EndpointTrait
{
    /**
     * Transform the response body into a value.
     *
     * @return mixed
     */
    abstract protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null);
    public function parseResponse(ResponseInterface $response, SerializerInterface $serializer)
    {
        $contentType = $response->getHeaders(false)['content-type'][0] ?? null;
        return $this->transformResponseBody($response, $serializer, $contentType);
    }
}