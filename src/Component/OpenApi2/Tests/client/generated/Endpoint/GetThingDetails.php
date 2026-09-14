<?php

namespace Jane\Component\OpenApi2\Tests\Client\Endpoint;

class GetThingDetails extends \Jane\Component\OpenApi2\Tests\Client\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Client\Runtime\Client\Endpoint
{
    protected $thingId;
    /**
     * @param string $thingId
     */
    public function __construct(string $thingId)
    {
        $this->thingId = $thingId;
    }
    use \Jane\Component\OpenApi2\Tests\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{thingId}'], [rawurlencode($this->thingId)], '/things/{thingId}/details');
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
     * @return null|\Jane\Component\OpenApi2\Tests\Client\Model\ThingDetails
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi2\Tests\Client\Model\ThingDetails', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['ApiKeyAuth'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
    public function getTargetClass(): ?string
    {
        return \Jane\Component\OpenApi2\Tests\Client\Model\ThingDetails::class;
    }
}