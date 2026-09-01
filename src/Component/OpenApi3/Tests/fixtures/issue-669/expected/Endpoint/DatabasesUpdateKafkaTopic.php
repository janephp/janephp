<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DatabasesUpdateKafkaTopic extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $database_cluster_uuid;
    protected $topic_name;
    /**
     * To update a topic attached to a Kafka cluster, send a PUT request to
     * `/v2/databases/$DATABASE_ID/topics/$TOPIC_NAME`.
     *
     * The result will be a JSON object with a `topic` key.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $topicName The name used to identify the Kafka topic.
     * @param null|\Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidTopicsTopicNamePutBody $requestBody
     */
    public function __construct(string $databaseClusterUuid, string $topicName, ?\Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidTopicsTopicNamePutBody $requestBody = null)
    {
        $this->database_cluster_uuid = $databaseClusterUuid;
        $this->topic_name = $topicName;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{database_cluster_uuid}', '{topic_name}'], [rawurlencode($this->database_cluster_uuid), rawurlencode($this->topic_name)], '/v2/databases/{database_cluster_uuid}/topics/{topic_name}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidTopicsTopicNamePutBody) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateKafkaTopicUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateKafkaTopicNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateKafkaTopicTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateKafkaTopicInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseKafkaTopic|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseKafkaTopic', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateKafkaTopicUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateKafkaTopicNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateKafkaTopicTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateKafkaTopicInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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