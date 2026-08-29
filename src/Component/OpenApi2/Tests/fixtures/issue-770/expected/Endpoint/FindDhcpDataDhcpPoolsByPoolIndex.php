<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class FindDhcpDataDhcpPoolsByPoolIndex extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    protected $apMac;
    protected $poolIndex;
    /**
     * @param string $apMac
     * @param string $poolIndex
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     * }
     */
    public function __construct(string $apMac, string $poolIndex, array $queryParameters = [])
    {
        $this->apMac = $apMac;
        $this->poolIndex = $poolIndex;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{apMac}', '{poolIndex}'], [rawurlencode($this->apMac), rawurlencode($this->poolIndex)], '/dhcpData/dhcpPools/{apMac}/{poolIndex}');
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindDhcpDataDhcpPoolsByPoolIndexBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindDhcpDataDhcpPoolsByPoolIndexForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindDhcpDataDhcpPoolsByPoolIndexInternalServerErrorException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\DhcppoolsDhcpPoolInfo
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindDhcpDataDhcpPoolsByPoolIndexBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindDhcpDataDhcpPoolsByPoolIndexForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindDhcpDataDhcpPoolsByPoolIndexInternalServerErrorException($response);
        }
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Model\DhcppoolsDhcpPoolInfo', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}