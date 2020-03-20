<?php

namespace ApiPlatform\Demo\Endpoint;

class PostParchmentCollection extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * 
     *
     * @param \stdClass|\ApiPlatform\Demo\Model\Parchment $requestBody 
     */
    public function __construct($requestBody)
    {
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/parchments';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \stdClass) {
            return array(array('Content-Type' => array('application/ld+json')), $this->body);
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Parchment) {
            return array(array('Content-Type' => array('application/hal+json')), $this->body);
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Parchment) {
            return array(array('Content-Type' => array('application/vnd.api+json')), $this->body);
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Parchment) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Parchment) {
            return array(array('Content-Type' => array('application/xml')), $this->body);
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Parchment) {
            return array(array('Content-Type' => array('text/xml')), $this->body);
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Parchment) {
            return array(array('Content-Type' => array('application/x-yaml')), $this->body);
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Parchment) {
            return array(array('Content-Type' => array('text/csv')), $this->body);
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Parchment) {
            return array(array('Content-Type' => array('text/html')), $this->body);
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ApiPlatform\Demo\Exception\PostParchmentCollectionBadRequestException
     * @throws \ApiPlatform\Demo\Exception\PostParchmentCollectionNotFoundException
     *
     * @return null|\ApiPlatform\Demo\Model\Parchment
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'ApiPlatform\\Demo\\Model\\Parchment', 'json');
        }
        if (400 === $status) {
            throw new \ApiPlatform\Demo\Exception\PostParchmentCollectionBadRequestException();
        }
        if (404 === $status) {
            throw new \ApiPlatform\Demo\Exception\PostParchmentCollectionNotFoundException();
        }
    }
}