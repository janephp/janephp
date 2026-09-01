<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue670\Endpoint;

class PostEndpoint3 extends \Jane\Component\OpenApi3\Tests\Expected\Issue670\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Issue670\Runtime\Client\Endpoint
{
    /**
     * @param null|\Jane\Component\OpenApi3\Tests\Expected\Issue670\Model\Endpoint3PostBody $requestBody
     */
    public function __construct(?\Jane\Component\OpenApi3\Tests\Expected\Issue670\Model\Endpoint3PostBody $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Issue670\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/endpoint/3';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi3\Tests\Expected\Issue670\Model\Endpoint3PostBody) {
            return [['Content-Type' => ['application/json']], \Jane\Component\OpenApi3\Tests\Expected\Issue670\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
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
        if (204 === $status) {
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