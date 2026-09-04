<?php

namespace Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Endpoint;

class PostMessageM700 extends \Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Runtime\Client\Endpoint
{
    /**
     * @param \Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Model\MessageM700PostBody $requestBody
     */
    public function __construct(\Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Model\MessageM700PostBody $requestBody)
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
        return '/message/M700';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Model\MessageM700PostBody) {
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
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        return null;
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