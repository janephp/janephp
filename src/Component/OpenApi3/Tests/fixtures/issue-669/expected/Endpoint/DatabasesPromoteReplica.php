<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DatabasesPromoteReplica extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $database_cluster_uuid;
    protected $replica_name;
    /**
     * To promote a specific read-only replica, send a PUT request to `/v2/databases/$DATABASE_ID/replicas/$REPLICA_NAME/promote`.
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
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{database_cluster_uuid}', '{replica_name}'], [$this->database_cluster_uuid, $this->replica_name], '/v2/databases/{database_cluster_uuid}/replicas/{replica_name}/promote');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesPromoteReplicaUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesPromoteReplicaNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesPromoteReplicaTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesPromoteReplicaInternalServerErrorException
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
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesPromoteReplicaUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesPromoteReplicaNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesPromoteReplicaTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesPromoteReplicaInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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