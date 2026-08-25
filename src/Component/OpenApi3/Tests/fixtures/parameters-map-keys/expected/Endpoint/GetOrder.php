<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class GetOrder extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    protected $order_id;
    /**
     * Retrieve an Order
     * @param int $orderId Order or cart ID
     * @param array{
     *    "shared_limit"?: int, //Rate limit shared across operations
     *    "site": string, //Order or cart ID
     *    "explicit_name"?: string, //Explicit name takes precedence over the key
     * } $queryParameters
     */
    public function __construct(int $orderId, array $queryParameters = [])
    {
        $this->order_id = $orderId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{order_id}'], [$this->order_id], '/orders/{order_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['shared_limit', 'site', 'explicit_name']);
        $optionsResolver->setRequired(['site']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('shared_limit', ['int']);
        $optionsResolver->addAllowedTypes('site', ['string']);
        $optionsResolver->addAllowedTypes('explicit_name', ['string']);
        return $optionsResolver;
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