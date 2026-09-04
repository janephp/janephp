<?php

namespace Jane\Component\OpenApi3\Tests\Issue680\Endpoint;

class PostTest extends \Jane\Component\OpenApi3\Tests\Issue680\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Issue680\Runtime\Client\Endpoint
{
    /**
     * @param \Jane\Component\OpenApi3\Tests\Issue680\Model\TestBody $requestBody
     */
    public function __construct(\Jane\Component\OpenApi3\Tests\Issue680\Model\TestBody $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Jane\Component\OpenApi3\Tests\Issue680\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/test';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi3\Tests\Issue680\Model\TestBody) {
            return [['Content-Type' => ['application/json']], \Jane\Component\OpenApi3\Tests\Issue680\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
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
        if (200 === $status) {
            return null;
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