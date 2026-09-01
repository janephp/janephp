<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class FindDpDhcpProfilesDpDhcpProfileHostsByHostId extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    protected $id;
    protected $hostId;
    /**
     * @param string $id
     * @param string $hostId
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     * }
     */
    public function __construct(string $id, string $hostId, array $queryParameters = [])
    {
        $this->id = $id;
        $this->hostId = $hostId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{id}', '{hostId}'], [rawurlencode($this->id), rawurlencode($this->hostId)], '/dpDhcpProfiles/{id}/dpDhcpProfileHosts/{hostId}');
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindDpDhcpProfilesDpDhcpProfileHostsByHostIdBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindDpDhcpProfilesDpDhcpProfileHostsByHostIdForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindDpDhcpProfilesDpDhcpProfileHostsByHostIdInternalServerErrorException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileHostBO
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindDpDhcpProfilesDpDhcpProfileHostsByHostIdBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindDpDhcpProfilesDpDhcpProfileHostsByHostIdForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindDpDhcpProfilesDpDhcpProfileHostsByHostIdInternalServerErrorException($response);
        }
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileHostBO', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}