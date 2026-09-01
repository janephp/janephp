<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint;

class TestHeaderParameters extends \Jane\Component\OpenApi3\Tests\Expected\Parameters\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Parameters\Runtime\Client\Endpoint
{
    /**
     * @param array{
     *    "testString"?: string,
     *    "testInteger"?: int,
     *    "testFloat"?: int,
     *    "testArray"?: array,
     *    "testRequired": string,
     *    "testDefault"?: string,
     * } $headerParameters
     */
    public function __construct(array $headerParameters = [])
    {
        $this->headerParameters = $headerParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Parameters\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/test-header';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['testString', 'testInteger', 'testFloat', 'testArray', 'testRequired', 'testDefault']);
        $optionsResolver->setRequired(['testRequired']);
        $optionsResolver->setDefaults(['testDefault' => 'test']);
        $optionsResolver->addAllowedTypes('testString', ['string']);
        $optionsResolver->addAllowedTypes('testInteger', ['int']);
        $optionsResolver->addAllowedTypes('testFloat', ['int']);
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