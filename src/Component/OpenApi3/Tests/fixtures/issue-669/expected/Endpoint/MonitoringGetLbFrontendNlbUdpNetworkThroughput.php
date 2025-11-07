<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class MonitoringGetLbFrontendNlbUdpNetworkThroughput extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    /**
     * To retrieve frontend UDP throughput in bytes per second for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/frontend_nlb_udp_network_throughput`.
     * @param array $queryParameters {
     *     @var string $lb_id A unique identifier for a load balancer.
     *     @var string $start UNIX timestamp to start metric window.
     *     @var string $end UNIX timestamp to end metric window.
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/v2/monitoring/metrics/load_balancer/frontend_nlb_udp_network_throughput';
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
        $optionsResolver->setDefined(['lb_id', 'start', 'end']);
        $optionsResolver->setRequired(['lb_id', 'start', 'end']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('lb_id', ['string']);
        $optionsResolver->addAllowedTypes('start', ['string']);
        $optionsResolver->addAllowedTypes('end', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNlbUdpNetworkThroughputUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNlbUdpNetworkThroughputTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNlbUdpNetworkThroughputInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Metrics', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNlbUdpNetworkThroughputUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNlbUdpNetworkThroughputTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNlbUdpNetworkThroughputInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (mb_strpos(strtolower($contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer_auth'];
    }
}