<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Simple\Endpoint;

class ShowPetById extends \Jane\Component\OpenApi31\Tests\Expected\Simple\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\Simple\Runtime\Client\Endpoint
{
    protected $petId;
    /**
     * @param string $petId
     */
    public function __construct(string $petId)
    {
        $this->petId = $petId;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\Simple\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{petId}'], [rawurlencode($this->petId)], '/pets/{petId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Simple\Model\Pet
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Simple\Model\Pet', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}