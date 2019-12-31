<?php

namespace Jane\OpenApi2\Tests\Expected\Endpoint;

class TestFormParameters extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
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
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
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
        $optionsResolver->setAllowedTypes('testString', array('string'));
        $optionsResolver->setAllowedTypes('testInteger', array('int'));
        $optionsResolver->setAllowedTypes('testFloat', array('float'));
        $optionsResolver->setAllowedTypes('testArray', array('array'));
        $optionsResolver->setAllowedTypes('testRequired', array('string'));
        $optionsResolver->setAllowedTypes('testDefault', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return null;
        }
    }
}