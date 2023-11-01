<?php

namespace ApiPlatform\Demo\Endpoint;

class ApiParchmentsIdDelete extends \ApiPlatform\Demo\Runtime\Client\BaseEndpoint implements \ApiPlatform\Demo\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Removes the Parchment resource.
     *
     * @param string $id Parchment identifier
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
        return str_replace(['{id}'], [$this->id], '/parchments/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ApiPlatform\Demo\Exception\ApiParchmentsIdDeleteNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \ApiPlatform\Demo\Exception\ApiParchmentsIdDeleteNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['apiKey'];
    }
}