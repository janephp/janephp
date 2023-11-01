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
    public function __construct(array $queryParameters = [], array $accept = [])
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
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/ld+json', 'application/hal+json', 'application/vnd.api+json', 'application/json', 'application/xml', 'text/xml', 'application/x-yaml', 'text/csv']];
        }
        return $this->accept;
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['page', 'itemsPerPage', 'archived', 'order[id]', 'order[title]', 'order[author]', 'order[isbn]', 'order[publicationDate]', 'properties', 'title', 'author']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1, 'itemsPerPage' => 30]);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('itemsPerPage', ['int']);
        $optionsResolver->addAllowedTypes('archived', ['bool']);
        $optionsResolver->addAllowedTypes('order[id]', ['string']);
        $optionsResolver->addAllowedTypes('order[title]', ['string']);
        $optionsResolver->addAllowedTypes('order[author]', ['string']);
        $optionsResolver->addAllowedTypes('order[isbn]', ['string']);
        $optionsResolver->addAllowedTypes('order[publicationDate]', ['string']);
        $optionsResolver->addAllowedTypes('properties', ['array']);
        $optionsResolver->addAllowedTypes('title', ['string']);
        $optionsResolver->addAllowedTypes('author', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\ApiPlatform\Demo\Model\BooksGetLdjsonResponse200|\ApiPlatform\Demo\Model\BooksGetHaljsonResponse200|\ApiPlatform\Demo\Model\BookBookRead[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
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
        return ['apiKey'];
    }
}