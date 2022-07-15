<?php

namespace Jane\OpenApi2\Tests\Expected\Endpoint;

class TestGetWithPathParameters extends \Jane\OpenApi2\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\OpenApi2\Tests\Expected\Runtime\Client\Endpoint
{
    protected $testPath;
    /**
     * 
     *
     * @param string $testPath 
     * @param array $testBody 
     * @param array $queryParameters {
     *     @var string $testQuery 
     *     @var string $testQuerySkipped 
     * }
     * @param array $headerParameters {
     *     @var string $testHeader 
     *     @var string $testHeaderSkipped 
     * }
     */
    public function __construct(string $testPath, array $testBody, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->testPath = $testPath;
        $this->body = $testBody;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\OpenApi2\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{testPath}'), array($this->testPath), '/test-path-parameters/{testPath}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('testQuery'));
        $optionsResolver->setRequired(array('testQuery'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('testQuery', array('string'));
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('testHeader'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('testHeader', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}