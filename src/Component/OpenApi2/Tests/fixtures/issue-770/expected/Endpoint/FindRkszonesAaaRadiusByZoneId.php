<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class FindRkszonesAaaRadiusByZoneId extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    protected $zoneId;
    /**
     * @param string $zoneId
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     *     @var string $forAccounting radius server for filtering accounting type(forAccounting=true), not accounting type(forAccounting=false) and both(without forAccounting).
     * }
     */
    public function __construct(string $zoneId, array $queryParameters = [])
    {
        $this->zoneId = $zoneId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{zoneId}'], [$this->zoneId], '/rkszones/{zoneId}/aaa/radius');
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
        $optionsResolver->setDefined(['serviceTicket', 'forAccounting']);
        $optionsResolver->setRequired(['serviceTicket']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('serviceTicket', ['string']);
        $optionsResolver->addAllowedTypes('forAccounting', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindRkszonesAaaRadiusByZoneIdBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindRkszonesAaaRadiusByZoneIdForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindRkszonesAaaRadiusByZoneIdInternalServerErrorException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\AaaAuthenticationServerList
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindRkszonesAaaRadiusByZoneIdBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindRkszonesAaaRadiusByZoneIdForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindRkszonesAaaRadiusByZoneIdInternalServerErrorException($response);
        }
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Model\AaaAuthenticationServerList', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}