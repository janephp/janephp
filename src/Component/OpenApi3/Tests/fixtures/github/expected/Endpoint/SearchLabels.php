<?php

namespace Github\Endpoint;

class SearchLabels extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    /**
    * Find labels in a repository with names or descriptions that match search keywords. Returns up to 100 results [per page](https://developer.github.com/v3/#pagination).
    
    When searching for labels, you can get text match metadata for the label **name** and **description** fields when you pass the `text-match` media type. For more details about how to receive highlighted search results, see [Text match metadata](https://developer.github.com/v3/search/#text-match-metadata).
    
    For example, if you want to find labels in the `linguist` repository that match `bug`, `defect`, or `enhancement`. Your query might look like this:
    
    `q=bug+defect+enhancement&repository_id=64778136`
    
    The labels that best match the query appear first in the search results.
    *
    * @param array $queryParameters {
    *     @var int $repository_id The id of the repository.
    *     @var string $q The search keywords. This endpoint does not accept qualifiers in the query. To learn more about the format of the query, see [Constructing a search query](https://developer.github.com/v3/search/#constructing-a-search-query).
    *     @var string $sort Sorts the results of your query by when the label was `created` or `updated`. Default: [best match](https://developer.github.com/v3/search/#ranking-search-results)
    *     @var string $order Determines whether the first search result returned is the highest number of matches (`desc`) or lowest number of matches (`asc`). This parameter is ignored unless you provide `sort`.
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
        return '/search/labels';
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
        $optionsResolver->setDefined(array('repository_id', 'q', 'sort', 'order'));
        $optionsResolver->setRequired(array('repository_id', 'q'));
        $optionsResolver->setDefaults(array('order' => 'desc'));
        $optionsResolver->addAllowedTypes('repository_id', array('int'));
        $optionsResolver->addAllowedTypes('q', array('string'));
        $optionsResolver->addAllowedTypes('sort', array('string'));
        $optionsResolver->addAllowedTypes('order', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\SearchLabelsNotFoundException
     * @throws \Github\Exception\SearchLabelsForbiddenException
     * @throws \Github\Exception\SearchLabelsUnprocessableEntityException
     *
     * @return null|\Github\Model\SearchLabelsGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\SearchLabelsGetResponse200', 'json');
        }
        if (304 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\SearchLabelsNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\SearchLabelsForbiddenException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\SearchLabelsUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}