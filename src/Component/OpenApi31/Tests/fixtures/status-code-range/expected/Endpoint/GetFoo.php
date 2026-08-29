<?php

namespace Jane\Component\OpenApi31\Tests\StatusCodeRange\Endpoint;

class GetFoo extends \Jane\Component\OpenApi31\Tests\StatusCodeRange\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\StatusCodeRange\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi31\Tests\StatusCodeRange\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/foo';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi31\Tests\StatusCodeRange\Exception\GetFooNotFoundException
     * @throws \Jane\Component\OpenApi31\Tests\StatusCodeRange\Exception\GetFooClientErrorException
     * @throws \Jane\Component\OpenApi31\Tests\StatusCodeRange\Exception\GetFooServerErrorException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\StatusCodeRange\Model\Message
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\StatusCodeRange\Model\Message', 'json');
        }
        if (404 === $status) {
            throw new \Jane\Component\OpenApi31\Tests\StatusCodeRange\Exception\GetFooNotFoundException($response);
        }
        if ($status >= 400 && $status <= 499) {
            throw new \Jane\Component\OpenApi31\Tests\StatusCodeRange\Exception\GetFooClientErrorException($response);
        }
        if (is_null($contentType) === false && ($status >= 500 && $status <= 599 && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\StatusCodeRange\Exception\GetFooServerErrorException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\StatusCodeRange\Model\Message', 'json'), $response);
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}