<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Endpoint;

class GetTest extends \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\EndpointTrait;
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
     * @throws \Jane\Component\OpenApi2\Tests\Expected\Exception\GetTestBadRequestException
     * @throws \Jane\Component\OpenApi2\Tests\Expected\Exception\GetTestNotFoundException
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\Model\Schema
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\Schema', 'json');
        }
        if (400 === $status) {
            throw new \Jane\Component\OpenApi2\Tests\Expected\Exception\GetTestBadRequestException($serializer->deserialize($body, 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Jane\Component\OpenApi2\Tests\Expected\Exception\GetTestNotFoundException($serializer->deserialize($body, 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\Error', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}