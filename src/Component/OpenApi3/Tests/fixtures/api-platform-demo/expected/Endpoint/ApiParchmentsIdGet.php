<?php

namespace ApiPlatform\Demo\Endpoint;

class ApiParchmentsIdGet extends \ApiPlatform\Demo\Runtime\Client\BaseEndpoint implements \ApiPlatform\Demo\Runtime\Client\Endpoint
{
    protected $id;
    protected $accept;
    /**
     * Retrieves a Parchment resource.
     *
     * @param string $id Parchment identifier
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     */
    public function __construct(string $id, array $accept = array())
    {
        $this->id = $id;
        $this->accept = $accept;
    }
    use \ApiPlatform\Demo\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/parchments/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        if (empty($this->accept)) {
            return array('Accept' => array('application/ld+json', 'application/hal+json', 'application/vnd.api+json', 'application/json', 'application/xml', 'text/xml', 'application/x-yaml', 'text/csv'));
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ApiPlatform\Demo\Exception\ApiParchmentsIdGetNotFoundException
     *
     * @return null|\ApiPlatform\Demo\Model\ParchmentJsonld|\ApiPlatform\Demo\Model\ParchmentJsonhal|\ApiPlatform\Demo\Model\Parchment
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (200 === $status) {
            if (mb_strpos($contentType, 'application/ld+json') !== false) {
                return $serializer->deserialize((string) $body, 'ApiPlatform\\Demo\\Model\\ParchmentJsonld', 'json');
            }
            if (mb_strpos($contentType, 'application/hal+json') !== false) {
                return $serializer->deserialize((string) $body, 'ApiPlatform\\Demo\\Model\\ParchmentJsonhal', 'json');
            }
            if (mb_strpos($contentType, 'application/vnd.api+json') !== false) {
                return $serializer->deserialize((string) $body, 'ApiPlatform\\Demo\\Model\\Parchment', 'json');
            }
            if (mb_strpos($contentType, 'application/json') !== false) {
                return $serializer->deserialize((string) $body, 'ApiPlatform\\Demo\\Model\\Parchment', 'json');
            }
        }
        if (404 === $status) {
            throw new \ApiPlatform\Demo\Exception\ApiParchmentsIdGetNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}