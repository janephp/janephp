<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue670\Endpoint;

class GetEndpoint1 extends \Jane\Component\OpenApi3\Tests\Expected\Issue670\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Issue670\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi3\Tests\Expected\Issue670\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/endpoint/1';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
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
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Issue670\Model\Endpoint1GetResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Issue670\Model\Endpoint1GetResponse', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}