<?php

namespace Github\Endpoint;

class ProjectsUpdate extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $project_id;
    /**
     * Updates a project board's information. Returns a `404 Not Found` status if projects are disabled. If you do not have sufficient privileges to perform this action, a `401 Unauthorized` or `410 Gone` status is returned.
     *
     * @param int $projectId 
     * @param \Github\Model\ProjectsProjectIdPatchBody $requestBody 
     */
    public function __construct(int $projectId, \Github\Model\ProjectsProjectIdPatchBody $requestBody)
    {
        $this->project_id = $projectId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ProjectsProjectIdPatchBody) {
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
     * @throws \Github\Exception\ProjectsUpdateNotFoundException
     * @throws \Github\Exception\ProjectsUpdateForbiddenException
     * @throws \Github\Exception\ProjectsUpdateUnauthorizedException
     * @throws \Github\Exception\ProjectsUpdateGoneException
     * @throws \Github\Exception\ProjectsUpdateUnprocessableEntityException
     *
     * @return null|\Github\Model\Project
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\Project', 'json');
        }
        if (404 === $status) {
            throw new \Github\Exception\ProjectsUpdateNotFoundException();
        }
        if (304 === $status) {
            return null;
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ProjectsUpdateForbiddenException($serializer->deserialize($body, 'Github\\Model\\ProjectsProjectIdPatchResponse403', 'json'));
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ProjectsUpdateUnauthorizedException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (410 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ProjectsUpdateGoneException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ProjectsUpdateUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationErrorSimple', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}