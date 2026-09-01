<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DatabasesUpdateOnlineMigration extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $database_cluster_uuid;
    /**
     * To start an online migration, send a PUT request to `/v2/databases/$DATABASE_ID/online-migration` endpoint. Migrating a cluster establishes a connection with an existing cluster and replicates its contents to the target cluster. Online migration is only available for MySQL, PostgreSQL, Caching, and Valkey clusters.
     * If the existing database is continuously being written to,  the migration process will continue for up to two weeks unless it is manually stopped. Online migration is only available for [MySQL](https://docs.digitalocean.com/products/databases/mysql/how-to/migrate/#:~:text=To%20migrate%20a%20MySQL%20database,then%20select%20Set%20Up%20Migration), [PostgreSQL](https://docs.digitalocean.com/products/databases/postgresql/how-to/migrate/), [Caching](https://docs.digitalocean.com/products/databases/redis/how-to/migrate/), and [Valkey](https://docs.digitalocean.com/products/databases/valkey/how-to/migrate/) clusters.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param \Jane\Generated\DigitalOcean\Model\SourceDatabase $requestBody
     */
    public function __construct(string $databaseClusterUuid, \Jane\Generated\DigitalOcean\Model\SourceDatabase $requestBody)
    {
        $this->database_cluster_uuid = $databaseClusterUuid;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{database_cluster_uuid}'], [rawurlencode($this->database_cluster_uuid)], '/v2/databases/{database_cluster_uuid}/online-migration');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\SourceDatabase) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateOnlineMigrationUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateOnlineMigrationNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateOnlineMigrationTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateOnlineMigrationInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\OnlineMigration|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\OnlineMigration', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateOnlineMigrationUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateOnlineMigrationNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateOnlineMigrationTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateOnlineMigrationInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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