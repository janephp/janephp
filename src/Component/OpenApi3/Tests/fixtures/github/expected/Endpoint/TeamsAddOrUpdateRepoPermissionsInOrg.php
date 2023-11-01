<?php

namespace Github\Endpoint;

class TeamsAddOrUpdateRepoPermissionsInOrg extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    protected $team_slug;
    protected $owner;
    protected $repo;
    /**
    * To add a repository to a team or update the team's permission on a repository, the authenticated user must have admin access to the repository, and must be able to see the team. The repository must be owned by the organization, or a direct fork of a repository owned by the organization. You will get a `422 Unprocessable Entity` status if you attempt to add a repository to a team that is not owned by the organization. Note that, if you choose not to pass any parameters, you'll need to set `Content-Length` to zero when calling out to this endpoint. For more information, see "[HTTP verbs](https://developer.github.com/v3/#http-verbs)."
    
    **Note:** You can also specify a team by `org_id` and `team_id` using the route `PUT /organizations/{org_id}/team/{team_id}/repos/{owner}/{repo}`.
    
    For more information about the permission levels, see "[Repository permission levels for an organization](https://help.github.com/en/github/setting-up-and-managing-organizations-and-teams/repository-permission-levels-for-an-organization#permission-levels-for-repositories-owned-by-an-organization)".
    *
    * @param string $org 
    * @param string $teamSlug team_slug parameter
    * @param string $owner 
    * @param string $repo 
    * @param null|\Github\Model\OrgsOrgTeamsTeamSlugReposOwnerRepoPutBody $requestBody 
    */
    public function __construct(string $org, string $teamSlug, string $owner, string $repo, ?\Github\Model\OrgsOrgTeamsTeamSlugReposOwnerRepoPutBody $requestBody = null)
    {
        $this->org = $org;
        $this->team_slug = $teamSlug;
        $this->owner = $owner;
        $this->repo = $repo;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(['{org}', '{team_slug}', '{owner}', '{repo}'], [$this->org, $this->team_slug, $this->owner, $this->repo], '/orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\OrgsOrgTeamsTeamSlugReposOwnerRepoPutBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}