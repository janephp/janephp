<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DatabasesGetReplica extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $database_cluster_uuid;
    protected $replica_name;
    /**
     * To show information about an existing database replica, send a GET request to `/v2/databases/$DATABASE_ID/replicas/$REPLICA_NAME`.
     *
     * **Note**: Read-only replicas are not supported for Caching or Valkey clusters.
     *
     * The response will be a JSON object with a `replica key`. This will be set to an object containing the standard database replica attributes.
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
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{database_cluster_uuid}', '{replica_name}'], [$this->database_cluster_uuid, $this->replica_name], '/v2/databases/{database_cluster_uuid}/replicas/{replica_name}');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetReplicaUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetReplicaNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetReplicaTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetReplicaInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseDatabaseReplica|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseDatabaseReplica', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesGetReplicaUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesGetReplicaNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesGetReplicaTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesGetReplicaInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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