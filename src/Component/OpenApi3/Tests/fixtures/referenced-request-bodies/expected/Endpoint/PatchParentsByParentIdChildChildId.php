<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Endpoint;

class PatchParentsByParentIdChildChildId extends \Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Runtime\Client\Endpoint
{
    protected $parent_id;
    protected $child_id;
    /**
     * @param string $parentId
     * @param string $childId
     * @param \Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Model\ParentsParentIdChildChildIdPatchBody $requestBody
     */
    public function __construct(string $parentId, string $childId, \Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Model\ParentsParentIdChildChildIdPatchBody $requestBody)
    {
        $this->parent_id = $parentId;
        $this->child_id = $childId;
        $this->body = $requestBody;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PATCH';
    }
    public function getUri(): string
    {
        return str_replace(['{parent_id}', '{child_id}'], [rawurlencode($this->parent_id), rawurlencode($this->child_id)], '/parents/{parent_id}/child/child_id/');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Model\ParentsParentIdChildChildIdPatchBody) {
            return [['Content-Type' => ['application/json']], \Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
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
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Model\Child', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}