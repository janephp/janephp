<?php

namespace Github\Endpoint;

class TeamsCheckPermissionsForRepoInOrg extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    protected $team_slug;
    protected $owner;
    protected $repo;
    /**
    * Checks whether a team has `admin`, `push`, `maintain`, `triage`, or `pull` permission for a repository. Repositories inherited through a parent team will also be checked.
    
    You can also get information about the specified repository, including what permissions the team grants on it, by passing the following custom [media type](https://developer.github.com/v3/media/) via the `application/vnd.github.v3.repository+json` accept header.
    
    If a team doesn't have permission for the repository, you will receive a `404 Not Found` response status.
    
    **Note:** You can also specify a team by `org_id` and `team_id` using the route `GET /organizations/{org_id}/team/{team_id}/repos/{owner}/{repo}`.
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
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{team_slug}', '{owner}', '{repo}'), array($this->org, $this->team_slug, $this->owner, $this->repo), '/orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/vnd.github.v3.repository+json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\TeamsCheckPermissionsForRepoInOrgNotFoundException
     *
     * @return null|\Psr\Http\Message\StreamInterface
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (200 === $status) {
        }
        if (204 === $status) {
            return $body;
        }
        if (404 === $status) {
            throw new \Github\Exception\TeamsCheckPermissionsForRepoInOrgNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}