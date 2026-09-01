<?php

namespace Jane\Component\OpenApi31\Tests\Client\Endpoint;

class CreateThing extends \Jane\Component\OpenApi31\Tests\Client\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Client\Runtime\Client\Endpoint
{
    /**
     * @param \Jane\Component\OpenApi31\Tests\Client\Model\ThingInput $requestBody
     */
    public function __construct(\Jane\Component\OpenApi31\Tests\Client\Model\ThingInput $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Jane\Component\OpenApi31\Tests\Client\Runtime\Client\EndpointTrait;
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
        if ($this->body instanceof \Jane\Component\OpenApi31\Tests\Client\Model\ThingInput) {
            return [['Content-Type' => ['application/json']], \Jane\Component\OpenApi31\Tests\Client\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi31\Tests\Client\Exception\CreateThingBadRequestException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Client\Model\Thing
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (201 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Client\Model\Thing', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Client\Exception\CreateThingBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Client\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['ApiKeyAuth'];
    }
}