<?php

namespace Jane\OpenApi3\Tests\Client\PetStore\Endpoint;

class CreatePets extends \Jane\OpenApi3\Tests\Client\PetStore\Runtime\Client\BaseEndpoint implements \Jane\OpenApi3\Tests\Client\PetStore\Runtime\Client\Endpoint
{
    use \Jane\OpenApi3\Tests\Client\PetStore\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/pets';
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
     * @return \Jane\OpenApi3\Tests\Client\PetStore\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return null;
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
