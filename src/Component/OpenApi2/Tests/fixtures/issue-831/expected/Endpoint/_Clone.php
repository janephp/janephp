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
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
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