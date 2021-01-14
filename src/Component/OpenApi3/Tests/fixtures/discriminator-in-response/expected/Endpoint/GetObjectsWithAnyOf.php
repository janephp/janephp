<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class GetObjectsWithAnyOf extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/objects-any-of';
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\GetObjectsWithAnyOfBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\GetObjectsWithAnyOfNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\GetObjectsWithAnyOfBadRequestException($serializer->deserialize($body, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ResponseError', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\GetObjectsWithAnyOfNotFoundException($serializer->deserialize($body, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ResponseError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}