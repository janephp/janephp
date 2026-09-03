<?php

namespace Jane\Component\OpenApi2\Tests\Expected\BodyParameter\Endpoint;

class TestObjectBodyParameter extends \Jane\Component\OpenApi2\Tests\Expected\BodyParameter\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\BodyParameter\Runtime\Client\Endpoint
{
    /**
     * @param \Jane\Component\OpenApi2\Tests\Expected\BodyParameter\Model\Schema $testObject
     */
    public function __construct(\Jane\Component\OpenApi2\Tests\Expected\BodyParameter\Model\Schema $testObject)
    {
        $this->body = $testObject;
    }
    use \Jane\Component\OpenApi2\Tests\Expected\BodyParameter\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/test-object';
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
        if (200 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}