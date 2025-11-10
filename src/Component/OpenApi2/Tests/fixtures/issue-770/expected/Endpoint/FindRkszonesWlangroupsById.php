<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class FindRkszonesWlangroupsById extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    protected $zoneId;
    protected $id;
    /**
     * @param string $zoneId
     * @param string $id
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     * }
     */
    public function __construct(string $zoneId, string $id, array $queryParameters = [])
    {
        $this->zoneId = $zoneId;
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{zoneId}', '{id}'], [$this->zoneId, $this->id], '/rkszones/{zoneId}/wlangroups/{id}');
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
        $optionsResolver->setDefined(['serviceTicket']);
        $optionsResolver->setRequired(['serviceTicket']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('serviceTicket', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindRkszonesWlangroupsByIdBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindRkszonesWlangroupsByIdForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindRkszonesWlangroupsByIdInternalServerErrorException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\WlangroupWlanGroup
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindRkszonesWlangroupsByIdBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindRkszonesWlangroupsByIdForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindRkszonesWlangroupsByIdInternalServerErrorException($response);
        }
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Model\WlangroupWlanGroup', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}