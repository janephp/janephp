<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class GenaiUpdateAnthropicApiKey extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $api_key_uuid;
    /**
     * To update an Anthropic API key, send a PUT request to `/v2/gen-ai/anthropic/keys/{api_key_uuid}`.
     * @param string $apiKeyUuid API key ID
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiUpdateAnthropicAPIKeyInputPublic $requestBody
     */
    public function __construct(string $apiKeyUuid, ?\Jane\Generated\DigitalOcean\Model\ApiUpdateAnthropicAPIKeyInputPublic $requestBody = null)
    {
        $this->api_key_uuid = $apiKeyUuid;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{api_key_uuid}'], [$this->api_key_uuid], '/v2/gen-ai/anthropic/keys/{api_key_uuid}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\ApiUpdateAnthropicAPIKeyInputPublic) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
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
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAnthropicApiKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAnthropicApiKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAnthropicApiKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAnthropicApiKeyInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ApiUpdateAnthropicAPIKeyOutput|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ApiUpdateAnthropicAPIKeyOutput', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAnthropicApiKeyUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAnthropicApiKeyNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAnthropicApiKeyTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAnthropicApiKeyInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (mb_strpos(strtolower($contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer_auth'];
    }
}