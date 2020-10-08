<?php

namespace Jane\OpenApi3\Tests\Expected\Endpoint;

class GetParentsByParentIdChildChildId extends \Jane\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    protected $parent_id;
    protected $child_id;
    /**
     * 
     *
     * @param string $parentId 
     * @param string $childId 
     */
    public function __construct(string $parentId, string $childId)
    {
        $this->parent_id = $parentId;
        $this->child_id = $childId;
    }
    use \Jane\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return (new \Rize\UriTemplate\UriTemplate())->expand('/parents/{parent_id}/child/child_id/', array('parent_id' => $this->parent_id, 'child_id' => $this->child_id));
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
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
     * @return null|\Jane\OpenApi3\Tests\Expected\Model\Child
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\\OpenApi3\\Tests\\Expected\\Model\\Child', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}