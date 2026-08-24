<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class KubernetesRecycleNodePool extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $cluster_id;
    protected $node_pool_id;
    /**
     * The endpoint has been deprecated. Please use the DELETE
     * `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/node_pools/$NODE_POOL_ID/nodes/$NODE_ID`
     * method instead.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param string $nodePoolId A unique ID that can be used to reference a Kubernetes node pool.
     * @param \Jane\Generated\DigitalOcean\Model\V2KubernetesClustersClusterIdNodePoolsNodePoolIdRecyclePostBody $requestBody
     */
    public function __construct(string $clusterId, string $nodePoolId, \Jane\Generated\DigitalOcean\Model\V2KubernetesClustersClusterIdNodePoolsNodePoolIdRecyclePostBody $requestBody)
    {
        $this->cluster_id = $clusterId;
        $this->node_pool_id = $nodePoolId;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{cluster_id}', '{node_pool_id}'], [$this->cluster_id, $this->node_pool_id], '/v2/kubernetes/clusters/{cluster_id}/node_pools/{node_pool_id}/recycle');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\V2KubernetesClustersClusterIdNodePoolsNodePoolIdRecyclePostBody) {
            return [['Content-Type' => ['application/json']], \Jane\Generated\DigitalOcean\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
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
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesRecycleNodePoolUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesRecycleNodePoolNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesRecycleNodePoolTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesRecycleNodePoolInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (202 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesRecycleNodePoolUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesRecycleNodePoolNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesRecycleNodePoolTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesRecycleNodePoolInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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