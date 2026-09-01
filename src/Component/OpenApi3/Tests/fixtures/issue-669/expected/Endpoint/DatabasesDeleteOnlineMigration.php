<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DatabasesDeleteOnlineMigration extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $database_cluster_uuid;
    protected $migration_id;
    /**
     * To stop an online migration, send a DELETE request to `/v2/databases/$DATABASE_ID/online-migration/$MIGRATION_ID`.
     *
     * A status of 204 will be given. This indicates that the request was processed successfully, but that no response body is needed.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $migrationId A unique identifier assigned to the online migration.
     */
    public function __construct(string $databaseClusterUuid, string $migrationId)
    {
        $this->database_cluster_uuid = $databaseClusterUuid;
        $this->migration_id = $migrationId;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{database_cluster_uuid}', '{migration_id}'], [rawurlencode($this->database_cluster_uuid), rawurlencode($this->migration_id)], '/v2/databases/{database_cluster_uuid}/online-migration/{migration_id}');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteOnlineMigrationUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteOnlineMigrationNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteOnlineMigrationTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteOnlineMigrationInternalServerErrorException
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
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteOnlineMigrationUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteOnlineMigrationNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteOnlineMigrationTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteOnlineMigrationInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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