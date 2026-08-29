<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class MonitoringGetDropletAutoscaleTargetInstances extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    /**
     * To retrieve the target size for a given Droplet Autoscale Pool, send a GET request to `/v2/monitoring/metrics/droplet_autoscale/target_instances`.
     * @param array{
     *    "autoscale_pool_id": string, //A unique identifier for an autoscale pool.
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
        return '/v2/monitoring/metrics/droplet_autoscale/target_instances';
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
        $optionsResolver->setDefined(['autoscale_pool_id', 'start', 'end']);
        $optionsResolver->setRequired(['autoscale_pool_id', 'start', 'end']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('autoscale_pool_id', ['string']);
        $optionsResolver->addAllowedTypes('start', ['string']);
        $optionsResolver->addAllowedTypes('end', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletAutoscaleTargetInstancesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletAutoscaleTargetInstancesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletAutoscaleTargetInstancesInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Metrics', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletAutoscaleTargetInstancesUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletAutoscaleTargetInstancesTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletAutoscaleTargetInstancesInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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