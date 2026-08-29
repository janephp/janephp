<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class GenaiCreateKnowledgeBaseDataSource extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $knowledge_base_uuid;
    /**
     * To add a data source to a knowledge base, send a POST request to `/v2/gen-ai/knowledge_bases/{knowledge_base_uuid}/data_sources`.
     * @param string $knowledgeBaseUuid Knowledge base id
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiCreateKnowledgeBaseDataSourceInputPublic $requestBody
     */
    public function __construct(string $knowledgeBaseUuid, ?\Jane\Generated\DigitalOcean\Model\ApiCreateKnowledgeBaseDataSourceInputPublic $requestBody = null)
    {
        $this->knowledge_base_uuid = $knowledgeBaseUuid;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{knowledge_base_uuid}'], [rawurlencode($this->knowledge_base_uuid)], '/v2/gen-ai/knowledge_bases/{knowledge_base_uuid}/data_sources');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\ApiCreateKnowledgeBaseDataSourceInputPublic) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateKnowledgeBaseDataSourceUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateKnowledgeBaseDataSourceNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateKnowledgeBaseDataSourceTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateKnowledgeBaseDataSourceInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ApiCreateKnowledgeBaseDataSourceOutput|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ApiCreateKnowledgeBaseDataSourceOutput', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiCreateKnowledgeBaseDataSourceUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiCreateKnowledgeBaseDataSourceNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiCreateKnowledgeBaseDataSourceTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiCreateKnowledgeBaseDataSourceInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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