<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Two\Endpoint;

class TestTwo extends \Jane\Component\OpenApi2\Tests\Expected\Two\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\Two\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi2\Tests\Expected\Two\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/test-two';
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
     * @throws \Jane\Component\OpenApi2\Tests\Expected\Two\Exception\TestTwoNotFoundException
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\Two\Model\TestTwoGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Two\\Model\\TestTwoGetResponse200', 'json');
        }
        if (404 === $status) {
            throw new \Jane\Component\OpenApi2\Tests\Expected\Two\Exception\TestTwoNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}