<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DatabasesGetUser extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $database_cluster_uuid;
    protected $username;
    /**
     * To show information about an existing database user, send a GET request to
     * `/v2/databases/$DATABASE_ID/users/$USERNAME`.
     *
     * Note: User management is not supported for Caching or Valkey clusters.
     *
     * The response will be a JSON object with a `user` key. This will be set to an object
     * containing the standard database user attributes. The user's password will not show
     * up unless the `database:view_credentials` scope is present.
     *
     * For MySQL clusters, additional options will be contained in the `mysql_settings`
     * object.
     *
     * For Kafka clusters, additional options will be contained in the `settings` object.
     *
     * For MongoDB clusters, additional information will be contained in the mongo_user_settings object
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $username The name of the database user.
     */
    public function __construct(string $databaseClusterUuid, string $username)
    {
        $this->database_cluster_uuid = $databaseClusterUuid;
        $this->username = $username;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{database_cluster_uuid}', '{username}'], [rawurlencode($this->database_cluster_uuid), rawurlencode($this->username)], '/v2/databases/{database_cluster_uuid}/users/{username}');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetUserUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetUserNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetUserTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetUserInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseUser|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseUser', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesGetUserUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesGetUserNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesGetUserTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesGetUserInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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