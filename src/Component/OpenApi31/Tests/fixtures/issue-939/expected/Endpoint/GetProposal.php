<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue939\Endpoint;

class GetProposal extends \Jane\Component\OpenApi31\Tests\Expected\Issue939\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\Issue939\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi31\Tests\Expected\Issue939\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/proposal';
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
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Issue939\Model\ProjectProposal
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Issue939\Model\ProjectProposal', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}