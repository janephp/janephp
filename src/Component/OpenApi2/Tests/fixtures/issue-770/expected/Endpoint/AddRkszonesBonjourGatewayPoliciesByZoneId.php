<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class AddRkszonesBonjourGatewayPoliciesByZoneId extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    protected $zoneId;
    /**
     * @param string $zoneId
     * @param \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneCreateBonjourGatewayPolicy $body
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     * }
     */
    public function __construct(string $zoneId, \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneCreateBonjourGatewayPolicy $body, array $queryParameters = [])
    {
        $this->zoneId = $zoneId;
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
        return str_replace(['{zoneId}'], [$this->zoneId], '/rkszones/{zoneId}/bonjourGateway/policies');
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\AddRkszonesBonjourGatewayPoliciesByZoneIdBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\AddRkszonesBonjourGatewayPoliciesByZoneIdForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\AddRkszonesBonjourGatewayPoliciesByZoneIdInternalServerErrorException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\AddRkszonesBonjourGatewayPoliciesByZoneIdUnprocessableEntityException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\CommonCreateResult
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\AddRkszonesBonjourGatewayPoliciesByZoneIdBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\AddRkszonesBonjourGatewayPoliciesByZoneIdForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\AddRkszonesBonjourGatewayPoliciesByZoneIdInternalServerErrorException($response);
        }
        if (422 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\AddRkszonesBonjourGatewayPoliciesByZoneIdUnprocessableEntityException($response);
        }
        if (201 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Model\CommonCreateResult', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}