<?php

namespace Jane\OpenApi\Tests\Expected\Endpoint;

class PatchParentsByParentIdChildChildId extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $parent_id;
    protected $child_id;
    /**
     * 
     *
     * @param string $parentId 
     * @param string $childId 
     * @param \Jane\OpenApi\Tests\Expected\Model\ParentsParentIdChildChildIdPatchBody $requestBody 
     */
    public function __construct(string $parentId, string $childId, \Jane\OpenApi\Tests\Expected\Model\ParentsParentIdChildChildIdPatchBody $requestBody)
    {
        $this->parent_id = $parentId;
        $this->child_id = $childId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{parent_id}', '{child_id}'), array($this->parent_id, $this->child_id), '/parents/{parent_id}/child/child_id/');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Jane\OpenApi\Tests\Expected\Model\ParentsParentIdChildChildIdPatchBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\OpenApi\Tests\Expected\Model\Child
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\\OpenApi\\Tests\\Expected\\Model\\Child', 'json');
        }
    }
}