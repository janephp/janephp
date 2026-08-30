<?php

namespace Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Endpoint;

class PostMessageM70047 extends \Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Runtime\Client\Endpoint
{
    /**
     * @param \Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Model\MessageM70047PostBody $requestBody
     */
    public function __construct(\Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Model\MessageM70047PostBody $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/message/M700.47';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Model\MessageM70047PostBody) {
            return [['Content-Type' => ['application/json']], \Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
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