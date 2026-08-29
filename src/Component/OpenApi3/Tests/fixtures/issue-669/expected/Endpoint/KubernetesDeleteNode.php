<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class KubernetesDeleteNode extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $cluster_id;
    protected $node_pool_id;
    protected $node_id;
    /**
     * To delete a single node in a pool, send a DELETE request to
     * `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/node_pools/$NODE_POOL_ID/nodes/$NODE_ID`.
     *
     * Appending the `skip_drain=1` query parameter to the request causes node
     * draining to be skipped. Omitting the query parameter or setting its value to
     * `0` carries out draining prior to deletion.
     *
     * Appending the `replace=1` query parameter to the request causes the node to
     * be replaced by a new one after deletion. Omitting the query parameter or
     * setting its value to `0` deletes without replacement.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param string $nodePoolId A unique ID that can be used to reference a Kubernetes node pool.
     * @param string $nodeId A unique ID that can be used to reference a node in a Kubernetes node pool.
     * @param array{
     *    "skip_drain"?: int, //Specifies whether or not to drain workloads from a node before it is deleted. Setting it to `1` causes node draining to be skipped. Omitting the query parameter or setting its value to `0` carries out draining prior to deletion.
     *    "replace"?: int, //Specifies whether or not to replace a node after it has been deleted. Setting it to `1` causes the node to be replaced by a new one after deletion. Omitting the query parameter or setting its value to `0` deletes without replacement.
     * } $queryParameters
     */
    public function __construct(string $clusterId, string $nodePoolId, string $nodeId, array $queryParameters = [])
    {
        $this->cluster_id = $clusterId;
        $this->node_pool_id = $nodePoolId;
        $this->node_id = $nodeId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{cluster_id}', '{node_pool_id}', '{node_id}'], [rawurlencode($this->cluster_id), rawurlencode($this->node_pool_id), rawurlencode($this->node_id)], '/v2/kubernetes/clusters/{cluster_id}/node_pools/{node_pool_id}/nodes/{node_id}');
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
        $optionsResolver->setDefined(['skip_drain', 'replace']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['skip_drain' => 0, 'replace' => 0]);
        $optionsResolver->addAllowedTypes('skip_drain', ['int']);
        $optionsResolver->addAllowedTypes('replace', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDeleteNodeUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDeleteNodeNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDeleteNodeTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDeleteNodeInternalServerErrorException
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
        if (is_null($contentType) === false && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesDeleteNodeUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesDeleteNodeNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesDeleteNodeTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesDeleteNodeInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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