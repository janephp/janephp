<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class GenaiListIndexingJobDataSources extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $indexing_job_uuid;
    /**
     * To list all datasources for an indexing job, send a GET request to `/v2/gen-ai/indexing_jobs/{indexing_job_uuid}/data_sources`.
     * @param string $indexingJobUuid Uuid of the indexing job
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
        return str_replace(['{indexing_job_uuid}'], [rawurlencode($this->indexing_job_uuid)], '/v2/gen-ai/indexing_jobs/{indexing_job_uuid}/data_sources');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobDataSourcesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobDataSourcesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobDataSourcesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobDataSourcesInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ApiListIndexingJobDataSourcesOutput|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ApiListIndexingJobDataSourcesOutput', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobDataSourcesUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobDataSourcesNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobDataSourcesTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobDataSourcesInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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