<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DatabasesGet extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $database_cluster_uuid;
    protected $database_name;
    /**
     * To show information about an existing database cluster, send a GET request to
     * `/v2/databases/$DATABASE_ID/dbs/$DB_NAME`.
     *
     * Note: Database management is not supported for Caching or Valkey clusters.
     *
     * The response will be a JSON object with a `db` key. This will be set to an object
     * containing the standard database attributes.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $databaseName The name of the database.
     */
    public function __construct(string $databaseClusterUuid, string $databaseName)
    {
        $this->database_cluster_uuid = $databaseClusterUuid;
        $this->database_name = $databaseName;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{database_cluster_uuid}', '{database_name}'], [$this->database_cluster_uuid, $this->database_name], '/v2/databases/{database_cluster_uuid}/dbs/{database_name}');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseDatabase|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseDatabase', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesGetUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesGetNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesGetTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesGetInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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