<?php

namespace Github\Endpoint;

class TeamsAddOrUpdateProjectPermissionsInOrg extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $org;
    protected $team_slug;
    protected $project_id;
    /**
     * Adds an organization project to a team. To add a project to a team or update the team's permission on a project, the authenticated user must have `admin` permissions for the project. The project and team must be part of the same organization.
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `PUT /organizations/{org_id}/team/{team_id}/projects/{project_id}`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param int $projectId 
     * @param \Github\Model\OrgsOrgTeamsTeamSlugProjectsProjectIdPutBody $requestBody 
     */
    public function __construct(string $org, string $teamSlug, int $projectId, \Github\Model\OrgsOrgTeamsTeamSlugProjectsProjectIdPutBody $requestBody)
    {
        $this->org = $org;
        $this->team_slug = $teamSlug;
        $this->project_id = $projectId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{team_slug}', '{project_id}'), array($this->org, $this->team_slug, $this->project_id), '/orgs/{org}/teams/{team_slug}/projects/{project_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\OrgsOrgTeamsTeamSlugProjectsProjectIdPutBody) {
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
     * @throws \Github\Exception\TeamsAddOrUpdateProjectPermissionsInOrgForbiddenException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\TeamsAddOrUpdateProjectPermissionsInOrgForbiddenException($serializer->deserialize($body, 'Github\\Model\\OrgsOrgTeamsTeamSlugProjectsProjectIdPutResponse403', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}