<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ParameterTypeReference\Endpoint;

class Foo extends \Jane\Component\OpenApi3\Tests\Expected\ParameterTypeReference\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\ParameterTypeReference\Runtime\Client\Endpoint
{
    /**
     * caca
     * @param array{
     *    "bar": string,
     * } $queryParameters
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\ParameterTypeReference\Runtime\Client\EndpointTrait;
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
        $optionsResolver->setDefined(['bar']);
        $optionsResolver->setRequired(['bar']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('bar', ['string']);
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
        return null;
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