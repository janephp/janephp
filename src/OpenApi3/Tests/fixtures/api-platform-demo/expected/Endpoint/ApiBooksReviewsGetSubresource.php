<?php

namespace ApiPlatform\Demo\Endpoint;

class ApiBooksReviewsGetSubresource extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $id;
    /**
     * 
     *
     * @param string $id 
     * @param array $queryParameters {
     *     @var string $order[id] 
     *     @var string $order[publicationDate] 
     *     @var string $book 
     *     @var array $book[] 
     *     @var int $page The collection page number
     * }
     */
    public function __construct(string $id, array $queryParameters = array())
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/books/{id}/reviews');
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
        $optionsResolver->setDefined(array('order[id]', 'order[publicationDate]', 'book', 'book[]', 'page'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('page' => 1));
        $optionsResolver->setAllowedTypes('order[id]', array('string'));
        $optionsResolver->setAllowedTypes('order[publicationDate]', array('string'));
        $optionsResolver->setAllowedTypes('book', array('string'));
        $optionsResolver->setAllowedTypes('book[]', array('array'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ApiPlatform\Demo\Exception\ApiBooksReviewsGetSubresourceNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
        if (404 === $status) {
            throw new \ApiPlatform\Demo\Exception\ApiBooksReviewsGetSubresourceNotFoundException();
        }
    }
}