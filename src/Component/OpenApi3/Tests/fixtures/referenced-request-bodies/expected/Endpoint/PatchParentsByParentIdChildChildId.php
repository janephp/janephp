<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class PatchParentsByParentIdChildChildId extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    protected $parent_id;
    protected $child_id;
    /**
     * 
     *
     * @param string $parentId 
     * @param string $childId 
     * @param \Jane\Component\OpenApi3\Tests\Expected\Model\ParentsParentIdChildChildIdPatchBody $requestBody 
     */
    public function __construct(string $parentId, string $childId, \Jane\Component\OpenApi3\Tests\Expected\Model\ParentsParentIdChildChildIdPatchBody $requestBody)
    {
        $this->parent_id = $parentId;
        $this->child_id = $childId;
        $this->body = $requestBody;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
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
        if ($this->body instanceof \Jane\Component\OpenApi3\Tests\Expected\Model\ParentsParentIdChildChildIdPatchBody) {
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
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\Child
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Child', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}