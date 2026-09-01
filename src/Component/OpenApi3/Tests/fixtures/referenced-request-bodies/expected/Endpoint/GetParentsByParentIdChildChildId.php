<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Endpoint;

class GetParentsByParentIdChildChildId extends \Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Runtime\Client\Endpoint
{
    protected $parent_id;
    protected $child_id;
    /**
     * @param string $parentId
     * @param string $childId
     */
    public function __construct(string $parentId, string $childId)
    {
        $this->parent_id = $parentId;
        $this->child_id = $childId;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{parent_id}', '{child_id}'], [rawurlencode($this->parent_id), rawurlencode($this->child_id)], '/parents/{parent_id}/child/child_id/');
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
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Model\Child
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Model\Child', 'json');
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