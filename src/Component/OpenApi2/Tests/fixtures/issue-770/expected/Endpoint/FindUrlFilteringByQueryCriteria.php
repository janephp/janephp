<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class FindUrlFilteringByQueryCriteria extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    /**
     * @param \Jane\Component\OpenApi3\Tests\Expected\Model\CommonQueryCriteriaSuperSet $body
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     * }
     */
    public function __construct(\Jane\Component\OpenApi3\Tests\Expected\Model\CommonQueryCriteriaSuperSet $body, array $queryParameters = [])
    {
        $this->body = $body;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/urlFiltering/query';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['serviceTicket']);
        $optionsResolver->setRequired(['serviceTicket']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('serviceTicket', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindUrlFilteringByQueryCriteriaBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindUrlFilteringByQueryCriteriaForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindUrlFilteringByQueryCriteriaInternalServerErrorException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindUrlFilteringByQueryCriteriaUnprocessableEntityException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\UrlFilteringUrlFilteringPolicyList
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindUrlFilteringByQueryCriteriaBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindUrlFilteringByQueryCriteriaForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindUrlFilteringByQueryCriteriaInternalServerErrorException($response);
        }
        if (422 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindUrlFilteringByQueryCriteriaUnprocessableEntityException($response);
        }
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Model\UrlFilteringUrlFilteringPolicyList', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}