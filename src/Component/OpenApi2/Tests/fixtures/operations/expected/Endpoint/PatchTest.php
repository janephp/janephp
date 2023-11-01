<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Endpoint;

class PatchTest extends \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return '/test-get';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
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
        if (200 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}