<?php

namespace Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Endpoint;

class GetItem extends \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [rawurlencode($this->id)], '/items/{id}');
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Exception\BadResponseException
     *
     * @return \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Model\Item
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Model\Item', 'json');
        }
        throw new \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Exception\BadResponseException($status, $body, $response);
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
    public function getTargetClass(): ?string
    {
        return \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Model\Item::class;
    }
}