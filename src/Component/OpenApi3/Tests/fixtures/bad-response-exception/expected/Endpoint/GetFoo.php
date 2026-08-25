<?php

namespace Jane\Component\OpenApi3\Tests\BadResponse\Endpoint;

class GetFoo extends \Jane\Component\OpenApi3\Tests\BadResponse\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\BadResponse\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi3\Tests\BadResponse\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/foo';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi3\Tests\BadResponse\Exception\BadResponseException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        throw new \Jane\Component\OpenApi3\Tests\BadResponse\Exception\BadResponseException($status, $body, $response);
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}