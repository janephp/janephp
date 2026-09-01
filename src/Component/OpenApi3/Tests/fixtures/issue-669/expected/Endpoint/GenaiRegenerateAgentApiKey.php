<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class GenaiRegenerateAgentApiKey extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $agent_uuid;
    protected $api_key_uuid;
    /**
     * To regenerate an agent API key, send a PUT request to `/v2/gen-ai/agents/{agent_uuid}/api_keys/{api_key_uuid}/regenerate`.
     * @param string $agentUuid Agent id
     * @param string $apiKeyUuid API key ID
     */
    public function __construct(string $agentUuid, string $apiKeyUuid)
    {
        $this->agent_uuid = $agentUuid;
        $this->api_key_uuid = $apiKeyUuid;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{agent_uuid}', '{api_key_uuid}'], [rawurlencode($this->agent_uuid), rawurlencode($this->api_key_uuid)], '/v2/gen-ai/agents/{agent_uuid}/api_keys/{api_key_uuid}/regenerate');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiRegenerateAgentApiKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiRegenerateAgentApiKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiRegenerateAgentApiKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiRegenerateAgentApiKeyInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ApiRegenerateAgentAPIKeyOutput|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ApiRegenerateAgentAPIKeyOutput', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiRegenerateAgentApiKeyUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiRegenerateAgentApiKeyNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiRegenerateAgentApiKeyTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiRegenerateAgentApiKeyInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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