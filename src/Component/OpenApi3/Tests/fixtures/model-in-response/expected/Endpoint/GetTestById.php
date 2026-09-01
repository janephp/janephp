<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Endpoint;

class GetTestById extends \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * @param int $id id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [rawurlencode($this->id)], '/test/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Exception\GetTestByIdBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Exception\GetTestByIdNotFoundException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Model\TestIdGetResponse200
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Model\TestIdGetResponse200', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Exception\GetTestByIdBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Exception\GetTestByIdNotFoundException($serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
}