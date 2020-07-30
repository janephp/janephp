<?php

namespace Github\Endpoint;

class TeamsCheckPermissionsForProjectInOrg extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $org;
    protected $team_slug;
    protected $project_id;
    /**
     * Checks whether a team has `read`, `write`, or `admin` permissions for an organization project. The response includes projects inherited from a parent team.
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `GET /organizations/{org_id}/team/{team_id}/projects/{project_id}`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param int $projectId 
     */
    public function __construct(string $org, string $teamSlug, int $projectId)
    {
        $this->org = $org;
        $this->team_slug = $teamSlug;
        $this->project_id = $projectId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{team_slug}', '{project_id}'), array($this->org, $this->team_slug, $this->project_id), '/orgs/{org}/teams/{team_slug}/projects/{project_id}');
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
     * @throws \Github\Exception\TeamsCheckPermissionsForProjectInOrgNotFoundException
     *
     * @return null|\Github\Model\TeamProject
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\TeamProject', 'json');
        }
        if (404 === $status) {
            throw new \Github\Exception\TeamsCheckPermissionsForProjectInOrgNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}