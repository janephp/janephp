<?php

namespace Github\Endpoint;

class ActionsGetJobForWorkflowRun extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $job_id;
    /**
     * Gets a specific job in a workflow run. Anyone with read access to the repository can use this endpoint. If the repository is private you must use an access token with the `repo` scope. GitHub Apps must have the `actions:read` permission to use this endpoint.
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
        return str_replace(array('{owner}', '{repo}', '{job_id}'), array($this->owner, $this->repo, $this->job_id), '/repos/{owner}/{repo}/actions/jobs/{job_id}');
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
     *
     * @return null|\Github\Model\Job
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (202 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\Job', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}