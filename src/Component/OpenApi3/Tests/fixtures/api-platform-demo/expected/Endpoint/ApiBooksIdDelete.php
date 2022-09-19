<?php

namespace ApiPlatform\Demo\Endpoint;

class ApiBooksIdDelete extends \ApiPlatform\Demo\Runtime\Client\BaseEndpoint implements \ApiPlatform\Demo\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Removes the Book resource.
     *
     * @param string $id Book identifier
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    use \ApiPlatform\Demo\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/books/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ApiPlatform\Demo\Exception\ApiBooksIdDeleteNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \ApiPlatform\Demo\Exception\ApiBooksIdDeleteNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}