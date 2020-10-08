<?php

namespace Jane\OpenApi3\Tests\Expected\Endpoint;

class TestGetWithUppercasePathParameters extends \Jane\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
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
    use \Jane\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return (new \Rize\UriTemplate\UriTemplate())->expand('/test-uppercase-path-parameters/{TestParameter}', array('TestParameter' => $this->TestParameter));
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}