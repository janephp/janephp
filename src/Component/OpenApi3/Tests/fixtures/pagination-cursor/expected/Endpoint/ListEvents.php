<?php

namespace Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Endpoint;

class ListEvents extends \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Runtime\Client\Endpoint
{
    /**
     * @param array{
     *    "after"?: string,
     * } $queryParameters
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/events';
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
        $optionsResolver->setDefined(['after']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('after', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Exception\BadResponseException
     *
     * @return \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Model\EventPage
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Model\EventPage', 'json');
        }
        throw new \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Exception\BadResponseException($status, $body, $response);
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
        return \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Model\EventPage::class;
    }
}