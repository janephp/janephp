<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class GenaiListIndexingJobsByKnowledgeBase extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $knowledge_base_uuid;
    /**
     * To list latest 15 indexing jobs for a knowledge base, send a GET request to `/v2/gen-ai/knowledge_bases/{knowledge_base_uuid}/indexing_jobs`.
     * @param string $knowledgeBaseUuid Knowledge base uuid in string
     */
    public function __construct(string $knowledgeBaseUuid)
    {
        $this->knowledge_base_uuid = $knowledgeBaseUuid;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{knowledge_base_uuid}'], [rawurlencode($this->knowledge_base_uuid)], '/v2/gen-ai/knowledge_bases/{knowledge_base_uuid}/indexing_jobs');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
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
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobsByKnowledgeBaseUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobsByKnowledgeBaseNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobsByKnowledgeBaseTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobsByKnowledgeBaseInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ApiListKnowledgeBaseIndexingJobsOutput|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ApiListKnowledgeBaseIndexingJobsOutput', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobsByKnowledgeBaseUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobsByKnowledgeBaseNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobsByKnowledgeBaseTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobsByKnowledgeBaseInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
}