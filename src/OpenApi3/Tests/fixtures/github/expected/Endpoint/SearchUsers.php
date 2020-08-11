<?php

namespace Github\Endpoint;

class SearchUsers extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    /**
    * Find users via various criteria. This method returns up to 100 results [per page](https://developer.github.com/v3/#pagination).
    
    When searching for users, you can get text match metadata for the issue **login**, **email**, and **name** fields when you pass the `text-match` media type. For more details about highlighting search results, see [Text match metadata](https://developer.github.com/v3/search/#text-match-metadata). For more details about how to receive highlighted search results, see [Text match metadata](https://developer.github.com/v3/search/#text-match-metadata).
    
    For example, if you're looking for a list of popular users, you might try this query:
    
    `q=tom+repos:%3E42+followers:%3E1000`
    
    This query searches for users with the name `tom`. The results are restricted to users with more than 42 repositories and over 1,000 followers.
    *
    * @param array $queryParameters {
    *     @var string $q The query contains one or more search keywords and qualifiers. Qualifiers allow you to limit your search to specific areas of GitHub. The REST API supports the same qualifiers as GitHub.com. To learn more about the format of the query, see [Constructing a search query](https://developer.github.com/v3/search/#constructing-a-search-query). See "[Searching users](https://help.github.com/articles/searching-users/)" for a detailed list of qualifiers.
    *     @var string $sort Sorts the results of your query by number of `followers` or `repositories`, or when the person `joined` GitHub. Default: [best match](https://developer.github.com/v3/search/#ranking-search-results)
    *     @var string $order Determines whether the first search result returned is the highest number of matches (`desc`) or lowest number of matches (`asc`). This parameter is ignored unless you provide `sort`.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/search/users';
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
        $optionsResolver->setAllowedTypes('q', array('string'));
        $optionsResolver->setAllowedTypes('sort', array('string'));
        $optionsResolver->setAllowedTypes('order', array('string'));
        $optionsResolver->setAllowedTypes('per_page', array('int'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\SearchUsersServiceUnavailableException
     * @throws \Github\Exception\SearchUsersUnprocessableEntityException
     *
     * @return null|\Github\Model\SearchUsersGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\SearchUsersGetResponse200', 'json');
        }
        if (304 === $status) {
            return null;
        }
        if (503 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\SearchUsersServiceUnavailableException($serializer->deserialize($body, 'Github\\Model\\ResponseServiceUnavailable', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\SearchUsersUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}