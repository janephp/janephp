<?php

namespace Jane\Component\OpenApi2\Tests\Expected\ResponseReference\Endpoint;

class TestRefArray extends \Jane\Component\OpenApi2\Tests\Expected\ResponseReference\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\ResponseReference\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi2\Tests\Expected\ResponseReference\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/test-array-ref';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|array
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                return $decodedBody;
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}