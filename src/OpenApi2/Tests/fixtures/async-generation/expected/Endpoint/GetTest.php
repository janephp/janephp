<?php

namespace Jane\OpenApi2\Tests\Expected\Endpoint;

class GetTest extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\AmpArtaxEndpoint, \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\AmpArtaxEndpointTrait, \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/test';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\OpenApi2\Tests\Expected\Exception\GetTestBadRequestException
     * @throws \Jane\OpenApi2\Tests\Expected\Exception\GetTestNotFoundException
     *
     * @return null|\Jane\OpenApi2\Tests\Expected\Model\Schema
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Schema', 'json');
        }
        if (400 === $status) {
            throw new \Jane\OpenApi2\Tests\Expected\Exception\GetTestBadRequestException($serializer->deserialize($body, 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Jane\OpenApi2\Tests\Expected\Exception\GetTestNotFoundException($serializer->deserialize($body, 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Error', 'json'));
        }
    }
}