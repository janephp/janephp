<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class MonitoringGetLbFrontendNetworkThroughputUdp extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    /**
     * To retrieve frontend UDP throughput in bytes per second for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/frontend_network_throughput_udp`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
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
        return '/v2/monitoring/metrics/load_balancer/frontend_network_throughput_udp';
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
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNetworkThroughputUdpUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNetworkThroughputUdpTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNetworkThroughputUdpInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Metrics', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNetworkThroughputUdpUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNetworkThroughputUdpTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNetworkThroughputUdpInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (stripos(strtolower($contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer_auth'];
    }
}