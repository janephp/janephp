<?php

namespace Jane\Component\OpenApi3\Tests\Expected\HostWithPortAndBasePath\Endpoint;

class TestHost extends \Jane\Component\OpenApi3\Tests\Expected\HostWithPortAndBasePath\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\HostWithPortAndBasePath\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi3\Tests\Expected\HostWithPortAndBasePath\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/test-exception';
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