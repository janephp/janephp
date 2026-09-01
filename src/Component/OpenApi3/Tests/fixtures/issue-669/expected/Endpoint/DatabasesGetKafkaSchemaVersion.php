<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DatabasesGetKafkaSchemaVersion extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $database_cluster_uuid;
    protected $subject_name;
    protected $version;
    /**
     * To get a specific schema by subject name for a Kafka cluster, send a GET request to
     * `/v2/databases/$DATABASE_ID/schema-registry/$SUBJECT_NAME/versions/$VERSION`.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $subjectName The name of the Kafka schema subject.
     * @param string $version The version of the Kafka schema subject.
     */
    public function __construct(string $databaseClusterUuid, string $subjectName, string $version)
    {
        $this->database_cluster_uuid = $databaseClusterUuid;
        $this->subject_name = $subjectName;
        $this->version = $version;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{database_cluster_uuid}', '{subject_name}', '{version}'], [rawurlencode($this->database_cluster_uuid), rawurlencode($this->subject_name), rawurlencode($this->version)], '/v2/databases/{database_cluster_uuid}/schema-registry/{subject_name}/versions/{version}');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaSchemaVersionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaSchemaVersionNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaSchemaVersionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaSchemaVersionInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseKafkaSchemaVersion
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseKafkaSchemaVersion', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaSchemaVersionUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaSchemaVersionNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaSchemaVersionTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaSchemaVersionInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer_auth'];
    }
}