<?php

namespace Github\Endpoint;

class ActionsDeleteSelfHostedRunnerFromRepo extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $runner_id;
    /**
     * Forces the removal of a self-hosted runner from a repository. You can use this endpoint to completely remove the runner when the machine you were using no longer exists. You must authenticate using an access token with the `repo` scope to use this endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $runnerId runner_id parameter
     */
    public function __construct(string $owner, string $repo, int $runnerId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->runner_id = $runnerId;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{runner_id}'), array($this->owner, $this->repo, $this->runner_id), '/repos/{owner}/{repo}/actions/runners/{runner_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}