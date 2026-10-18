<?php

namespace Jane\Component\OpenApi31\Tests\Expected\PaginationNextLink\Endpoint;

class ListUsers extends \Jane\Component\OpenApi31\Tests\Expected\PaginationNextLink\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\PaginationNextLink\Runtime\Client\Endpoint
{
    /**
     * @param array{
     *    "$top"?: int,
     *    "$skiptoken"?: string,
     * } $queryParameters
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\PaginationNextLink\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/users';
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
        $optionsResolver->setDefined(['$top', '$skiptoken']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('$top', ['int']);
        $optionsResolver->addAllowedTypes('$skiptoken', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi31\Tests\Expected\PaginationNextLink\Exception\BadResponseException
     *
     * @return \Jane\Component\OpenApi31\Tests\Expected\PaginationNextLink\Model\UserCollection
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\PaginationNextLink\Model\UserCollection', 'json');
        }
        throw new \Jane\Component\OpenApi31\Tests\Expected\PaginationNextLink\Exception\BadResponseException($status, $body, $response);
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
    public function getTargetClass(): ?string
    {
        return \Jane\Component\OpenApi31\Tests\Expected\PaginationNextLink\Model\UserCollection::class;
    }
}