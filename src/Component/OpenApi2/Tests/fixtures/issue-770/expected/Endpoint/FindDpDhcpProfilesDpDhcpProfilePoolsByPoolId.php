<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class FindDpDhcpProfilesDpDhcpProfilePoolsByPoolId extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    protected $id;
    protected $poolId;
    /**
     * @param string $id
     * @param string $poolId
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     * }
     */
    public function __construct(string $id, string $poolId, array $queryParameters = [])
    {
        $this->id = $id;
        $this->poolId = $poolId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{id}', '{poolId}'], [rawurlencode($this->id), rawurlencode($this->poolId)], '/dpDhcpProfiles/{id}/dpDhcpProfilePools/{poolId}');
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindDpDhcpProfilesDpDhcpProfilePoolsByPoolIdBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindDpDhcpProfilesDpDhcpProfilePoolsByPoolIdForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindDpDhcpProfilesDpDhcpProfilePoolsByPoolIdInternalServerErrorException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfilePoolBO
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindDpDhcpProfilesDpDhcpProfilePoolsByPoolIdBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindDpDhcpProfilesDpDhcpProfilePoolsByPoolIdForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindDpDhcpProfilesDpDhcpProfilePoolsByPoolIdInternalServerErrorException($response);
        }
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfilePoolBO', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}