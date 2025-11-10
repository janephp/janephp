<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class DeleteDpDhcpProfilesDpDhcpProfilePoolsByPoolId extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
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
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{id}', '{poolId}'], [$this->id, $this->poolId], '/dpDhcpProfiles/{id}/dpDhcpProfilePools/{poolId}');
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\DeleteDpDhcpProfilesDpDhcpProfilePoolsByPoolIdBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\DeleteDpDhcpProfilesDpDhcpProfilePoolsByPoolIdForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\DeleteDpDhcpProfilesDpDhcpProfilePoolsByPoolIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\DeleteDpDhcpProfilesDpDhcpProfilePoolsByPoolIdBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\DeleteDpDhcpProfilesDpDhcpProfilePoolsByPoolIdForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\DeleteDpDhcpProfilesDpDhcpProfilePoolsByPoolIdInternalServerErrorException($response);
        }
        if (200 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}