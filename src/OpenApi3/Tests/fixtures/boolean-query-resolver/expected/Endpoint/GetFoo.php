<?php

namespace Jane\OpenApi3\Tests\Expected\Endpoint;

class GetFoo extends \Jane\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var bool $testBoolean 
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/foo';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getQueryString() : string
    {
        $optionsResolved = $this->getQueryOptionsResolver()->resolve($this->queryParameters);
        $optionsResolved = array_map(static function ($value) {
            return null !== $value ? $value : '';
        }, $optionsResolved);
        return ltrim((new \Rize\UriTemplate\UriTemplate())->expand('{?testBoolean}', $optionsResolved), '?');
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('testBoolean'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('testBoolean', array('bool'));
        $optionsResolver->setNormalizer('testBoolean', \Closure::fromCallable(array(new \Jane\OpenApi3\Tests\Expected\BooleanQueryResolver\BooleanCustomQueryResolver(), '__invoke')));
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