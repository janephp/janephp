<?php

namespace Github\Endpoint;

class TeamsGetMembershipForUserInOrg extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $org;
    protected $team_slug;
    protected $username;
    /**
    * Team members will include the members of child teams.
    
    To get a user's membership with a team, the team must be visible to the authenticated user.
    
    **Note:** You can also specify a team by `org_id` and `team_id` using the route `GET /organizations/{org_id}/team/{team_id}/memberships/{username}`.
    
    **Note:** The `role` for organization owners returns as `maintainer`. For more information about `maintainer` roles, see [Create a team](https://developer.github.com/v3/teams/#create-a-team).
    *
    * @param string $org 
    * @param string $teamSlug team_slug parameter
    * @param string $username 
    */
    public function __construct(string $org, string $teamSlug, string $username)
    {
        $this->org = $org;
        $this->team_slug = $teamSlug;
        $this->username = $username;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{team_slug}', '{username}'), array($this->org, $this->team_slug, $this->username), '/orgs/{org}/teams/{team_slug}/memberships/{username}');
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
     * @throws \Github\Exception\TeamsGetMembershipForUserInOrgNotFoundException
     *
     * @return null|\Github\Model\TeamMembership
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\TeamMembership', 'json');
        }
        if (404 === $status) {
            throw new \Github\Exception\TeamsGetMembershipForUserInOrgNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}