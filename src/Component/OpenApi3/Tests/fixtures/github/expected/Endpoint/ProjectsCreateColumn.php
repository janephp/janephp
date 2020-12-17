<?php

namespace Github\Endpoint;

class ProjectsCreateColumn extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * 
     *
     * @param int $projectId 
     * @param null|\Github\Model\ProjectsProjectIdColumnsPostBody $requestBody 
     */
    public function __construct(int $projectId, ?\Github\Model\ProjectsProjectIdColumnsPostBody $requestBody = null)
    {
        $this->project_id = $projectId;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}/columns');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ProjectsProjectIdColumnsPostBody) {
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
     * @throws \Github\Exception\ProjectsCreateColumnForbiddenException
     * @throws \Github\Exception\ProjectsCreateColumnUnprocessableEntityException
     * @throws \Github\Exception\ProjectsCreateColumnUnauthorizedException
     *
     * @return null|\Github\Model\ProjectColumn
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\ProjectColumn', 'json');
        }
        if (304 === $status) {
            return null;
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ProjectsCreateColumnForbiddenException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ProjectsCreateColumnUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationErrorSimple', 'json'));
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ProjectsCreateColumnUnauthorizedException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}