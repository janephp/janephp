<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class KubernetesDestroyAssociatedResourcesSelective extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $cluster_id;
    /**
     * To delete a Kubernetes cluster along with a subset of its associated resources,
     * send a DELETE request to `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/destroy_with_associated_resources/selective`.
     *
     * The JSON body of the request should include `load_balancers`, `volumes`, or
     * `volume_snapshots` keys each set to an array of IDs for the associated
     * resources to be destroyed.
     *
     * The IDs can be found by querying the cluster's associated resources endpoint.
     * Any associated resource not included in the request will remain and continue
     * to accrue changes on your account.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param \Jane\Generated\DigitalOcean\Model\DestroyAssociatedKubernetesResources $requestBody
     */
    public function __construct(string $clusterId, \Jane\Generated\DigitalOcean\Model\DestroyAssociatedKubernetesResources $requestBody)
    {
        $this->cluster_id = $clusterId;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{cluster_id}'], [$this->cluster_id], '/v2/kubernetes/clusters/{cluster_id}/destroy_with_associated_resources/selective');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\DestroyAssociatedKubernetesResources) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDestroyAssociatedResourcesSelectiveUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDestroyAssociatedResourcesSelectiveNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDestroyAssociatedResourcesSelectiveTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDestroyAssociatedResourcesSelectiveInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesDestroyAssociatedResourcesSelectiveUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesDestroyAssociatedResourcesSelectiveNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesDestroyAssociatedResourcesSelectiveTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesDestroyAssociatedResourcesSelectiveInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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