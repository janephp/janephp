<?php

namespace Jane\Component\OpenApi3\Tests\Client\Endpoint;

class GetEndpoint extends \Jane\Component\OpenApi3\Tests\Client\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Client\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi3\Tests\Client\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/endpoint';
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
     * @throws \Jane\Component\OpenApi3\Tests\Client\Exception\GetEndpointUnauthorizedException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Client\Model\SimpleResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\\Component\\OpenApi3\\Tests\\Client\\Model\\SimpleResponse', 'json');
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Jane\Component\OpenApi3\Tests\Client\Exception\GetEndpointUnauthorizedException($serializer->deserialize($body, 'Jane\\Component\\OpenApi3\\Tests\\Client\\Model\\Error', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('ApiKeyAuth');
    }
}