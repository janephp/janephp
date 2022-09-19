<?php

namespace ApiPlatform\Demo\Endpoint;

class ApiBooksGetCollection extends \ApiPlatform\Demo\Runtime\Client\BaseEndpoint implements \ApiPlatform\Demo\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Retrieves the collection of Book resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     *     @var int $itemsPerPage The number of items per page
     *     @var bool $archived 
     *     @var string $order[id] 
     *     @var string $order[title] 
     *     @var string $order[author] 
     *     @var string $order[isbn] 
     *     @var string $order[publicationDate] 
     *     @var array $properties[] 
     *     @var string $title 
     *     @var string $author 
     * }
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     */
    public function __construct(array $queryParameters = array(), array $accept = array())
    {
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \ApiPlatform\Demo\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/books';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        if (empty($this->accept)) {
            return array('Accept' => array('application/ld+json', 'application/hal+json', 'application/vnd.api+json', 'application/json', 'application/xml', 'text/xml', 'application/x-yaml', 'text/csv'));
        }
        return $this->accept;
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('page', 'itemsPerPage', 'archived', 'order[id]', 'order[title]', 'order[author]', 'order[isbn]', 'order[publicationDate]', 'properties[]', 'title', 'author'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('page' => 1, 'itemsPerPage' => 30));
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('itemsPerPage', array('int'));
        $optionsResolver->setAllowedTypes('archived', array('bool'));
        $optionsResolver->setAllowedTypes('order[id]', array('string'));
        $optionsResolver->setAllowedTypes('order[title]', array('string'));
        $optionsResolver->setAllowedTypes('order[author]', array('string'));
        $optionsResolver->setAllowedTypes('order[isbn]', array('string'));
        $optionsResolver->setAllowedTypes('order[publicationDate]', array('string'));
        $optionsResolver->setAllowedTypes('properties[]', array('array'));
        $optionsResolver->setAllowedTypes('title', array('string'));
        $optionsResolver->setAllowedTypes('author', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\ApiPlatform\Demo\Model\BooksGetLdjsonResponse200|\ApiPlatform\Demo\Model\BooksGetHaljsonResponse200|\ApiPlatform\Demo\Model\BookBookRead[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            if (mb_strpos($contentType, 'application/ld+json') !== false) {
                return $serializer->deserialize($body, 'ApiPlatform\\Demo\\Model\\BooksGetLdjsonResponse200', 'json');
            }
            if (mb_strpos($contentType, 'application/hal+json') !== false) {
                return $serializer->deserialize($body, 'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200', 'json');
            }
            if (mb_strpos($contentType, 'application/vnd.api+json') !== false) {
                return $serializer->deserialize($body, 'ApiPlatform\\Demo\\Model\\BookBookRead[]', 'json');
            }
            if (mb_strpos($contentType, 'application/json') !== false) {
                return $serializer->deserialize($body, 'ApiPlatform\\Demo\\Model\\BookBookRead[]', 'json');
            }
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}