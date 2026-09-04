<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class GenaiGetIndexingJobDetailsSignedUrl extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $indexing_job_uuid;
    /**
     * To get a signed URL for indexing job details, send a GET request to `/v2/gen-ai/indexing_jobs/{uuid}/details_signed_url`.
     * @param string $indexingJobUuid The uuid of the indexing job
     */
    public function __construct(string $indexingJobUuid)
    {
        $this->indexing_job_uuid = $indexingJobUuid;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{indexing_job_uuid}'], [rawurlencode($this->indexing_job_uuid)], '/v2/gen-ai/indexing_jobs/{indexing_job_uuid}/details_signed_url');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
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
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetIndexingJobDetailsSignedUrlUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetIndexingJobDetailsSignedUrlNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetIndexingJobDetailsSignedUrlTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetIndexingJobDetailsSignedUrlInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ApiGetIndexingJobDetailsSignedURLOutput|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ApiGetIndexingJobDetailsSignedURLOutput', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiGetIndexingJobDetailsSignedUrlUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiGetIndexingJobDetailsSignedUrlNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiGetIndexingJobDetailsSignedUrlTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiGetIndexingJobDetailsSignedUrlInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
}