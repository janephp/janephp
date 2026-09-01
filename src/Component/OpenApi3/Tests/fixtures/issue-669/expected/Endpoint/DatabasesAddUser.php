<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DatabasesAddUser extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $database_cluster_uuid;
    /**
     * To add a new database user, send a POST request to `/v2/databases/$DATABASE_ID/users`
     * with the desired username.
     *
     * Note: User management is not supported for Caching or Valkey clusters.
     *
     * When adding a user to a MySQL cluster, additional options can be configured in the
     * `mysql_settings` object.
     *
     * When adding a user to a Kafka cluster, additional options can be configured in
     * the `settings` object.
     *
     *  When adding a user to a MongoDB cluster, additional options can be configured in
     * the `settings.mongo_user_settings` object.
     *
     * The response will be a JSON object with a key called `user`. The value of this will be an
     * object that contains the standard attributes associated with a database user including
     * its randomly generated password.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersPostBody $requestBody
     */
    public function __construct(string $databaseClusterUuid, \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersPostBody $requestBody)
    {
        $this->database_cluster_uuid = $databaseClusterUuid;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{database_cluster_uuid}'], [rawurlencode($this->database_cluster_uuid)], '/v2/databases/{database_cluster_uuid}/users');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersPostBody) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesAddUserUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesAddUserNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesAddUserTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesAddUserInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseUser|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (201 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseUser', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesAddUserUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesAddUserNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesAddUserTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesAddUserInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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