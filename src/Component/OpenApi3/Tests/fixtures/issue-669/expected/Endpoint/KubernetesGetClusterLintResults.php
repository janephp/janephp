<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class KubernetesGetClusterLintResults extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $cluster_id;
    /**
     * To request clusterlint diagnostics for your cluster, send a GET request to
     * `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/clusterlint`. If the `run_id` query
     * parameter is provided, then the diagnostics for the specific run is fetched.
     * By default, the latest results are shown.
     *
     * To find out how to address clusterlint feedback, please refer to
     * [the clusterlint check documentation](https://github.com/digitalocean/clusterlint/blob/master/checks.md).
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param array{
     *    "run_id"?: string, //Specifies the clusterlint run whose results will be retrieved.
     * } $queryParameters
     */
    public function __construct(string $clusterId, array $queryParameters = [])
    {
        $this->cluster_id = $clusterId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{cluster_id}'], [rawurlencode($this->cluster_id)], '/v2/kubernetes/clusters/{cluster_id}/clusterlint');
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
        $optionsResolver->setDefined(['run_id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('run_id', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetClusterLintResultsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetClusterLintResultsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetClusterLintResultsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetClusterLintResultsInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ClusterlintResults|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ClusterlintResults', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesGetClusterLintResultsUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesGetClusterLintResultsNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesGetClusterLintResultsTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesGetClusterLintResultsInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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