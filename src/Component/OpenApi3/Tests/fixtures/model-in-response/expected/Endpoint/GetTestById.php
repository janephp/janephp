<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class GetTestById extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * @param int $id id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [rawurlencode($this->id)], '/test/{id}');
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\GetTestByIdBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\GetTestByIdNotFoundException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\TestIdGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Model\TestIdGetResponse200', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\GetTestByIdBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\GetTestByIdNotFoundException($serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}