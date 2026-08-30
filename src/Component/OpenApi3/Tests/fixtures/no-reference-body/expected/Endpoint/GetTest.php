<?php

namespace Jane\Component\OpenApi3\Tests\Expected\NoReferenceBody\Endpoint;

class GetTest extends \Jane\Component\OpenApi3\Tests\Expected\NoReferenceBody\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\NoReferenceBody\Runtime\Client\Endpoint
{
    /**
     * @param \Jane\Component\OpenApi3\Tests\Expected\NoReferenceBody\Model\TestGetBody $requestBody
     */
    public function __construct(\Jane\Component\OpenApi3\Tests\Expected\NoReferenceBody\Model\TestGetBody $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\NoReferenceBody\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/test';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi3\Tests\Expected\NoReferenceBody\Model\TestGetBody) {
            return [['Content-Type' => ['application/json']], \Jane\Component\OpenApi3\Tests\Expected\NoReferenceBody\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        return [[], null];
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
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}