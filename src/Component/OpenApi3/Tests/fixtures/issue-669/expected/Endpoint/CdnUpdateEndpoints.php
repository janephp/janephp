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
        return str_replace(['{cdn_id}'], [$this->cdn_id], '/v2/cdn/endpoints/{cdn_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\UpdateEndpoint) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnUpdateEndpointsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnUpdateEndpointsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnUpdateEndpointsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnUpdateEndpointsInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseExistingEndpoint|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseExistingEndpoint', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\CdnUpdateEndpointsUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\CdnUpdateEndpointsNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\CdnUpdateEndpointsTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\CdnUpdateEndpointsInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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