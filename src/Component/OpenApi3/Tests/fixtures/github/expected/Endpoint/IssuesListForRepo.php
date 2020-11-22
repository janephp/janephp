<?php

namespace Github\Endpoint;

class IssuesListForRepo extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    /**
    * List issues in a repository.
    
    **Note**: GitHub's REST API v3 considers every pull request an issue, but not every issue is a pull request. For this
    reason, "Issues" endpoints may return both issues and pull requests in the response. You can identify pull requests by
    the `pull_request` key. Be aware that the `id` of a pull request returned from "Issues" endpoints will be an _issue id_. To find out the pull
    request id, use the "[List pull requests](https://developer.github.com/v3/pulls/#list-pull-requests)" endpoint.
    *
    * @param string $owner 
    * @param string $repo 
    * @param array $queryParameters {
    *     @var string $milestone If an `integer` is passed, it should refer to a milestone by its `number` field. If the string `*` is passed, issues with any milestone are accepted. If the string `none` is passed, issues without milestones are returned.
    *     @var string $state Indicates the state of the issues to return. Can be either `open`, `closed`, or `all`.
    *     @var string $assignee Can be the name of a user. Pass in `none` for issues with no assigned user, and `*` for issues assigned to any user.
    *     @var string $creator The user that created the issue.
    *     @var string $mentioned A user that's mentioned in the issue.
    *     @var string $labels A list of comma separated label names. Example: `bug,ui,@high`
    *     @var string $sort What to sort results by. Can be either `created`, `updated`, `comments`.
    *     @var string $direction One of `asc` (ascending) or `desc` (descending).
    *     @var string $since Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    */
    public function __construct(string $owner, string $repo, array $queryParameters = array())
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->queryParameters = $queryParameters;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), '/repos/{owner}/{repo}/issues');
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
        $optionsResolver->setDefined(array('milestone', 'state', 'assignee', 'creator', 'mentioned', 'labels', 'sort', 'direction', 'since', 'per_page', 'page'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('state' => 'open', 'sort' => 'created', 'direction' => 'desc', 'per_page' => 30, 'page' => 1));
        $optionsResolver->setAllowedTypes('milestone', array('string'));
        $optionsResolver->setAllowedTypes('state', array('string'));
        $optionsResolver->setAllowedTypes('assignee', array('string'));
        $optionsResolver->setAllowedTypes('creator', array('string'));
        $optionsResolver->setAllowedTypes('mentioned', array('string'));
        $optionsResolver->setAllowedTypes('labels', array('string'));
        $optionsResolver->setAllowedTypes('sort', array('string'));
        $optionsResolver->setAllowedTypes('direction', array('string'));
        $optionsResolver->setAllowedTypes('since', array('string'));
        $optionsResolver->setAllowedTypes('per_page', array('int'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\IssuesListForRepoUnprocessableEntityException
     * @throws \Github\Exception\IssuesListForRepoNotFoundException
     *
     * @return null|\Github\Model\IssueSimple[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\IssueSimple[]', 'json');
        }
        if (301 === $status) {
            return null;
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\IssuesListForRepoUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\IssuesListForRepoNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}