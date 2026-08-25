<?php

namespace Jane\Component\OpenApi31\Tests\Issue1006\Endpoint;

class CreateWidget extends \Jane\Component\OpenApi31\Tests\Issue1006\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Issue1006\Runtime\Client\Endpoint
{
    /**
     * @param \Jane\Component\OpenApi31\Tests\Issue1006\Model\Widget $requestBody
     */
    public function __construct(\Jane\Component\OpenApi31\Tests\Issue1006\Model\Widget $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Jane\Component\OpenApi31\Tests\Issue1006\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/widgets';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi31\Tests\Issue1006\Model\Widget) {
            return [['Content-Type' => ['application/json']], \Jane\Component\OpenApi31\Tests\Issue1006\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
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
     * @return null|\Jane\Component\OpenApi31\Tests\Issue1006\Model\Widget
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Issue1006\Model\Widget', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}