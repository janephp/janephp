<?php

namespace Jane\Component\OpenApi31\Tests\Client\Endpoint;

class GetThing extends \Jane\Component\OpenApi31\Tests\Client\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Client\Runtime\Client\Endpoint
{
    protected $thingId;
    /**
     * @param string $thingId
     * @param array{
     *    "q": string,
     *    "page"?: int,
     * } $queryParameters
     */
    public function __construct(string $thingId, array $queryParameters = [])
    {
        $this->thingId = $thingId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi31\Tests\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{thingId}'], [$this->thingId], '/things/{thingId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['q', 'page']);
        $optionsResolver->setRequired(['q']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('q', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi31\Tests\Client\Exception\GetThingNotFoundException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Client\Model\Thing
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Client\Model\Thing', 'json');
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Client\Exception\GetThingNotFoundException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Client\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['ApiKeyAuth'];
    }
}