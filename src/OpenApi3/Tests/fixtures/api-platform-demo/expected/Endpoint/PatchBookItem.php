<?php

namespace ApiPlatform\Demo\Endpoint;

class PatchBookItem extends \ApiPlatform\Demo\Runtime\Client\BaseEndpoint implements \ApiPlatform\Demo\Runtime\Client\Endpoint
{
    protected $id;
    /**
     *
     *
     * @param string $id
     * @param \ApiPlatform\Demo\Model\Book $requestBody
     */
    public function __construct(string $id, \ApiPlatform\Demo\Model\Book $requestBody)
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
        return str_replace(array('{id}'), array($this->id), '/books/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ApiPlatform\Demo\Model\Book) {
            return array(array('Content-Type' => array('application/merge-patch+json')), $this->body);
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Book) {
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
     * @throws \ApiPlatform\Demo\Exception\PatchBookItemBadRequestException
     * @throws \ApiPlatform\Demo\Exception\PatchBookItemNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \ApiPlatform\Demo\Exception\PatchBookItemBadRequestException();
        }
        if (404 === $status) {
            throw new \ApiPlatform\Demo\Exception\PatchBookItemNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}
