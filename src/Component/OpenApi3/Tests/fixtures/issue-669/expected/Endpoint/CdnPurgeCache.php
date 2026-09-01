<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class CdnPurgeCache extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $cdn_id;
    /**
     * To purge cached content from a CDN endpoint, send a DELETE request to
     * `/v2/cdn/endpoints/$ENDPOINT_ID/cache`. The body of the request should include
     * a `files` attribute containing a list of cached file paths to be purged. A
     * path may be for a single file or may contain a wildcard (`*`) to recursively
     * purge all files under a directory. When only a wildcard is provided, all cached
     * files will be purged. There is a rate limit of 50 files per 20 seconds that can
     * be purged. CDN endpoints have a rate limit of 5 requests per 10 seconds.
     * Purging files using a wildcard path counts as a single request against the API's
     * rate limit. Two identical purge requests cannot be sent at the same time.
     *
     * @param string $cdnId A unique identifier for a CDN endpoint.
     * @param \Jane\Generated\DigitalOcean\Model\PurgeCache $requestBody
     */
    public function __construct(string $cdnId, \Jane\Generated\DigitalOcean\Model\PurgeCache $requestBody)
    {
        $this->cdn_id = $cdnId;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{cdn_id}'], [rawurlencode($this->cdn_id)], '/v2/cdn/endpoints/{cdn_id}/cache');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\PurgeCache) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnPurgeCacheUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnPurgeCacheNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnPurgeCacheTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnPurgeCacheInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (204 === $status) {
            return null;
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\CdnPurgeCacheUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\CdnPurgeCacheNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\CdnPurgeCacheTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\CdnPurgeCacheInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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