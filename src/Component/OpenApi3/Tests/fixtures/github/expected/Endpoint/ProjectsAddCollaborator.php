<?php

namespace Github\Endpoint;

class ProjectsAddCollaborator extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $username;
    /**
     * Adds a collaborator to an organization project and sets their permission level. You must be an organization owner or a project `admin` to add a collaborator.
     *
     * @param int $projectId 
     * @param string $username 
     * @param null|\Github\Model\ProjectsProjectIdCollaboratorsUsernamePutBody $requestBody 
     */
    public function __construct(int $projectId, string $username, ?\Github\Model\ProjectsProjectIdCollaboratorsUsernamePutBody $requestBody = null)
    {
        $this->project_id = $projectId;
        $this->username = $username;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}', '{username}'), array($this->project_id, $this->username), '/projects/{project_id}/collaborators/{username}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ProjectsProjectIdCollaboratorsUsernamePutBody) {
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
     * @throws \Github\Exception\ProjectsAddCollaboratorNotFoundException
     * @throws \Github\Exception\ProjectsAddCollaboratorUnsupportedMediaTypeException
     * @throws \Github\Exception\ProjectsAddCollaboratorUnprocessableEntityException
     * @throws \Github\Exception\ProjectsAddCollaboratorForbiddenException
     * @throws \Github\Exception\ProjectsAddCollaboratorUnauthorizedException
     *
     * @return null|\Psr\Http\Message\StreamInterface
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (204 === $status) {
            return $body;
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ProjectsAddCollaboratorNotFoundException($serializer->deserialize((string) $body, 'Github\\Model\\BasicError', 'json'), $response);
        }
        if (is_null($contentType) === false && (415 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ProjectsAddCollaboratorUnsupportedMediaTypeException($serializer->deserialize((string) $body, 'Github\\Model\\ResponsePreviewHeaderMissing', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ProjectsAddCollaboratorUnprocessableEntityException($serializer->deserialize((string) $body, 'Github\\Model\\ValidationError', 'json'), $response);
        }
        if (304 === $status) {
            return $body;
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ProjectsAddCollaboratorForbiddenException($serializer->deserialize((string) $body, 'Github\\Model\\BasicError', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ProjectsAddCollaboratorUnauthorizedException($serializer->deserialize((string) $body, 'Github\\Model\\BasicError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}