<?php

namespace ApiPlatform\Demo\Endpoint;

class ApiParchmentsIdPatch extends \ApiPlatform\Demo\Runtime\Client\BaseEndpoint implements \ApiPlatform\Demo\Runtime\Client\Endpoint
{
    protected $id;
    protected $accept;
    /**
     * Updates the Parchment resource.
     *
     * @param string $id Parchment identifier
     * @param \ApiPlatform\Demo\Model\Parchment $requestBody 
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     */
    public function __construct(string $id, \ApiPlatform\Demo\Model\Parchment $requestBody, array $accept = [])
    {
        $this->id = $id;
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \ApiPlatform\Demo\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(['{id}'], [$this->id], '/parchments/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ApiPlatform\Demo\Model\Parchment) {
            return [['Content-Type' => ['application/merge-patch+json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Parchment) {
            return [['Content-Type' => ['application/vnd.api+json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/ld+json', 'application/hal+json', 'application/vnd.api+json', 'application/json', 'application/xml', 'text/xml', 'application/x-yaml', 'text/csv']];
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ApiPlatform\Demo\Exception\ApiParchmentsIdPatchBadRequestException
     * @throws \ApiPlatform\Demo\Exception\ApiParchmentsIdPatchUnprocessableEntityException
     * @throws \ApiPlatform\Demo\Exception\ApiParchmentsIdPatchNotFoundException
     *
     * @return null|\ApiPlatform\Demo\Model\ParchmentJsonld|\ApiPlatform\Demo\Model\ParchmentJsonhal|\ApiPlatform\Demo\Model\Parchment
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            if (mb_strpos($contentType, 'application/ld+json') !== false) {
                return $serializer->deserialize($body, 'ApiPlatform\\Demo\\Model\\ParchmentJsonld', 'json');
            }
            if (mb_strpos($contentType, 'application/hal+json') !== false) {
                return $serializer->deserialize($body, 'ApiPlatform\\Demo\\Model\\ParchmentJsonhal', 'json');
            }
            if (mb_strpos($contentType, 'application/vnd.api+json') !== false) {
                return $serializer->deserialize($body, 'ApiPlatform\\Demo\\Model\\Parchment', 'json');
            }
            if (mb_strpos($contentType, 'application/json') !== false) {
                return $serializer->deserialize($body, 'ApiPlatform\\Demo\\Model\\Parchment', 'json');
            }
        }
        if (400 === $status) {
            throw new \ApiPlatform\Demo\Exception\ApiParchmentsIdPatchBadRequestException($response);
        }
        if (422 === $status) {
            throw new \ApiPlatform\Demo\Exception\ApiParchmentsIdPatchUnprocessableEntityException($response);
        }
        if (404 === $status) {
            throw new \ApiPlatform\Demo\Exception\ApiParchmentsIdPatchNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['apiKey'];
    }
}