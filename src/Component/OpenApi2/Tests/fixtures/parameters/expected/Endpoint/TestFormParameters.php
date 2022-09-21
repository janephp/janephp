<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Endpoint;

class TestFormParameters extends \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param array $formParameters {
     *     @var string $testString 
     *     @var int $testInteger 
     *     @var float $testFloat 
     *     @var array $testArray 
     *     @var string $testRequired 
     *     @var string $testDefault 
     * }
     */
    public function __construct(array $formParameters = array())
    {
        $this->formParameters = $formParameters;
    }
    use \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/test-form';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getFormBody();
    }
    protected function getFormOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getFormOptionsResolver();
        $optionsResolver->setDefined(array('testString', 'testInteger', 'testFloat', 'testArray', 'testRequired', 'testDefault'));
        $optionsResolver->setRequired(array('testRequired'));
        $optionsResolver->setDefaults(array('testDefault' => 'test'));
        $optionsResolver->addAllowedTypes('testString', array('string'));
        $optionsResolver->addAllowedTypes('testInteger', array('int'));
        $optionsResolver->addAllowedTypes('testFloat', array('float'));
        $optionsResolver->addAllowedTypes('testArray', array('array'));
        $optionsResolver->addAllowedTypes('testRequired', array('string'));
        $optionsResolver->addAllowedTypes('testDefault', array('string'));
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