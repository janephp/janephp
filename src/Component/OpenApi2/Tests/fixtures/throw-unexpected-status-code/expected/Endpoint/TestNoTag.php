<?php

namespace Jane\Component\OpenApi2\Tests\Expected\ThrowUnexpectedStatusCode\Endpoint;

class TestNoTag extends \Jane\Component\OpenApi2\Tests\Expected\ThrowUnexpectedStatusCode\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\ThrowUnexpectedStatusCode\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi2\Tests\Expected\ThrowUnexpectedStatusCode\Runtime\Client\EndpointTrait;
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
     * @throws \Jane\Component\OpenApi2\Tests\Expected\ThrowUnexpectedStatusCode\Exception\BadResponseException
     *
     * @return null
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return null;
        }
        throw new \Jane\Component\OpenApi2\Tests\Expected\ThrowUnexpectedStatusCode\Exception\BadResponseException($status, $body, $response);
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