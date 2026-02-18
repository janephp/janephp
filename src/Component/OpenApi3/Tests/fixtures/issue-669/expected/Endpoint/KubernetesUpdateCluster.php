<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class KubernetesUpdateCluster extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $cluster_id;
    /**
     * To update a Kubernetes cluster, send a PUT request to
     * `/v2/kubernetes/clusters/$K8S_CLUSTER_ID` and specify one or more of the
     * attributes below.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param \Jane\Generated\DigitalOcean\Model\ClusterUpdate $requestBody
     */
    public function __construct(string $clusterId, \Jane\Generated\DigitalOcean\Model\ClusterUpdate $requestBody)
    {
        $this->cluster_id = $clusterId;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{cluster_id}'], [$this->cluster_id], '/v2/kubernetes/clusters/{cluster_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\ClusterUpdate) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesUpdateClusterUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesUpdateClusterNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesUpdateClusterTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesUpdateClusterInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseUpdatedCluster|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (202 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseUpdatedCluster', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesUpdateClusterUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesUpdateClusterNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesUpdateClusterTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesUpdateClusterInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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