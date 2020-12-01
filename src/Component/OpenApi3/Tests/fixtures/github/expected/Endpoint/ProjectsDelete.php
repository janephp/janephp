<?php

namespace Github\Endpoint;

class ProjectsDelete extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * Deletes a project board. Returns a `404 Not Found` status if projects are disabled.
     *
     * @param int $projectId 
     */
    public function __construct(int $projectId)
    {
        $this->project_id = $projectId;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}');
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
     * @throws \Github\Exception\ProjectsDeleteForbiddenException
     * @throws \Github\Exception\ProjectsDeleteUnauthorizedException
     * @throws \Github\Exception\ProjectsDeleteGoneException
     * @throws \Github\Exception\ProjectsDeleteNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (304 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ProjectsDeleteForbiddenException($serializer->deserialize($body, 'Github\\Model\\ProjectsProjectIdDeleteResponse403', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ProjectsDeleteUnauthorizedException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (is_null($contentType) === false && (410 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ProjectsDeleteGoneException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ProjectsDeleteNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}