<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Endpoint;

class TestHeaderParameters extends \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param array $headerParameters {
     *     @var string $testString 
     *     @var int $testInteger 
     *     @var float $testFloat 
     *     @var array $testArray 
     *     @var string $testRequired 
     *     @var string $testDefault 
     * }
     */
    public function __construct(array $headerParameters = [])
    {
        $this->headerParameters = $headerParameters;
    }
    use \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/test-header';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['testString', 'testInteger', 'testFloat', 'testArray', 'testRequired', 'testDefault']);
        $optionsResolver->setRequired(['testRequired']);
        $optionsResolver->setDefaults(['testDefault' => 'test']);
        $optionsResolver->addAllowedTypes('testString', ['string']);
        $optionsResolver->addAllowedTypes('testInteger', ['int']);
        $optionsResolver->addAllowedTypes('testFloat', ['float']);
        $optionsResolver->addAllowedTypes('testArray', ['array']);
        $optionsResolver->addAllowedTypes('testRequired', ['string']);
        $optionsResolver->addAllowedTypes('testDefault', ['string']);
        return $optionsResolver;
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
        if (200 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}