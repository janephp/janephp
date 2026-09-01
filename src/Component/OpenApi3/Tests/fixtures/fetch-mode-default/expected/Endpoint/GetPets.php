<?php

namespace Jane\Component\OpenApi3\Tests\FetchModeDefault\Endpoint;

class GetPets extends \Jane\Component\OpenApi3\Tests\FetchModeDefault\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\FetchModeDefault\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi3\Tests\FetchModeDefault\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/pets';
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
     * @return null|\Jane\Component\OpenApi3\Tests\FetchModeDefault\Model\PetsGetResponse200
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\FetchModeDefault\Model\PetsGetResponse200', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
}