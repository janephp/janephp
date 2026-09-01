<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DatabasesDeleteConnectionPool extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $database_cluster_uuid;
    protected $pool_name;
    /**
     * To delete a specific connection pool for a PostgreSQL database cluster, send
     * a DELETE request to `/v2/databases/$DATABASE_ID/pools/$POOL_NAME`.
     *
     * A status of 204 will be given. This indicates that the request was processed
     * successfully, but that no response body is needed.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $poolName The name used to identify the connection pool.
     */
    public function __construct(string $databaseClusterUuid, string $poolName)
    {
        $this->database_cluster_uuid = $databaseClusterUuid;
        $this->pool_name = $poolName;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{database_cluster_uuid}', '{pool_name}'], [rawurlencode($this->database_cluster_uuid), rawurlencode($this->pool_name)], '/v2/databases/{database_cluster_uuid}/pools/{pool_name}');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteConnectionPoolUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteConnectionPoolNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteConnectionPoolTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteConnectionPoolInternalServerErrorException
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
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteConnectionPoolUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteConnectionPoolNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteConnectionPoolTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteConnectionPoolInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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