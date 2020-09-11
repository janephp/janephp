<?php

namespace Jane\OpenApi3\Tests\Client\PetStore\Endpoint;

class ShowPetById extends \Jane\OpenApi3\Tests\Client\PetStore\Runtime\Client\BaseEndpoint implements \Jane\OpenApi3\Tests\Client\PetStore\Runtime\Client\Endpoint
{
    protected $petId;

    /**
     * @param string $petId The id of the pet to retrieve
     */
    public function __construct(string $petId)
    {
        $this->petId = $petId;
    }

    use \Jane\OpenApi3\Tests\Client\PetStore\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{petId}'], [$this->petId], '/pets/{petId}');
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
     * @return \Jane\OpenApi3\Tests\Client\PetStore\Model\Pet|\Jane\OpenApi3\Tests\Client\PetStore\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\\OpenApi3\\Tests\\Client\\PetStore\\Model\\Pet', 'json');
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\\OpenApi3\\Tests\\Client\\PetStore\\Model\\Error', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
