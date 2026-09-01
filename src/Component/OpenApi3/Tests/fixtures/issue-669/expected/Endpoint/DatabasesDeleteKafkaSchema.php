<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DatabasesDeleteKafkaSchema extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $database_cluster_uuid;
    protected $subject_name;
    /**
     * To delete a specific schema by subject name for a Kafka cluster, send a DELETE request to
     * `/v2/databases/$DATABASE_ID/schema-registry/$SUBJECT_NAME`.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $subjectName The name of the Kafka schema subject.
     */
    public function __construct(string $databaseClusterUuid, string $subjectName)
    {
        $this->database_cluster_uuid = $databaseClusterUuid;
        $this->subject_name = $subjectName;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{database_cluster_uuid}', '{subject_name}'], [rawurlencode($this->database_cluster_uuid), rawurlencode($this->subject_name)], '/v2/databases/{database_cluster_uuid}/schema-registry/{subject_name}');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteKafkaSchemaUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteKafkaSchemaNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteKafkaSchemaTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteKafkaSchemaInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteKafkaSchemaUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteKafkaSchemaNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteKafkaSchemaTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteKafkaSchemaInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer_auth'];
    }
}