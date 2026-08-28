<?php

namespace Jane\Component\OpenApi31\Tests\Client\Endpoint;

class CreateFormThing extends \Jane\Component\OpenApi31\Tests\Client\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Client\Runtime\Client\Endpoint
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
        return '/things/form';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi31\Tests\Client\Model\ThingInput) {
            return [['Content-Type' => ['application/x-www-form-urlencoded']], http_build_query($serializer->normalize($this->body, 'json'))];
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
    }
    public function getAuthenticationScopes(): array
    {
        return ['ApiKeyAuth'];
    }
}