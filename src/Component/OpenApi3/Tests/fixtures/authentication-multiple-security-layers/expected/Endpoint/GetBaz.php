<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AuthenticationMultipleSecurityLayers\Endpoint;

class GetBaz extends \Jane\Component\OpenApi3\Tests\Expected\AuthenticationMultipleSecurityLayers\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\AuthenticationMultipleSecurityLayers\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi3\Tests\Expected\AuthenticationMultipleSecurityLayers\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/baz';
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
    }
    public function getAuthenticationScopes(): array
    {
        return ['apikey', 'bearer', 'x-header'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
}