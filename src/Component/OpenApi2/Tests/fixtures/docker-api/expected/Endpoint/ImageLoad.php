<?php

namespace Docker\Api\Endpoint;

class ImageLoad extends \Docker\Api\Runtime\Client\BaseEndpoint implements \Docker\Api\Runtime\Client\Endpoint
{
    /**
    * Load a set of images and tags into a repository.
    
    For details on the format, see the [export image endpoint](#operation/ImageGet).
    
    *
    * @param string|resource|\Psr\Http\Message\StreamInterface $imagesTarball Tar archive containing images
    * @param array $queryParameters {
    *     @var bool $quiet Suppress progress details during load.
    * }
    */
    public function __construct($imagesTarball, array $queryParameters = array())
    {
        $this->body = $imagesTarball;
        $this->queryParameters = $queryParameters;
    }
    use \Docker\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/images/load';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), $this->body);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('quiet'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('quiet' => false));
        $optionsResolver->setAllowedTypes('quiet', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Docker\Api\Exception\ImageLoadInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (500 === $status) {
            throw new \Docker\Api\Exception\ImageLoadInternalServerErrorException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}