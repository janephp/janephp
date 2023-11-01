<?php

namespace Github\Endpoint;

class ActionsDownloadJobLogsForWorkflowRun extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $job_id;
    /**
    * Gets a redirect URL to download a plain text file of logs for a workflow job. This link expires after 1 minute. Look
    for `Location:` in the response header to find the URL for the download. Anyone with read access to the repository can
    use this endpoint. If the repository is private you must use an access token with the `repo` scope. GitHub Apps must
    have the `actions:read` permission to use this endpoint.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $jobId job_id parameter
    */
    public function __construct(string $owner, string $repo, int $jobId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->job_id = $jobId;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{owner}', '{repo}', '{job_id}'], [$this->owner, $this->repo, $this->job_id], '/repos/{owner}/{repo}/actions/jobs/{job_id}/logs');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
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
        if (302 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}