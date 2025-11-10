<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class UpdateMapsApsByIndoorMapId extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    protected $indoorMapId;
    /**
     * @param string $indoorMapId
     * @param array $body
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     * }
     */
    public function __construct(string $indoorMapId, array $body, array $queryParameters = [])
    {
        $this->indoorMapId = $indoorMapId;
        $this->body = $body;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{indoorMapId}'], [$this->indoorMapId], '/maps/{indoorMapId}/aps');
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\UpdateMapsApsByIndoorMapIdBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\UpdateMapsApsByIndoorMapIdForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\UpdateMapsApsByIndoorMapIdInternalServerErrorException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\UpdateMapsApsByIndoorMapIdUnprocessableEntityException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\IndoorMapIndooMapAuditId
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\UpdateMapsApsByIndoorMapIdBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\UpdateMapsApsByIndoorMapIdForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\UpdateMapsApsByIndoorMapIdInternalServerErrorException($response);
        }
        if (422 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\UpdateMapsApsByIndoorMapIdUnprocessableEntityException($response);
        }
        if (204 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Model\IndoorMapIndooMapAuditId', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}