<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class GenaiUpdateAgentFunction extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $agent_uuid;
    protected $function_uuid;
    /**
     * To update the function route, send a PUT request to `/v2/gen-ai/agents/{agent_uuid}/functions/{function_uuid}`.
     * @param string $agentUuid Agent id
     * @param string $functionUuid Function id
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiUpdateAgentFunctionInputPublic $requestBody
     */
    public function __construct(string $agentUuid, string $functionUuid, ?\Jane\Generated\DigitalOcean\Model\ApiUpdateAgentFunctionInputPublic $requestBody = null)
    {
        $this->agent_uuid = $agentUuid;
        $this->function_uuid = $functionUuid;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{agent_uuid}', '{function_uuid}'], [rawurlencode($this->agent_uuid), rawurlencode($this->function_uuid)], '/v2/gen-ai/agents/{agent_uuid}/functions/{function_uuid}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\ApiUpdateAgentFunctionInputPublic) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentFunctionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentFunctionNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentFunctionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentFunctionInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ApiUpdateAgentFunctionOutput|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ApiUpdateAgentFunctionOutput', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentFunctionUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentFunctionNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentFunctionTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentFunctionInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
}