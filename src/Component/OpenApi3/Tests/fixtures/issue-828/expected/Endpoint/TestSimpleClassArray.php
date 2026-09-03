<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue828\Endpoint;

class TestSimpleClassArray extends \Jane\Component\OpenApi3\Tests\Expected\Issue828\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Issue828\Runtime\Client\Endpoint
{
    /**
     * @param null|\Jane\Component\OpenApi3\Tests\Expected\Issue828\Model\Bar[] $requestBody
     */
    public function __construct(?array $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Issue828\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/test-simple-array-ref';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if (is_array($this->body) and isset($this->body[0]) and $this->body[0] instanceof \Jane\Component\OpenApi3\Tests\Expected\Issue828\Model\Bar) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
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
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}