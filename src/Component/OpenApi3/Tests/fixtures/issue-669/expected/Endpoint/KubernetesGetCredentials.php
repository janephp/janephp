<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class KubernetesGetCredentials extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $cluster_id;
    /**
     * This endpoint returns a JSON object . It can be used to programmatically
     * construct Kubernetes clients which cannot parse kubeconfig files.
     *
     * The resulting JSON object contains token-based authentication for clusters
     * supporting it, and certificate-based authentication otherwise. For a list of
     * supported versions and more information, see "[How to Connect to a DigitalOcean
     * Kubernetes Cluster](https://docs.digitalocean.com/products/kubernetes/how-to/connect-to-cluster/)".
     *
     * To retrieve credentials for accessing a Kubernetes cluster, send a GET
     * request to `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/credentials`.
     *
     * Clusters supporting token-based authentication may define an expiration by
     * passing a duration in seconds as a query parameter to
     * `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/credentials?expiry_seconds=$DURATION_IN_SECONDS`.
     * If not set or 0, then the token will have a 7 day expiry. The query parameter
     * has no impact in certificate-based authentication.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param array{
     *    "expiry_seconds"?: int, //The duration in seconds that the returned Kubernetes credentials will be valid. If not set or 0, the credentials will have a 7 day expiry.
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
        return str_replace(['{cluster_id}'], [rawurlencode($this->cluster_id)], '/v2/kubernetes/clusters/{cluster_id}/credentials');
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
        $optionsResolver->setDefined(['expiry_seconds']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['expiry_seconds' => 0]);
        $optionsResolver->addAllowedTypes('expiry_seconds', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetCredentialsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetCredentialsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetCredentialsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetCredentialsInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\Credentials|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Credentials', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesGetCredentialsUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesGetCredentialsNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesGetCredentialsTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesGetCredentialsInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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