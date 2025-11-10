<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class PartialUpdateRkszonesSplitTunnelProfilesById extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    protected $zoneId;
    protected $id;
    /**
     * @param string $zoneId
     * @param string $id
     * @param \Jane\Component\OpenApi3\Tests\Expected\Model\SplitTunnelModifySplitTunnelProfile $body
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     * }
     */
    public function __construct(string $zoneId, string $id, \Jane\Component\OpenApi3\Tests\Expected\Model\SplitTunnelModifySplitTunnelProfile $body, array $queryParameters = [])
    {
        $this->zoneId = $zoneId;
        $this->id = $id;
        $this->body = $body;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PATCH';
    }
    public function getUri(): string
    {
        return str_replace(['{zoneId}', '{id}'], [$this->zoneId, $this->id], '/rkszones/{zoneId}/splitTunnelProfiles/{id}');
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\PartialUpdateRkszonesSplitTunnelProfilesByIdBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\PartialUpdateRkszonesSplitTunnelProfilesByIdForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\PartialUpdateRkszonesSplitTunnelProfilesByIdInternalServerErrorException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\PartialUpdateRkszonesSplitTunnelProfilesByIdUnprocessableEntityException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\CommonEmptyResult
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\PartialUpdateRkszonesSplitTunnelProfilesByIdBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\PartialUpdateRkszonesSplitTunnelProfilesByIdForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\PartialUpdateRkszonesSplitTunnelProfilesByIdInternalServerErrorException($response);
        }
        if (422 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\PartialUpdateRkszonesSplitTunnelProfilesByIdUnprocessableEntityException($response);
        }
        if (204 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Model\CommonEmptyResult', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}