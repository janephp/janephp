<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ParametersMapKeys\Endpoint;

class GetOrder extends \Jane\Component\OpenApi3\Tests\Expected\ParametersMapKeys\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\ParametersMapKeys\Runtime\Client\Endpoint
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
    use \Jane\Component\OpenApi3\Tests\Expected\ParametersMapKeys\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{order_id}'], [rawurlencode($this->order_id)], '/orders/{order_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
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
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
}