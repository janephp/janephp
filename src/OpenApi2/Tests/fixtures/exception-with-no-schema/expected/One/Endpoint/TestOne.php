<?php

namespace Jane\OpenApi2\Tests\Expected\One\Endpoint;

class TestOne extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
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
     * @throws \Jane\OpenApi2\Tests\Expected\One\Exception\TestOneNotFoundException
     *
     * @return null|\Jane\OpenApi2\Tests\Expected\One\Model\TestOneGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\\OpenApi\\Tests\\Expected\\One\\Model\\TestOneGetResponse200', 'json');
        }
        if (404 === $status) {
            throw new \Jane\OpenApi2\Tests\Expected\One\Exception\TestOneNotFoundException();
        }
    }
}
