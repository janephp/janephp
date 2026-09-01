<?php

namespace Jane\Component\OpenApi2\Tests\Expected\FromUrl\Endpoint;

class ListPets extends \Jane\Component\OpenApi2\Tests\Expected\FromUrl\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\FromUrl\Runtime\Client\Endpoint
{
    /**
     * @param array $queryParameters {
     *     @var int $limit How many items to return at one time (max 100)
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi2\Tests\Expected\FromUrl\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/pets';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
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
        $optionsResolver->addAllowedTypes('limit', ['int']);
        return $optionsResolver;
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