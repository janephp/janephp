<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Api2\Endpoint;

class TestReferenceResponse extends \Jane\Component\OpenApi3\Tests\Expected\Api2\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Api2\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi3\Tests\Expected\Api2\Runtime\Client\EndpointTrait;
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
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Api1\Model\Body
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Api1\\Model\\Body', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}