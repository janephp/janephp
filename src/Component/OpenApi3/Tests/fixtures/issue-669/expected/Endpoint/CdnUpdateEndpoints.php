<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class CdnUpdateEndpoints extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $cdn_id;
    /**
     * To update the TTL, certificate ID, or the FQDN of the custom subdomain for
     * an existing CDN endpoint, send a PUT request to
     * `/v2/cdn/endpoints/$ENDPOINT_ID`.
     *
     * @param string $cdnId A unique identifier for a CDN endpoint.
     * @param \Jane\Generated\DigitalOcean\Model\UpdateEndpoint $requestBody
     */
    public function __construct(string $cdnId, \Jane\Generated\DigitalOcean\Model\UpdateEndpoint $requestBody)
    {
        $this->cdn_id = $cdnId;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{cdn_id}'], [rawurlencode($this->cdn_id)], '/v2/cdn/endpoints/{cdn_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\UpdateEndpoint) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnUpdateEndpointsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnUpdateEndpointsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnUpdateEndpointsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnUpdateEndpointsInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseExistingEndpoint|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseExistingEndpoint', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\CdnUpdateEndpointsUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\CdnUpdateEndpointsNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\CdnUpdateEndpointsTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\CdnUpdateEndpointsInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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