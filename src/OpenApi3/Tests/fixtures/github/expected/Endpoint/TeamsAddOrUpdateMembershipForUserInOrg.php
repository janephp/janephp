<?php

namespace Github\Endpoint;

class TeamsAddOrUpdateMembershipForUserInOrg extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $org;
    protected $team_slug;
    protected $username;
    /**
    * Team synchronization is available for organizations using GitHub Enterprise Cloud. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Adds an organization member to a team. An authenticated organization owner or team maintainer can add organization members to a team.
    
    **Note:** When you have team synchronization set up for a team with your organization's identity provider (IdP), you will see an error if you attempt to use the API for making changes to the team's membership. If you have access to manage group membership in your IdP, you can manage GitHub team membership through your identity provider, which automatically adds and removes team members in an organization. For more information, see "[Synchronizing teams between your identity provider and GitHub](https://help.github.com/articles/synchronizing-teams-between-your-identity-provider-and-github/)."
    
    An organization owner can add someone who is not part of the team's organization to a team. When an organization owner adds someone to a team who is not an organization member, this endpoint will send an invitation to the person via email. This newly-created membership will be in the "pending" state until the person accepts the invitation, at which point the membership will transition to the "active" state and the user will be added as a member of the team.
    
    If the user is already a member of the team, this endpoint will update the role of the team member's role. To update the membership of a team member, the authenticated user must be an organization owner or a team maintainer.
    
    **Note:** You can also specify a team by `org_id` and `team_id` using the route `PUT /organizations/{org_id}/team/{team_id}/memberships/{username}`.
    *
    * @param string $org 
    * @param string $teamSlug team_slug parameter
    * @param string $username 
    * @param \Github\Model\OrgsOrgTeamsTeamSlugMembershipsUsernamePutBody $requestBody 
    */
    public function __construct(string $org, string $teamSlug, string $username, \Github\Model\OrgsOrgTeamsTeamSlugMembershipsUsernamePutBody $requestBody)
    {
        $this->org = $org;
        $this->team_slug = $teamSlug;
        $this->username = $username;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{team_slug}', '{username}'), array($this->org, $this->team_slug, $this->username), '/orgs/{org}/teams/{team_slug}/memberships/{username}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\OrgsOrgTeamsTeamSlugMembershipsUsernamePutBody) {
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
     * @throws \Github\Exception\TeamsAddOrUpdateMembershipForUserInOrgForbiddenException
     * @throws \Github\Exception\TeamsAddOrUpdateMembershipForUserInOrgUnprocessableEntityException
     *
     * @return null|\Github\Model\TeamMembership
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\TeamMembership', 'json');
        }
        if (403 === $status) {
            throw new \Github\Exception\TeamsAddOrUpdateMembershipForUserInOrgForbiddenException();
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\TeamsAddOrUpdateMembershipForUserInOrgUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\OrgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}