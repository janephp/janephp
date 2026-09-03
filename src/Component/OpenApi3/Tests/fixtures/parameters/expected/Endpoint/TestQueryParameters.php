<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint;

class TestQueryParameters extends \Jane\Component\OpenApi3\Tests\Expected\Parameters\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Parameters\Runtime\Client\Endpoint
{
    /**
     * @param array{
     *    "testString"?: string,
     *    "testInteger"?: int,
     *    "testFloat"?: int,
     *    "testArray"?: array,
     *    "testRequired": string,
     *    "testDefault"?: string,
     * } $queryParameters
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Parameters\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/test-query';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
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
    protected function getQueryStyles(): array
    {
        return ['testArray' => ['style' => 'form', 'explode' => true]];
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
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}