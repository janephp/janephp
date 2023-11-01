<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Endpoint;

class ShowPetById extends \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\Endpoint
{
    protected $petId;
    /**
     * 
     *
     * @param string $petId The id of the pet to retrieve
     */
    public function __construct(string $petId)
    {
        $this->petId = $petId;
    }
    use \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{petId}'], [$this->petId], '/pets/{petId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\Model\Pet[]|\Jane\Component\OpenApi2\Tests\Expected\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\Pet[]', 'json');
        }
        return $serializer->deserialize($body, 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}