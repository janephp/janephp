<?php

namespace Github\Endpoint;

class TeamsAddOrUpdateProjectPermissionsLegacy extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $team_id;
    protected $project_id;
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [Add or update team project permissions](https://developer.github.com/v3/teams/#add-or-update-team-project-permissions) endpoint.
    
    Adds an organization project to a team. To add a project to a team or update the team's permission on a project, the authenticated user must have `admin` permissions for the project. The project and team must be part of the same organization.
    *
    * @param int $teamId 
    * @param int $projectId 
    * @param null|\Github\Model\TeamsTeamIdProjectsProjectIdPutBody $requestBody 
    */
    public function __construct(int $teamId, int $projectId, ?\Github\Model\TeamsTeamIdProjectsProjectIdPutBody $requestBody = null)
    {
        $this->team_id = $teamId;
        $this->project_id = $projectId;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{team_id}', '{project_id}'), array($this->team_id, $this->project_id), '/teams/{team_id}/projects/{project_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\TeamsTeamIdProjectsProjectIdPutBody) {
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
     * @throws \Github\Exception\TeamsAddOrUpdateProjectPermissionsLegacyForbiddenException
     * @throws \Github\Exception\TeamsAddOrUpdateProjectPermissionsLegacyNotFoundException
     * @throws \Github\Exception\TeamsAddOrUpdateProjectPermissionsLegacyUnsupportedMediaTypeException
     * @throws \Github\Exception\TeamsAddOrUpdateProjectPermissionsLegacyUnprocessableEntityException
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
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\TeamsAddOrUpdateProjectPermissionsLegacyForbiddenException($serializer->deserialize((string) $body, 'Github\\Model\\TeamsTeamIdProjectsProjectIdPutResponse403', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\TeamsAddOrUpdateProjectPermissionsLegacyNotFoundException($serializer->deserialize((string) $body, 'Github\\Model\\BasicError', 'json'), $response);
        }
        if (is_null($contentType) === false && (415 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\TeamsAddOrUpdateProjectPermissionsLegacyUnsupportedMediaTypeException($serializer->deserialize((string) $body, 'Github\\Model\\ResponsePreviewHeaderMissing', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\TeamsAddOrUpdateProjectPermissionsLegacyUnprocessableEntityException($serializer->deserialize((string) $body, 'Github\\Model\\ValidationError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}