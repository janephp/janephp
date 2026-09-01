<?php

namespace Jane\Component\OpenApi3\Tests\Expected\TestNullableArray\Endpoint;

class TestNullableArray extends \Jane\Component\OpenApi3\Tests\Expected\TestNullableArray\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\TestNullableArray\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi3\Tests\Expected\TestNullableArray\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/test-nullable-array';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
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