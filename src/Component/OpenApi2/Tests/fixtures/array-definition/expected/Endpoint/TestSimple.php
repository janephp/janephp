<?php

namespace Jane\Component\OpenApi2\Tests\Expected\ArrayDefinition\Endpoint;

class TestSimple extends \Jane\Component\OpenApi2\Tests\Expected\ArrayDefinition\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\ArrayDefinition\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi2\Tests\Expected\ArrayDefinition\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/test-simple';
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
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\ArrayDefinition\Model\BarItem[]
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi2\Tests\Expected\ArrayDefinition\Model\BarItem[]', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
}