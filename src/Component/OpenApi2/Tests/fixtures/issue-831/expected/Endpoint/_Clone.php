<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Issue831\Endpoint;

class _Clone extends \Jane\Component\OpenApi2\Tests\Expected\Issue831\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\Issue831\Runtime\Client\Endpoint
{
    protected $orderId;
    /**
     * @param string $orderId
     */
    public function __construct(string $orderId)
    {
        $this->orderId = $orderId;
    }
    use \Jane\Component\OpenApi2\Tests\Expected\Issue831\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{orderId}'], [rawurlencode($this->orderId)], '/orders/{orderId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
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