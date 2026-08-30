<?php

namespace Jane\Component\OpenApi31\Tests\Expected\GenerateErrorExceptions\Endpoint;

class GetUser extends \Jane\Component\OpenApi31\Tests\Expected\GenerateErrorExceptions\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\GenerateErrorExceptions\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi31\Tests\Expected\GenerateErrorExceptions\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/user';
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
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\GenerateErrorExceptions\Model\User|\Jane\Component\OpenApi31\Tests\Expected\GenerateErrorExceptions\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\GenerateErrorExceptions\Model\User', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\GenerateErrorExceptions\Model\Error', 'json');
        }
        if (is_null($contentType) === false && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\GenerateErrorExceptions\Model\Error', 'json');
        }
        if (is_null($contentType) === false && (201 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\GenerateErrorExceptions\Model\User', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}