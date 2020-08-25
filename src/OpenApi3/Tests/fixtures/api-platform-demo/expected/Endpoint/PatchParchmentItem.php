<?php

namespace ApiPlatform\Demo\Endpoint;

class PatchParchmentItem extends \ApiPlatform\Demo\Runtime\Client\BaseEndpoint implements \ApiPlatform\Demo\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * 
     *
     * @param string $id 
     * @param \ApiPlatform\Demo\Model\Parchment $requestBody 
     */
    public function __construct(string $id, \ApiPlatform\Demo\Model\Parchment $requestBody)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }
    use \ApiPlatform\Demo\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/parchments/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ApiPlatform\Demo\Model\Parchment) {
            return array(array('Content-Type' => array('application/merge-patch+json')), $this->body);
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Parchment) {
            return array(array('Content-Type' => array('application/vnd.api+json')), $this->body);
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
     * @throws \ApiPlatform\Demo\Exception\PatchParchmentItemBadRequestException
     * @throws \ApiPlatform\Demo\Exception\PatchParchmentItemNotFoundException
     *
     * @return null|\ApiPlatform\Demo\Model\Parchment
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'ApiPlatform\\Demo\\Model\\Parchment', 'json');
        }
        if (400 === $status) {
            throw new \ApiPlatform\Demo\Exception\PatchParchmentItemBadRequestException();
        }
        if (404 === $status) {
            throw new \ApiPlatform\Demo\Exception\PatchParchmentItemNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}