<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DatabasesDestroyReplica extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $database_cluster_uuid;
    protected $replica_name;
    /**
     * To destroy a specific read-only replica, send a DELETE request to `/v2/databases/$DATABASE_ID/replicas/$REPLICA_NAME`.
     *
     * **Note**: Read-only replicas are not supported for Caching or Valkey clusters.
     *
     * A status of 204 will be given. This indicates that the request was processed successfully, but that no response body is needed.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $replicaName The name of the database replica.
     */
    public function __construct(string $databaseClusterUuid, string $replicaName)
    {
        $this->database_cluster_uuid = $databaseClusterUuid;
        $this->replica_name = $replicaName;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{database_cluster_uuid}', '{replica_name}'], [rawurlencode($this->database_cluster_uuid), rawurlencode($this->replica_name)], '/v2/databases/{database_cluster_uuid}/replicas/{replica_name}');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDestroyReplicaUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDestroyReplicaNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDestroyReplicaTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDestroyReplicaInternalServerErrorException
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
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesDestroyReplicaUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesDestroyReplicaNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesDestroyReplicaTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesDestroyReplicaInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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