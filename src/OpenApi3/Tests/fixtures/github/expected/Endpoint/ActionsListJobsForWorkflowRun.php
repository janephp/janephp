<?php

namespace Github\Endpoint;

class ActionsListJobsForWorkflowRun extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $owner;
    protected $repo;
    protected $run_id;
    /**
    * Lists jobs for a workflow run. Anyone with read access to the repository can use this endpoint. If the repository is private you must use an access token with the `repo` scope. GitHub Apps must have the `actions:read` permission to use this endpoint. You can use parameters to narrow the list of results. For more information about using parameters, see [Parameters](https://developer.github.com/v3/#parameters).
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $runId 
    * @param array $queryParameters {
    *     @var string $filter Filters jobs by their `completed_at` timestamp. Can be one of:  
    \* `latest`: Returns jobs from the most recent execution of the workflow run.  
    \* `all`: Returns all jobs for a workflow run, including from old executions of the workflow run.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    */
    public function __construct(string $owner, string $repo, int $runId, array $queryParameters = array())
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->run_id = $runId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{run_id}'), array($this->owner, $this->repo, $this->run_id), '/repos/{owner}/{repo}/actions/runs/{run_id}/jobs');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('filter', 'per_page', 'page'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('filter' => 'latest', 'per_page' => 30, 'page' => 1));
        $optionsResolver->setAllowedTypes('filter', array('string'));
        $optionsResolver->setAllowedTypes('per_page', array('int'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Github\Model\ReposOwnerRepoActionsRunsRunIdJobsGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\ReposOwnerRepoActionsRunsRunIdJobsGetResponse200', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}