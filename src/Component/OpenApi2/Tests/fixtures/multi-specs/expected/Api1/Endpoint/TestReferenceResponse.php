<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Api1\Endpoint;

class TestReferenceResponse extends \Jane\Component\OpenApi2\Tests\Expected\Api1\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\Api1\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi2\Tests\Expected\Api1\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/test-query';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\Api1\Model\Body
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Api1\\Model\\Body', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}