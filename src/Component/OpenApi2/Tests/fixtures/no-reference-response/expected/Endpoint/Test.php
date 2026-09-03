<?php

namespace Jane\Component\OpenApi2\Tests\Expected\NoReferenceResponse\Endpoint;

class Test extends \Jane\Component\OpenApi2\Tests\Expected\NoReferenceResponse\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\NoReferenceResponse\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi2\Tests\Expected\NoReferenceResponse\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/test';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\NoReferenceResponse\Model\TestPostResponse201
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi2\Tests\Expected\NoReferenceResponse\Model\TestPostResponse201', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}