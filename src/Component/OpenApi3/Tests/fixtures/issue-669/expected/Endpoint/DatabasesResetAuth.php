<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DatabasesResetAuth extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $database_cluster_uuid;
    protected $username;
    /**
     * To reset the password for a database user, send a POST request to
     * `/v2/databases/$DATABASE_ID/users/$USERNAME/reset_auth`.
     *
     * For `mysql` databases, the authentication method can be specifying by
     * including a key in the JSON body called `mysql_settings` with the `auth_plugin`
     * value specified.
     *
     * The response will be a JSON object with a `user` key. This will be set to an
     * object containing the standard database user attributes.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $username The name of the database user.
     * @param \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersUsernameResetAuthPostBody $requestBody
     */
    public function __construct(string $databaseClusterUuid, string $username, \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersUsernameResetAuthPostBody $requestBody)
    {
        $this->database_cluster_uuid = $databaseClusterUuid;
        $this->username = $username;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{database_cluster_uuid}', '{username}'], [$this->database_cluster_uuid, $this->username], '/v2/databases/{database_cluster_uuid}/users/{username}/reset_auth');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersUsernameResetAuthPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
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
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesResetAuthUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesResetAuthNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesResetAuthTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesResetAuthInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseUser|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseUser', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesResetAuthUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesResetAuthNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesResetAuthTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesResetAuthInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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