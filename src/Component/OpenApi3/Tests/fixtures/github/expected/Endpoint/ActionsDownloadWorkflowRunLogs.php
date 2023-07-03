<?php

namespace Github\Endpoint;

class ActionsDownloadWorkflowRunLogs extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $run_id;
    /**
    * Gets a redirect URL to download an archive of log files for a workflow run. This link expires after 1 minute. Look for
    `Location:` in the response header to find the URL for the download. Anyone with read access to the repository can use
    this endpoint. If the repository is private you must use an access token with the `repo` scope. GitHub Apps must have
    the `actions:read` permission to use this endpoint.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $runId 
    */
    public function __construct(string $owner, string $repo, int $runId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->run_id = $runId;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{run_id}'), array($this->owner, $this->repo, $this->run_id), '/repos/{owner}/{repo}/actions/runs/{run_id}/logs');
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
        if (302 === $status) {
            return $body;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}