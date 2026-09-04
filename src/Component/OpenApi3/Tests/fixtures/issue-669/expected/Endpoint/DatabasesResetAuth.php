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
        return str_replace(['{database_cluster_uuid}', '{username}'], [rawurlencode($this->database_cluster_uuid), rawurlencode($this->username)], '/v2/databases/{database_cluster_uuid}/users/{username}/reset_auth');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersUsernameResetAuthPostBody) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesResetAuthUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesResetAuthNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesResetAuthTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesResetAuthInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseUser|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseUser', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesResetAuthUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesResetAuthNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesResetAuthTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesResetAuthInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (stripos(strtolower($contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer_auth'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
}