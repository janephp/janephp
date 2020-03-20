<?php

namespace ApiPlatform\Demo\Endpoint;

class PutBookItem extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $id;
    /**
     * 
     *
     * @param string $id 
     * @param \stdClass|\ApiPlatform\Demo\Model\Book $requestBody 
     */
    public function __construct(string $id, $requestBody)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/books/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \stdClass) {
            return array(array('Content-Type' => array('application/ld+json')), $this->body);
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Book) {
            return array(array('Content-Type' => array('application/hal+json')), $this->body);
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Book) {
            return array(array('Content-Type' => array('application/vnd.api+json')), $this->body);
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Book) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Book) {
            return array(array('Content-Type' => array('application/xml')), $this->body);
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Book) {
            return array(array('Content-Type' => array('text/xml')), $this->body);
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Book) {
            return array(array('Content-Type' => array('application/x-yaml')), $this->body);
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Book) {
            return array(array('Content-Type' => array('text/csv')), $this->body);
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Book) {
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
     * @throws \ApiPlatform\Demo\Exception\PutBookItemBadRequestException
     * @throws \ApiPlatform\Demo\Exception\PutBookItemNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \ApiPlatform\Demo\Exception\PutBookItemBadRequestException();
        }
        if (404 === $status) {
            throw new \ApiPlatform\Demo\Exception\PutBookItemNotFoundException();
        }
    }
}