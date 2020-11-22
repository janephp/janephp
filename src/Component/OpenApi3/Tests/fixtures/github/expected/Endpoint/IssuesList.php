<?php

namespace Github\Endpoint;

class IssuesList extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    /**
    * List issues assigned to the authenticated user across all visible repositories including owned repositories, member
    repositories, and organization repositories. You can use the `filter` query parameter to fetch issues that are not
    necessarily assigned to you. See the [Parameters table](https://developer.github.com/v3/issues/#parameters) for more
    information.
    
    
    **Note**: GitHub's REST API v3 considers every pull request an issue, but not every issue is a pull request. For this
    reason, "Issues" endpoints may return both issues and pull requests in the response. You can identify pull requests by
    the `pull_request` key. Be aware that the `id` of a pull request returned from "Issues" endpoints will be an _issue id_. To find out the pull
    request id, use the "[List pull requests](https://developer.github.com/v3/pulls/#list-pull-requests)" endpoint.
    *
    * @param array $queryParameters {
    *     @var string $filter Indicates which sorts of issues to return. Can be one of:  
    \* `assigned`: Issues assigned to you  
    \* `created`: Issues created by you  
    \* `mentioned`: Issues mentioning you  
    \* `subscribed`: Issues you're subscribed to updates for  
    \* `all`: All issues the authenticated user can see, regardless of participation or creation
    *     @var string $state Indicates the state of the issues to return. Can be either `open`, `closed`, or `all`.
    *     @var string $labels A list of comma separated label names. Example: `bug,ui,@high`
    *     @var string $sort What to sort results by. Can be either `created`, `updated`, `comments`.
    *     @var string $direction One of `asc` (ascending) or `desc` (descending).
    *     @var string $since Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
    *     @var bool $collab 
    *     @var bool $orgs 
    *     @var bool $owned 
    *     @var bool $pulls 
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/issues';
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
        $optionsResolver->setDefined(array('filter', 'state', 'labels', 'sort', 'direction', 'since', 'collab', 'orgs', 'owned', 'pulls', 'per_page', 'page'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('filter' => 'assigned', 'state' => 'open', 'sort' => 'created', 'direction' => 'desc', 'per_page' => 30, 'page' => 1));
        $optionsResolver->setAllowedTypes('filter', array('string'));
        $optionsResolver->setAllowedTypes('state', array('string'));
        $optionsResolver->setAllowedTypes('labels', array('string'));
        $optionsResolver->setAllowedTypes('sort', array('string'));
        $optionsResolver->setAllowedTypes('direction', array('string'));
        $optionsResolver->setAllowedTypes('since', array('string'));
        $optionsResolver->setAllowedTypes('collab', array('bool'));
        $optionsResolver->setAllowedTypes('orgs', array('bool'));
        $optionsResolver->setAllowedTypes('owned', array('bool'));
        $optionsResolver->setAllowedTypes('pulls', array('bool'));
        $optionsResolver->setAllowedTypes('per_page', array('int'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\IssuesListUnprocessableEntityException
     * @throws \Github\Exception\IssuesListNotFoundException
     *
     * @return null|\Github\Model\Issue[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\Issue[]', 'json');
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\IssuesListUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
        if (304 === $status) {
            return null;
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\IssuesListNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}