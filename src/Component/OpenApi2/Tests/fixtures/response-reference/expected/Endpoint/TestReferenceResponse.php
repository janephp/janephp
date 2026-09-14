<?php

namespace Jane\Component\OpenApi2\Tests\Expected\ResponseReference\Endpoint;

class TestReferenceResponse extends \Jane\Component\OpenApi2\Tests\Expected\ResponseReference\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\ResponseReference\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi2\Tests\Expected\ResponseReference\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/test-query';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi2\Tests\Expected\ResponseReference\Exception\BadResponseException
     *
     * @return \Jane\Component\OpenApi2\Tests\Expected\ResponseReference\Model\ResponseCommon
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi2\Tests\Expected\ResponseReference\Model\ResponseCommon', 'json');
        }
        throw new \Jane\Component\OpenApi2\Tests\Expected\ResponseReference\Exception\BadResponseException($status, $body, $response);
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
    public function getTargetClass(): ?string
    {
        return \Jane\Component\OpenApi2\Tests\Expected\ResponseReference\Model\ResponseCommon::class;
    }
}