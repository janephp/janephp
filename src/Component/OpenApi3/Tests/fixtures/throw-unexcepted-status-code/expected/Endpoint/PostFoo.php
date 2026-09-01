<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ThrowUnexceptedStatusCode\Endpoint;

class PostFoo extends \Jane\Component\OpenApi3\Tests\Expected\ThrowUnexceptedStatusCode\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\ThrowUnexceptedStatusCode\Runtime\Client\Endpoint
{
    /**
     * @param null|\Jane\Component\OpenApi3\Tests\Expected\ThrowUnexceptedStatusCode\Model\FooPayload $requestBody
     */
    public function __construct(?\Jane\Component\OpenApi3\Tests\Expected\ThrowUnexceptedStatusCode\Model\FooPayload $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\ThrowUnexceptedStatusCode\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/foo';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi3\Tests\Expected\ThrowUnexceptedStatusCode\Model\FooPayload) {
            return [['Content-Type' => ['application/json']], \Jane\Component\OpenApi3\Tests\Expected\ThrowUnexceptedStatusCode\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi3\Tests\Expected\ThrowUnexceptedStatusCode\Exception\BadResponseException
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
        throw new \Jane\Component\OpenApi3\Tests\Expected\ThrowUnexceptedStatusCode\Exception\BadResponseException($status, $body, $response);
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