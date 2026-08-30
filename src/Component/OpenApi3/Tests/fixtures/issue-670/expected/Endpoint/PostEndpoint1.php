<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue670\Endpoint;

class PostEndpoint1 extends \Jane\Component\OpenApi3\Tests\Expected\Issue670\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Issue670\Runtime\Client\Endpoint
{
    /**
     * @param null|\Jane\Component\OpenApi3\Tests\Expected\Issue670\Model\Endpoint1PostBody $requestBody
     */
    public function __construct(?\Jane\Component\OpenApi3\Tests\Expected\Issue670\Model\Endpoint1PostBody $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Issue670\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/endpoint/1';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi3\Tests\Expected\Issue670\Model\Endpoint1PostBody) {
            return [['Content-Type' => ['application/json']], \Jane\Component\OpenApi3\Tests\Expected\Issue670\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
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
        if (204 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}