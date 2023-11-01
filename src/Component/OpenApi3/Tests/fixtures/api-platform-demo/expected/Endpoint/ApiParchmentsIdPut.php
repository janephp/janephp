<?php

namespace ApiPlatform\Demo\Endpoint;

class ApiParchmentsIdPut extends \ApiPlatform\Demo\Runtime\Client\BaseEndpoint implements \ApiPlatform\Demo\Runtime\Client\Endpoint
{
    protected $id;
    protected $accept;
    /**
     * Replaces the Parchment resource.
     *
     * @param string $id Parchment identifier
     * @param \ApiPlatform\Demo\Model\ParchmentJsonld|\ApiPlatform\Demo\Model\ParchmentJsonhal|\ApiPlatform\Demo\Model\Parchment $requestBody 
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     */
    public function __construct(string $id, $requestBody, array $accept = [])
    {
        $this->id = $id;
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \ApiPlatform\Demo\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(['{id}'], [$this->id], '/parchments/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ApiPlatform\Demo\Model\ParchmentJsonld) {
            return [['Content-Type' => ['application/ld+json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\ParchmentJsonhal) {
            return [['Content-Type' => ['application/hal+json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Parchment) {
            return [['Content-Type' => ['application/vnd.api+json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Parchment) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Parchment) {
            return [['Content-Type' => ['application/xml']], $this->body];
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Parchment) {
            return [['Content-Type' => ['text/xml']], $this->body];
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Parchment) {
            return [['Content-Type' => ['application/x-yaml']], $this->body];
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Parchment) {
            return [['Content-Type' => ['text/csv']], $this->body];
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Parchment) {
            return [['Content-Type' => ['text/html']], $this->body];
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
     * @throws \ApiPlatform\Demo\Exception\ApiParchmentsIdPutBadRequestException
     * @throws \ApiPlatform\Demo\Exception\ApiParchmentsIdPutUnprocessableEntityException
     * @throws \ApiPlatform\Demo\Exception\ApiParchmentsIdPutNotFoundException
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
            throw new \ApiPlatform\Demo\Exception\ApiParchmentsIdPutBadRequestException($response);
        }
        if (422 === $status) {
            throw new \ApiPlatform\Demo\Exception\ApiParchmentsIdPutUnprocessableEntityException($response);
        }
        if (404 === $status) {
            throw new \ApiPlatform\Demo\Exception\ApiParchmentsIdPutNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['apiKey'];
    }
}