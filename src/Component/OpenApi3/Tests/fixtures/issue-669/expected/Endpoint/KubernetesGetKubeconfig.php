<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class KubernetesGetKubeconfig extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $cluster_id;
    protected $accept;
    /**
     * This endpoint returns a kubeconfig file in YAML format. It can be used to
     * connect to and administer the cluster using the Kubernetes command line tool,
     * `kubectl`, or other programs supporting kubeconfig files (e.g., client libraries).
     *
     * The resulting kubeconfig file uses token-based authentication for clusters
     * supporting it, and certificate-based authentication otherwise. For a list of
     * supported versions and more information, see "[How to Connect to a DigitalOcean
     * Kubernetes Cluster](https://docs.digitalocean.com/products/kubernetes/how-to/connect-to-cluster/)".
     *
     * To retrieve a kubeconfig file for use with a Kubernetes cluster, send a GET
     * request to `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/kubeconfig`.
     *
     * Clusters supporting token-based authentication may define an expiration by
     * passing a duration in seconds as a query parameter to
     * `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/kubeconfig?expiry_seconds=$DURATION_IN_SECONDS`.
     * If not set or 0, then the token will have a 7 day expiry. The query parameter
     * has no impact in certificate-based authentication.
     *
     * Kubernetes Roles granted to a user with a token-based kubeconfig are derived from that user's
     * DigitalOcean role. Predefined roles (Owner, Member, Modifier etc.) have an automatic mapping
     * to Kubernetes roles. Custom roles are not automatically mapped to any Kubernetes roles,
     * and require [additional configuration](https://docs.digitalocean.com/products/kubernetes/how-to/set-up-custom-rolebindings/)
     * by a cluster administrator.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param array{
     *    "expiry_seconds"?: int, //The duration in seconds that the returned Kubernetes credentials will be valid. If not set or 0, the credentials will have a 7 day expiry.
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/yaml
     */
    public function __construct(string $clusterId, array $queryParameters = [], array $accept = [])
    {
        $this->cluster_id = $clusterId;
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{cluster_id}'], [rawurlencode($this->cluster_id)], '/v2/kubernetes/clusters/{cluster_id}/kubeconfig');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'application/yaml']];
        }
        return $this->accept;
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['expiry_seconds']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['expiry_seconds' => 0]);
        $optionsResolver->addAllowedTypes('expiry_seconds', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetKubeconfigUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetKubeconfigNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetKubeconfigTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetKubeconfigInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesGetKubeconfigUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesGetKubeconfigNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesGetKubeconfigTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesGetKubeconfigInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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