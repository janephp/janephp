<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class GenaiAttachKnowledgeBase extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $agent_uuid;
    protected $knowledge_base_uuid;
    /**
     * To attach a knowledge base to an agent, send a POST request to `/v2/gen-ai/agents/{agent_uuid}/knowledge_bases/{knowledge_base_uuid}`
     * @param string $agentUuid A unique identifier for an agent.
     * @param string $knowledgeBaseUuid A unique identifier for a knowledge base.
     */
    public function __construct(string $agentUuid, string $knowledgeBaseUuid)
    {
        $this->agent_uuid = $agentUuid;
        $this->knowledge_base_uuid = $knowledgeBaseUuid;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{agent_uuid}', '{knowledge_base_uuid}'], [rawurlencode($this->agent_uuid), rawurlencode($this->knowledge_base_uuid)], '/v2/gen-ai/agents/{agent_uuid}/knowledge_bases/{knowledge_base_uuid}');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiAttachKnowledgeBaseUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiAttachKnowledgeBaseNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiAttachKnowledgeBaseTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiAttachKnowledgeBaseInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ApiLinkKnowledgeBaseOutput|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ApiLinkKnowledgeBaseOutput', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiAttachKnowledgeBaseUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiAttachKnowledgeBaseNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiAttachKnowledgeBaseTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiAttachKnowledgeBaseInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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