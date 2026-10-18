<?php

namespace Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Endpoint;

class ListRepos extends \Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Runtime\Client\Endpoint
{
    /**
     * @param array{
     *    "page"?: int,
     *    "per_page"?: int,
     * } $queryParameters
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/repos';
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
        $optionsResolver->setDefined(['page', 'per_page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1]);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('per_page', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Exception\BadResponseException
     *
     * @return \Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Model\Repo[]
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $this->deserializeListResponse($serializer, $body, 'Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Model\Repo[]', 'json');
        }
        throw new \Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Exception\BadResponseException($status, $body, $response);
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
        return null;
    }
}