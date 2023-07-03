<?php

namespace Github\Endpoint;

class TeamsRemoveRepoInOrg extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    protected $team_slug;
    protected $owner;
    protected $repo;
    /**
     * If the authenticated user is an organization owner or a team maintainer, they can remove any repositories from the team. To remove a repository from a team as an organization member, the authenticated user must have admin access to the repository and must be able to see the team. This does not delete the repository, it just removes it from the team.
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `DELETE /organizations/{org_id}/team/{team_id}/repos/{owner}/{repo}`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param string $owner 
     * @param string $repo 
     */
    public function __construct(string $org, string $teamSlug, string $owner, string $repo)
    {
        $this->org = $org;
        $this->team_slug = $teamSlug;
        $this->owner = $owner;
        $this->repo = $repo;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{team_slug}', '{owner}', '{repo}'), array($this->org, $this->team_slug, $this->owner, $this->repo), '/orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
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
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}