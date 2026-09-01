<?php

namespace Jane\Component\OpenApi3\Tests\Expected\BodyParameter\Endpoint;

class TestSimpleBodyParameter extends \Jane\Component\OpenApi3\Tests\Expected\BodyParameter\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\BodyParameter\Runtime\Client\Endpoint
{
    /**
     * @param string|resource $requestBody
     */
    public function __construct($requestBody)
    {
        $this->body = $requestBody;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\BodyParameter\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/test-simple';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if (is_string($this->body) or is_resource($this->body)) {
            return [['Content-Type' => ['text/plain']], $this->body];
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