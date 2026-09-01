<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Endpoint;

class GetUser extends \Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/user';
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Exception\GetUserNotFoundException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Model\Account
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Model\Account', 'json');
        }
        if (404 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Exception\GetUserNotFoundException($response);
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