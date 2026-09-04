<?php

namespace Jane\Component\OpenApi2\Tests\Expected\AuthenticationApiKeyQuery\Endpoint;

class GetFoo extends \Jane\Component\OpenApi2\Tests\Expected\AuthenticationApiKeyQuery\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\AuthenticationApiKeyQuery\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi2\Tests\Expected\AuthenticationApiKeyQuery\Runtime\Client\EndpointTrait;
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
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\AuthenticationApiKeyQuery\Model\Foo
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi2\Tests\Expected\AuthenticationApiKeyQuery\Model\Foo', 'json');
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