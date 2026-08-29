<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class GenaiGetScheduledIndexing extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $knowledge_base_uuid;
    /**
     * Get Scheduled Indexing for knowledge base using knoweldge base uuid, send a GET request to `/v2/gen-ai/scheduled-indexing/knowledge-base/{knowledge_base_uuid}`.
     * @param string $knowledgeBaseUuid UUID of the scheduled indexing entry
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
        return str_replace(['{knowledge_base_uuid}'], [rawurlencode($this->knowledge_base_uuid)], '/v2/gen-ai/scheduled-indexing/knowledge-base/{knowledge_base_uuid}');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetScheduledIndexingUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetScheduledIndexingNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetScheduledIndexingTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetScheduledIndexingInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ApiGetScheduledIndexingOutput|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ApiGetScheduledIndexingOutput', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiGetScheduledIndexingUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiGetScheduledIndexingNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiGetScheduledIndexingTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiGetScheduledIndexingInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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