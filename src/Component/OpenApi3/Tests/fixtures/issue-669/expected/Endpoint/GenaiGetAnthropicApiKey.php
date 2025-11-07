<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class GenaiGetAnthropicApiKey extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $api_key_uuid;
    /**
     * To retrieve details of an Anthropic API key, send a GET request to `/v2/gen-ai/anthropic/keys/{api_key_uuid}`.
     * @param string $apiKeyUuid API key ID
     */
    public function __construct(string $apiKeyUuid)
    {
        $this->api_key_uuid = $apiKeyUuid;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{api_key_uuid}'], [$this->api_key_uuid], '/v2/gen-ai/anthropic/keys/{api_key_uuid}');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetAnthropicApiKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetAnthropicApiKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetAnthropicApiKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetAnthropicApiKeyInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ApiGetAnthropicAPIKeyOutput|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ApiGetAnthropicAPIKeyOutput', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiGetAnthropicApiKeyUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiGetAnthropicApiKeyNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiGetAnthropicApiKeyTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiGetAnthropicApiKeyInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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