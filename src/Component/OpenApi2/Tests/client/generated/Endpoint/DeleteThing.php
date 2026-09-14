<?php

namespace Jane\Component\OpenApi2\Tests\Client\Endpoint;

class DeleteThing extends \Jane\Component\OpenApi2\Tests\Client\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Client\Runtime\Client\Endpoint
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
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{thingId}'], [rawurlencode($this->thingId)], '/things/{thingId}');
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
     * @throws \Jane\Component\OpenApi2\Tests\Client\Exception\DeleteThingNotFoundException
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
        if (404 === $status) {
            throw new \Jane\Component\OpenApi2\Tests\Client\Exception\DeleteThingNotFoundException($serializer->deserialize($body, 'Jane\Component\OpenApi2\Tests\Client\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['ApiKeyAuth'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
    public function getTargetClass(): ?string
    {
        return null;
    }
}