<?php

namespace Jane\Component\OpenApi2\Tests\Expected\AllBooleanQueryResolver\Endpoint;

class GetFoo extends \Jane\Component\OpenApi2\Tests\Expected\AllBooleanQueryResolver\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\AllBooleanQueryResolver\Runtime\Client\Endpoint
{
    /**
     * @param array $queryParameters {
     *     @var bool $testBoolean
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi2\Tests\Expected\AllBooleanQueryResolver\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/foo';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['testBoolean']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('testBoolean', ['bool']);
        $optionsResolver->setNormalizer('testBoolean', \Closure::fromCallable([new \Jane\Component\OpenApi2\Tests\Expected\AllBooleanQueryResolver\BooleanCustomQueryResolver(), '__invoke']));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
}