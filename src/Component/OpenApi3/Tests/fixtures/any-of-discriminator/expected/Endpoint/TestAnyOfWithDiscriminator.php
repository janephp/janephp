<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AnyOfDiscriminator\Endpoint;

class TestAnyOfWithDiscriminator extends \Jane\Component\OpenApi3\Tests\Expected\AnyOfDiscriminator\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\AnyOfDiscriminator\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi3\Tests\Expected\AnyOfDiscriminator\Runtime\Client\EndpointTrait;
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\AnyOfDiscriminator\Exception\TestAnyOfWithDiscriminatorBadRequestException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\AnyOfDiscriminator\Model\FooBar
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\AnyOfDiscriminator\Model\FooBar', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\AnyOfDiscriminator\Exception\TestAnyOfWithDiscriminatorBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\AnyOfDiscriminator\Model\FooBarWithMapping', 'json'), $response);
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