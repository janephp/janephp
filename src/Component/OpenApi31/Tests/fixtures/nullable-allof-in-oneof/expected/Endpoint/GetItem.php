<?php

namespace Jane\Component\OpenApi31\Tests\Expected\NullableAllofInOneof\Endpoint;

class GetItem extends \Jane\Component\OpenApi31\Tests\Expected\NullableAllofInOneof\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\NullableAllofInOneof\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi31\Tests\Expected\NullableAllofInOneof\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/items';
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
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\NullableAllofInOneof\Model\Container
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\NullableAllofInOneof\Model\Container', 'json');
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