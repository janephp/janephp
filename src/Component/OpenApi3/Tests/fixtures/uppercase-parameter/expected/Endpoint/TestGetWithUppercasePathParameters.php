<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class TestGetWithUppercasePathParameters extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    protected $TestParameter;
    /**
     * 
     *
     * @param mixed $testParameter 
     */
    public function __construct($testParameter)
    {
        $this->TestParameter = $testParameter;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{TestParameter}'], [$this->TestParameter], '/test-uppercase-path-parameters/{TestParameter}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}