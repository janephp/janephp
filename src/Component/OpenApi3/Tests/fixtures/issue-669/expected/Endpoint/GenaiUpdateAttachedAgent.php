<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class GenaiUpdateAttachedAgent extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $parent_agent_uuid;
    protected $child_agent_uuid;
    /**
     * To update an agent route for an agent, send a PUT request to `/v2/gen-ai/agents/{parent_agent_uuid}/child_agents/{child_agent_uuid}`.
     * @param string $parentAgentUuid A unique identifier for the parent agent.
     * @param string $childAgentUuid Routed agent id
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiUpdateLinkedAgentInputPublic $requestBody
     */
    public function __construct(string $parentAgentUuid, string $childAgentUuid, ?\Jane\Generated\DigitalOcean\Model\ApiUpdateLinkedAgentInputPublic $requestBody = null)
    {
        $this->parent_agent_uuid = $parentAgentUuid;
        $this->child_agent_uuid = $childAgentUuid;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{parent_agent_uuid}', '{child_agent_uuid}'], [rawurlencode($this->parent_agent_uuid), rawurlencode($this->child_agent_uuid)], '/v2/gen-ai/agents/{parent_agent_uuid}/child_agents/{child_agent_uuid}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\ApiUpdateLinkedAgentInputPublic) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAttachedAgentUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAttachedAgentNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAttachedAgentTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAttachedAgentInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ApiUpdateLinkedAgentOutput|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ApiUpdateLinkedAgentOutput', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAttachedAgentUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAttachedAgentNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAttachedAgentTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAttachedAgentInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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