<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class GenaiAttachAgent extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $parent_agent_uuid;
    protected $child_agent_uuid;
    /**
     * To add an agent route to an agent, send a POST request to `/v2/gen-ai/agents/{parent_agent_uuid}/child_agents/{child_agent_uuid}`.
     * @param string $parentAgentUuid A unique identifier for the parent agent.
     * @param string $childAgentUuid Routed agent id
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiLinkAgentInputPublic $requestBody
     */
    public function __construct(string $parentAgentUuid, string $childAgentUuid, ?\Jane\Generated\DigitalOcean\Model\ApiLinkAgentInputPublic $requestBody = null)
    {
        $this->parent_agent_uuid = $parentAgentUuid;
        $this->child_agent_uuid = $childAgentUuid;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{parent_agent_uuid}', '{child_agent_uuid}'], [rawurlencode($this->parent_agent_uuid), rawurlencode($this->child_agent_uuid)], '/v2/gen-ai/agents/{parent_agent_uuid}/child_agents/{child_agent_uuid}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\ApiLinkAgentInputPublic) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiAttachAgentUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiAttachAgentNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiAttachAgentTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiAttachAgentInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ApiLinkAgentOutput|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ApiLinkAgentOutput', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiAttachAgentUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiAttachAgentNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiAttachAgentTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiAttachAgentInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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