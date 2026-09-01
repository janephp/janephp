<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AllOfNullableReferenceProperty\Endpoint;

class GetBar extends \Jane\Component\OpenApi3\Tests\Expected\AllOfNullableReferenceProperty\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\AllOfNullableReferenceProperty\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi3\Tests\Expected\AllOfNullableReferenceProperty\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/bar';
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\AllOfNullableReferenceProperty\Exception\GetBarNotFoundException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\AllOfNullableReferenceProperty\Model\Root
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\AllOfNullableReferenceProperty\Model\Root', 'json');
        }
        if (404 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\AllOfNullableReferenceProperty\Exception\GetBarNotFoundException($response);
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