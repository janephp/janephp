<?php

namespace Jane\Component\OpenApi3\Tests\Expected\FromUrl\Endpoint;

class ListPets extends \Jane\Component\OpenApi3\Tests\Expected\FromUrl\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\FromUrl\Runtime\Client\Endpoint
{
    /**
     * @param array{
     *    "limit"?: int, //How many items to return at one time (max 100)
     * } $queryParameters
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\FromUrl\Runtime\Client\EndpointTrait;
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
        $optionsResolver->addAllowedTypes('limit', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\FromUrl\Model\Pet[]|\Jane\Component\OpenApi3\Tests\Expected\FromUrl\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\FromUrl\Model\Pet[]', 'json');
        }
        if (stripos(strtolower($contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\FromUrl\Model\Error', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}