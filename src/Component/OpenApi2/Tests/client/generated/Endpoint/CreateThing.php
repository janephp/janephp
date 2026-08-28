<?php

namespace Jane\Component\OpenApi2\Tests\Client\Endpoint;

class CreateThing extends \Jane\Component\OpenApi2\Tests\Client\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Client\Runtime\Client\Endpoint
{
    /**
     * @param \Jane\Component\OpenApi2\Tests\Client\Model\ThingInput $body
     */
    public function __construct(\Jane\Component\OpenApi2\Tests\Client\Model\ThingInput $body)
    {
        $this->body = $body;
    }
    use \Jane\Component\OpenApi2\Tests\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/things';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedObjectBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi2\Tests\Client\Exception\CreateThingBadRequestException
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Client\Model\Thing
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi2\Tests\Client\Model\Thing', 'json');
        }
        if (400 === $status) {
            throw new \Jane\Component\OpenApi2\Tests\Client\Exception\CreateThingBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi2\Tests\Client\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['ApiKeyAuth'];
    }
}