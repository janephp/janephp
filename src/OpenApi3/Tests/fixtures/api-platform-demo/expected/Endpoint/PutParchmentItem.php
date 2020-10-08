<?php

namespace ApiPlatform\Demo\Endpoint;

class PutParchmentItem extends \ApiPlatform\Demo\Runtime\Client\BaseEndpoint implements \ApiPlatform\Demo\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * 
     *
     * @param string $id 
     * @param \stdClass|\ApiPlatform\Demo\Model\Parchment $requestBody 
     */
    public function __construct(string $id, $requestBody)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }
    use \ApiPlatform\Demo\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return (new \Rize\UriTemplate\UriTemplate())->expand('/parchments/{id}', array('id' => $this->id));
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
     * @throws \ApiPlatform\Demo\Exception\PutParchmentItemBadRequestException
     * @throws \ApiPlatform\Demo\Exception\PutParchmentItemNotFoundException
     *
     * @return null|\ApiPlatform\Demo\Model\Parchment
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'ApiPlatform\\Demo\\Model\\Parchment', 'json');
        }
        if (400 === $status) {
            throw new \ApiPlatform\Demo\Exception\PutParchmentItemBadRequestException();
        }
        if (404 === $status) {
            throw new \ApiPlatform\Demo\Exception\PutParchmentItemNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}