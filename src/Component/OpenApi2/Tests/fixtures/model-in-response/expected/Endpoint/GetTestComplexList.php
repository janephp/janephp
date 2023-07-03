<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Endpoint;

class GetTestComplexList extends \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/test-complex-list';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|mixed|\Jane\Component\OpenApi2\Tests\Expected\Model\TestComplexListGetResponsedefault
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (200 === $status) {
            return json_decode((string) $body);
        }
        return $serializer->deserialize((string) $body, 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\TestComplexListGetResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}