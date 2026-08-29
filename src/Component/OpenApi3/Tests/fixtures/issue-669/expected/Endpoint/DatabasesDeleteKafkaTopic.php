<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DatabasesDeleteKafkaTopic extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $database_cluster_uuid;
    protected $topic_name;
    /**
     * To delete a single topic within a Kafka cluster, send a DELETE request
     * to `/v2/databases/$DATABASE_ID/topics/$TOPIC_NAME`.
     *
     * A status of 204 will be given. This indicates that the request was
     * processed successfully, but that no response body is needed.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $topicName The name used to identify the Kafka topic.
     */
    public function __construct(string $databaseClusterUuid, string $topicName)
    {
        $this->database_cluster_uuid = $databaseClusterUuid;
        $this->topic_name = $topicName;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{database_cluster_uuid}', '{topic_name}'], [rawurlencode($this->database_cluster_uuid), rawurlencode($this->topic_name)], '/v2/databases/{database_cluster_uuid}/topics/{topic_name}');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteKafkaTopicUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteKafkaTopicNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteKafkaTopicTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteKafkaTopicInternalServerErrorException
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
        if (is_null($contentType) === false && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteKafkaTopicUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteKafkaTopicNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteKafkaTopicTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteKafkaTopicInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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