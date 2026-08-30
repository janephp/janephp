<?php

namespace Jane\Component\OpenApi2\Tests\Expected\NoReferenceBody\Endpoint;

class Test extends \Jane\Component\OpenApi2\Tests\Expected\NoReferenceBody\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\NoReferenceBody\Runtime\Client\Endpoint
{
    /**
     * @param \Jane\Component\OpenApi2\Tests\Expected\NoReferenceBody\Model\TestPostBody $body
     */
    public function __construct(\Jane\Component\OpenApi2\Tests\Expected\NoReferenceBody\Model\TestPostBody $body)
    {
        $this->body = $body;
    }
    use \Jane\Component\OpenApi2\Tests\Expected\NoReferenceBody\Runtime\Client\EndpointTrait;
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
        return $this->getSerializedObjectBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}