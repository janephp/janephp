<?php

namespace Jane\OpenApi3\Tests\Expected\SkipParameterCheck\Endpoint;

class TestGetWithPathParameters extends \Jane\OpenApi3\Tests\Expected\SkipParameterCheck\Runtime\Client\BaseEndpoint implements \Jane\OpenApi3\Tests\Expected\SkipParameterCheck\Runtime\Client\Endpoint
{
    protected $testPath;
    /**
     * @param string $testPath
     * @param array{
     *    "testQuery": string,
     *    "testQuerySkipped": string,
     * } $queryParameters
     * @param array{
     *    "testHeader": string,
     *    "testHeaderSkipped": string,
     * } $headerParameters
     */
    public function __construct(string $testPath, array $queryParameters = [], array $headerParameters = [])
    {
        $this->testPath = $testPath;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\OpenApi3\Tests\Expected\SkipParameterCheck\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{testPath}'], [rawurlencode($this->testPath)], '/test-path-parameters/{testPath}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['testQuery']);
        $optionsResolver->setRequired(['testQuery']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('testQuery', ['string']);
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['testHeader']);
        $optionsResolver->setRequired(['testHeader']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('testHeader', ['string']);
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