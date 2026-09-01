<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DatabasesUpdateUser extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $database_cluster_uuid;
    protected $username;
    /**
     * To update an existing database user, send a PUT request to `/v2/databases/$DATABASE_ID/users/$USERNAME`
     * with the desired settings.
     *
     * **Note**: only `settings` can be updated via this type of request. If you wish to change the name of a user,
     * you must recreate a new user.
     *
     * The response will be a JSON object with a key called `user`. The value of this will be an
     * object that contains the name of the update database user, along with the `settings` object that
     * has been updated.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $username The name of the database user.
     * @param \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersUsernamePutBody $requestBody
     */
    public function __construct(string $databaseClusterUuid, string $username, \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersUsernamePutBody $requestBody)
    {
        $this->database_cluster_uuid = $databaseClusterUuid;
        $this->username = $username;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{database_cluster_uuid}', '{username}'], [rawurlencode($this->database_cluster_uuid), rawurlencode($this->username)], '/v2/databases/{database_cluster_uuid}/users/{username}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersUsernamePutBody) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateUserUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateUserNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateUserTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateUserInternalServerErrorException
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
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateUserUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateUserNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateUserTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateUserInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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