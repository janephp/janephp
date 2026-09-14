<?php

namespace Jane\Component\OpenApi2\Tests\Client\Endpoint;

class GetEndpoint extends \Jane\Component\OpenApi2\Tests\Client\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Client\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi2\Tests\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/endpoint';
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
     * @throws \Jane\Component\OpenApi2\Tests\Client\Exception\GetEndpointUnauthorizedException
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Client\Model\SimpleResponse
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi2\Tests\Client\Model\SimpleResponse', 'json');
        }
        if (401 === $status) {
            throw new \Jane\Component\OpenApi2\Tests\Client\Exception\GetEndpointUnauthorizedException($serializer->deserialize($body, 'Jane\Component\OpenApi2\Tests\Client\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['ApiKeyAuth'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
    public function getTargetClass(): ?string
    {
        return \Jane\Component\OpenApi2\Tests\Client\Model\SimpleResponse::class;
    }
}