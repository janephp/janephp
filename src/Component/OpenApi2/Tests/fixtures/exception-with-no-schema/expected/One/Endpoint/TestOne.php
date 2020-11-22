<?php

namespace Jane\Component\OpenApi2\Tests\Expected\One\Endpoint;

class TestOne extends \Jane\Component\OpenApi2\Tests\Expected\One\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\One\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi2\Tests\Expected\One\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/test-one';
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
     * @throws \Jane\Component\OpenApi2\Tests\Expected\One\Exception\TestOneNotFoundException
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\One\Model\TestOneGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\\Component\\OpenApi2\\Tests\\Expected\\One\\Model\\TestOneGetResponse200', 'json');
        }
        if (404 === $status) {
            throw new \Jane\Component\OpenApi2\Tests\Expected\One\Exception\TestOneNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}