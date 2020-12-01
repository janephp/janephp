<?php

namespace Jane\OpenApi3\Tests\Expected\Endpoint;

class GetFoo extends \Jane\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    use \Jane\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/foo';
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
     * @throws \Jane\OpenApi3\Tests\Expected\Exception\GetFooUnauthorizedException
     *
     * @return null|\Jane\OpenApi3\Tests\Expected\Model\Foo
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\\OpenApi3\\Tests\\Expected\\Model\\Foo', 'json');
        }
        if (401 === $status) {
            throw new \Jane\OpenApi3\Tests\Expected\Exception\GetFooUnauthorizedException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}