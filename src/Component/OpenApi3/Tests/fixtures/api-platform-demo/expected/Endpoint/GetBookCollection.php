<?php

namespace ApiPlatform\Demo\Endpoint;

class GetBookCollection extends \ApiPlatform\Demo\Runtime\Client\BaseEndpoint implements \ApiPlatform\Demo\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $properties[] Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
     *     @var string $order[id] 
     *     @var string $order[title] 
     *     @var string $order[author] 
     *     @var string $order[isbn] 
     *     @var string $order[publicationDate] 
     *     @var string $title 
     *     @var string $author 
     *     @var int $page The collection page number
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
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
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('properties', 'order[id]', 'order[title]', 'order[author]', 'order[isbn]', 'order[publicationDate]', 'title', 'author', 'page'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('page' => 1));
        $optionsResolver->addAllowedTypes('properties', array('array'));
        $optionsResolver->addAllowedTypes('order[id]', array('string'));
        $optionsResolver->addAllowedTypes('order[title]', array('string'));
        $optionsResolver->addAllowedTypes('order[author]', array('string'));
        $optionsResolver->addAllowedTypes('order[isbn]', array('string'));
        $optionsResolver->addAllowedTypes('order[publicationDate]', array('string'));
        $optionsResolver->addAllowedTypes('title', array('string'));
        $optionsResolver->addAllowedTypes('author', array('string'));
        $optionsResolver->addAllowedTypes('page', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}