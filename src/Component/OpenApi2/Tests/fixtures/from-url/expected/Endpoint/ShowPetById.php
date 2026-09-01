<?php

namespace Jane\Component\OpenApi2\Tests\Expected\FromUrl\Endpoint;

class ShowPetById extends \Jane\Component\OpenApi2\Tests\Expected\FromUrl\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\FromUrl\Runtime\Client\Endpoint
{
    protected $petId;
    /**
     * @param string $petId The id of the pet to retrieve
     */
    public function __construct(string $petId)
    {
        $this->petId = $petId;
    }
    use \Jane\Component\OpenApi2\Tests\Expected\FromUrl\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{petId}'], [rawurlencode($this->petId)], '/pets/{petId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
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
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\FromUrl\Model\Pet[]|\Jane\Component\OpenApi2\Tests\Expected\FromUrl\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi2\Tests\Expected\FromUrl\Model\Pet[]', 'json');
        }
        return $serializer->deserialize($body, 'Jane\Component\OpenApi2\Tests\Expected\FromUrl\Model\Error', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
}