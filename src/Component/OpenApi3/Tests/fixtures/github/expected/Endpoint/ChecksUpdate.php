<?php

namespace Github\Endpoint;

class ChecksUpdate extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $check_run_id;
    /**
    * **Note:** The Checks API only looks for pushes in the repository where the check suite or check run were created. Pushes to a branch in a forked repository are not detected and return an empty `pull_requests` array.
    
    Updates a check run for a specific commit in a repository. Your GitHub App must have the `checks:write` permission to edit check runs.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $checkRunId check_run_id parameter
    * @param null|\Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBody $requestBody 
    */
    public function __construct(string $owner, string $repo, int $checkRunId, ?\Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBody $requestBody = null)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->check_run_id = $checkRunId;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{check_run_id}'), array($this->owner, $this->repo, $this->check_run_id), '/repos/{owner}/{repo}/check-runs/{check_run_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBody) {
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
     *
     * @return null|\Github\Model\CheckRun
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize((string) $body, 'Github\\Model\\CheckRun', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}