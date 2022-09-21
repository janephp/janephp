<?php

namespace Github\Endpoint;

class SearchCommits extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    /**
    * Find commits via various criteria on the default branch (usually `master`). This method returns up to 100 results [per page](https://developer.github.com/v3/#pagination).
    
    When searching for commits, you can get text match metadata for the **message** field when you provide the `text-match` media type. For more details about how to receive highlighted search results, see [Text match
    metadata](https://developer.github.com/v3/search/#text-match-metadata).
    
    For example, if you want to find commits related to CSS in the [octocat/Spoon-Knife](https://github.com/octocat/Spoon-Knife) repository. Your query would look something like this:
    
    `q=repo:octocat/Spoon-Knife+css`
    *
    * @param array $queryParameters {
    *     @var string $q The query contains one or more search keywords and qualifiers. Qualifiers allow you to limit your search to specific areas of GitHub. The REST API supports the same qualifiers as GitHub.com. To learn more about the format of the query, see [Constructing a search query](https://developer.github.com/v3/search/#constructing-a-search-query). See "[Searching commits](https://help.github.com/articles/searching-commits/)" for a detailed list of qualifiers.
    *     @var string $sort Sorts the results of your query by `author-date` or `committer-date`. Default: [best match](https://developer.github.com/v3/search/#ranking-search-results)
    *     @var string $order Determines whether the first search result returned is the highest number of matches (`desc`) or lowest number of matches (`asc`). This parameter is ignored unless you provide `sort`.
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
        return '/search/commits';
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
        $optionsResolver->setDefined(array('q', 'sort', 'order', 'per_page', 'page'));
        $optionsResolver->setRequired(array('q'));
        $optionsResolver->setDefaults(array('order' => 'desc', 'per_page' => 30, 'page' => 1));
        $optionsResolver->addAllowedTypes('q', array('string'));
        $optionsResolver->addAllowedTypes('sort', array('string'));
        $optionsResolver->addAllowedTypes('order', array('string'));
        $optionsResolver->addAllowedTypes('per_page', array('int'));
        $optionsResolver->addAllowedTypes('page', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\SearchCommitsUnsupportedMediaTypeException
     *
     * @return null|\Github\Model\SearchCommitsGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\SearchCommitsGetResponse200', 'json');
        }
        if (304 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (415 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\SearchCommitsUnsupportedMediaTypeException($serializer->deserialize($body, 'Github\\Model\\ResponsePreviewHeaderMissing', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}