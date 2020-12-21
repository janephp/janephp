<?php

namespace Github\Endpoint;

class ChecksListForSuite extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $check_suite_id;
    /**
    * **Note:** The Checks API only looks for pushes in the repository where the check suite or check run were created. Pushes to a branch in a forked repository are not detected and return an empty `pull_requests` array.
    
    Lists check runs for a check suite using its `id`. GitHub Apps must have the `checks:read` permission on a private repository or pull access to a public repository to get check runs. OAuth Apps and authenticated users must have the `repo` scope to get check runs in a private repository.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $checkSuiteId check_suite_id parameter
    * @param array $queryParameters {
    *     @var string $check_name Returns check runs with the specified `name`.
    *     @var string $status Returns check runs with the specified `status`. Can be one of `queued`, `in_progress`, or `completed`.
    *     @var string $filter Filters check runs by their `completed_at` timestamp. Can be one of `latest` (returning the most recent check runs) or `all`.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    */
    public function __construct(string $owner, string $repo, int $checkSuiteId, array $queryParameters = array())
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->check_suite_id = $checkSuiteId;
        $this->queryParameters = $queryParameters;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{check_suite_id}'), array($this->owner, $this->repo, $this->check_suite_id), '/repos/{owner}/{repo}/check-suites/{check_suite_id}/check-runs');
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
        $optionsResolver->setDefined(array('check_name', 'status', 'filter', 'per_page', 'page'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('filter' => 'latest', 'per_page' => 30, 'page' => 1));
        $optionsResolver->setAllowedTypes('check_name', array('string'));
        $optionsResolver->setAllowedTypes('status', array('string'));
        $optionsResolver->setAllowedTypes('filter', array('string'));
        $optionsResolver->setAllowedTypes('per_page', array('int'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Github\Model\ReposOwnerRepoCheckSuitesCheckSuiteIdCheckRunsGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\ReposOwnerRepoCheckSuitesCheckSuiteIdCheckRunsGetResponse200', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}