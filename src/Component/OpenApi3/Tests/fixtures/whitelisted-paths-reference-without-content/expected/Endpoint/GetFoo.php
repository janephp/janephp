<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsReferenceWithoutContent\Endpoint;

class GetFoo extends \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsReferenceWithoutContent\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsReferenceWithoutContent\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsReferenceWithoutContent\Runtime\Client\EndpointTrait;
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
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsReferenceWithoutContent\Exception\GetFooUnauthorizedException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsReferenceWithoutContent\Model\Foo
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsReferenceWithoutContent\Model\Foo', 'json');
        }
        if (401 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsReferenceWithoutContent\Exception\GetFooUnauthorizedException($response);
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