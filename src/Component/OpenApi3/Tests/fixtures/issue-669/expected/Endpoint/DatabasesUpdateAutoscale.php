<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DatabasesUpdateAutoscale extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $database_cluster_uuid;
    /**
     * To configure autoscale settings for an existing database cluster, send a PUT request to `/v2/databases/$DATABASE_ID/autoscale`, specifying the autoscale configuration.
     * A successful request will receive a 204 No Content status code with no body in response.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param \Jane\Generated\DigitalOcean\Model\DatabaseAutoscaleParams $requestBody
     */
    public function __construct(string $databaseClusterUuid, \Jane\Generated\DigitalOcean\Model\DatabaseAutoscaleParams $requestBody)
    {
        $this->database_cluster_uuid = $databaseClusterUuid;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{database_cluster_uuid}'], [rawurlencode($this->database_cluster_uuid)], '/v2/databases/{database_cluster_uuid}/autoscale');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\DatabaseAutoscaleParams) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateAutoscaleUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateAutoscaleNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateAutoscaleUnprocessableEntityException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateAutoscaleTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateAutoscaleInternalServerErrorException
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
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateAutoscaleUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateAutoscaleNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (422 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateAutoscaleUnprocessableEntityException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateAutoscaleTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateAutoscaleInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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