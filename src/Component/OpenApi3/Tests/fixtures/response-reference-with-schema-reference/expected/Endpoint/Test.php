<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ResponseReferenceWithSchemaReference\Endpoint;

class Test extends \Jane\Component\OpenApi3\Tests\Expected\ResponseReferenceWithSchemaReference\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\ResponseReferenceWithSchemaReference\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi3\Tests\Expected\ResponseReferenceWithSchemaReference\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/test-exception';
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\ResponseReferenceWithSchemaReference\Exception\TestBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\ResponseReferenceWithSchemaReference\Exception\TestBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\ResponseReferenceWithSchemaReference\Model\Failure', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}