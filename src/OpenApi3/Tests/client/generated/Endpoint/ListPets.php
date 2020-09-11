<?php

namespace Jane\OpenApi3\Tests\Client\PetStore\Endpoint;

class ListPets extends \Jane\OpenApi3\Tests\Client\PetStore\Runtime\Client\BaseEndpoint implements \Jane\OpenApi3\Tests\Client\PetStore\Runtime\Client\Endpoint
{
    /**
     * @param array $queryParameters {
     *
     *     @var int $limit How many items to return at one time (max 100)
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    use \Jane\OpenApi3\Tests\Client\PetStore\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
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

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['limit']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('limit', ['int']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \Jane\OpenApi3\Tests\Client\PetStore\Model\Pet[]|\Jane\OpenApi3\Tests\Client\PetStore\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\\OpenApi3\\Tests\\Client\\PetStore\\Model\\Pet[]', 'json');
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
