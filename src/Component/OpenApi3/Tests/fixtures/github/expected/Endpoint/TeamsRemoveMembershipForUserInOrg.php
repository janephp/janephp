<?php

namespace Github\Endpoint;

class TeamsRemoveMembershipForUserInOrg extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    protected $team_slug;
    protected $username;
    /**
    * Team synchronization is available for organizations using GitHub Enterprise Cloud. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    To remove a membership between a user and a team, the authenticated user must have 'admin' permissions to the team or be an owner of the organization that the team is associated with. Removing team membership does not delete the user, it just removes their membership from the team.
    
    **Note:** When you have team synchronization set up for a team with your organization's identity provider (IdP), you will see an error if you attempt to use the API for making changes to the team's membership. If you have access to manage group membership in your IdP, you can manage GitHub team membership through your identity provider, which automatically adds and removes team members in an organization. For more information, see "[Synchronizing teams between your identity provider and GitHub](https://help.github.com/articles/synchronizing-teams-between-your-identity-provider-and-github/)."
    
    **Note:** You can also specify a team by `org_id` and `team_id` using the route `DELETE /organizations/{org_id}/team/{team_id}/memberships/{username}`.
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
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{team_slug}', '{username}'), array($this->org, $this->team_slug, $this->username), '/orgs/{org}/teams/{team_slug}/memberships/{username}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\TeamsRemoveMembershipForUserInOrgForbiddenException
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
        if (403 === $status) {
            throw new \Github\Exception\TeamsRemoveMembershipForUserInOrgForbiddenException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}