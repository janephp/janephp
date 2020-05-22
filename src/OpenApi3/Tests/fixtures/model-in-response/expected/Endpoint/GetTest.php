<?php

namespace Jane\OpenApi3\Tests\Expected\Endpoint;

class GetTest extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
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
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\OpenApi3\Tests\Expected\Exception\GetTestBadRequestException
     * @throws \Jane\OpenApi3\Tests\Expected\Exception\GetTestNotFoundException
     *
     * @return null|\Jane\OpenApi3\Tests\Expected\Model\Schema
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\\OpenApi3\\Tests\\Expected\\Model\\Schema', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Jane\OpenApi3\Tests\Expected\Exception\GetTestBadRequestException($serializer->deserialize($body, 'Jane\\OpenApi3\\Tests\\Expected\\Model\\Error', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Jane\OpenApi3\Tests\Expected\Exception\GetTestNotFoundException($serializer->deserialize($body, 'Jane\\OpenApi3\\Tests\\Expected\\Model\\Error', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}