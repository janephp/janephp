<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class KubernetesDestroyAssociatedResourcesDangerous extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $cluster_id;
    /**
     * To delete a Kubernetes cluster with all of its associated resources, send a
     * DELETE request to `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/destroy_with_associated_resources/dangerous`.
     * A 204 status code with no body will be returned in response to a successful request.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     */
    public function __construct(string $clusterId)
    {
        $this->cluster_id = $clusterId;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{cluster_id}'], [$this->cluster_id], '/v2/kubernetes/clusters/{cluster_id}/destroy_with_associated_resources/dangerous');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDestroyAssociatedResourcesDangerousUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDestroyAssociatedResourcesDangerousNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDestroyAssociatedResourcesDangerousTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDestroyAssociatedResourcesDangerousInternalServerErrorException
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
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesDestroyAssociatedResourcesDangerousUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesDestroyAssociatedResourcesDangerousNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesDestroyAssociatedResourcesDangerousTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\KubernetesDestroyAssociatedResourcesDangerousInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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