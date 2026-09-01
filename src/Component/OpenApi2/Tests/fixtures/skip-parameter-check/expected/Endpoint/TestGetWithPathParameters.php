<?php

namespace Jane\OpenApi2\Tests\Expected\SkipParameterCheck\Endpoint;

class TestGetWithPathParameters extends \Jane\OpenApi2\Tests\Expected\SkipParameterCheck\Runtime\Client\BaseEndpoint implements \Jane\OpenApi2\Tests\Expected\SkipParameterCheck\Runtime\Client\Endpoint
{
    protected $testPath;
    /**
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
    public function __construct(string $testPath, array $testBody, array $queryParameters = [], array $headerParameters = [])
    {
        $this->testPath = $testPath;
        $this->body = $testBody;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\OpenApi2\Tests\Expected\SkipParameterCheck\Runtime\Client\EndpointTrait;
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
        return $this->getSerializedBody($serializer);
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
        $optionsResolver->setRequired([]);
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
        if (200 === $status) {
            return null;
        }
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