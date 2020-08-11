<?php

namespace Github\Endpoint;

class TeamsCheckPermissionsForRepoLegacy extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $team_id;
    protected $owner;
    protected $repo;
    /**
    * **Note**: Repositories inherited through a parent team will also be checked.
    
    **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [Check team permissions for a repository](https://developer.github.com/v3/teams/#check-team-permissions-for-a-repository) endpoint.
    
    You can also get information about the specified repository, including what permissions the team grants on it, by passing the following custom [media type](https://developer.github.com/v3/media/) via the `Accept` header:
    *
    * @param int $teamId 
    * @param string $owner 
    * @param string $repo 
    */
    public function __construct(int $teamId, string $owner, string $repo)
    {
        $this->team_id = $teamId;
        $this->owner = $owner;
        $this->repo = $repo;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{team_id}', '{owner}', '{repo}'), array($this->team_id, $this->owner, $this->repo), '/teams/{team_id}/repos/{owner}/{repo}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\TeamsCheckPermissionsForRepoLegacyNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
        }
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Github\Exception\TeamsCheckPermissionsForRepoLegacyNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}