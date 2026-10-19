<?php

namespace Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader\Endpoint;

class ListIssues extends \Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader\Runtime\Client\Endpoint
{
    protected $owner;
    /**
     * @param string $owner
     * @param array{
     *    "state"?: string,
     *    "page"?: int,
     *    "per_page"?: int,
     * } $queryParameters
     */
    public function __construct(string $owner, array $queryParameters = [])
    {
        $this->owner = $owner;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{owner}'], [rawurlencode($this->owner)], '/repos/{owner}/issues');
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
        $optionsResolver->setDefined(['state', 'page', 'per_page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('state', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('per_page', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader\Exception\BadResponseException
     *
     * @return \Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader\Model\Issue[]
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $this->deserializeListResponse($serializer, $body, 'Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader\Model\Issue[]', 'json');
        }
        throw new \Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader\Exception\BadResponseException($status, $body, $response);
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