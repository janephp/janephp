<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class GenaiCreateEvaluationDatasetFileUploadPresignedUrls extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    /**
     * To create presigned URLs for evaluation dataset file upload, send a POST request to `/v2/gen-ai/evaluation_datasets/file_upload_presigned_urls`.
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiCreateDataSourceFileUploadPresignedUrlsInputPublic $requestBody
     */
    public function __construct(?\Jane\Generated\DigitalOcean\Model\ApiCreateDataSourceFileUploadPresignedUrlsInputPublic $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/v2/gen-ai/evaluation_datasets/file_upload_presigned_urls';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\ApiCreateDataSourceFileUploadPresignedUrlsInputPublic) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateEvaluationDatasetFileUploadPresignedUrlsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateEvaluationDatasetFileUploadPresignedUrlsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateEvaluationDatasetFileUploadPresignedUrlsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateEvaluationDatasetFileUploadPresignedUrlsInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ApiCreateDataSourceFileUploadPresignedUrlsOutput|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ApiCreateDataSourceFileUploadPresignedUrlsOutput', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiCreateEvaluationDatasetFileUploadPresignedUrlsUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiCreateEvaluationDatasetFileUploadPresignedUrlsNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiCreateEvaluationDatasetFileUploadPresignedUrlsTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiCreateEvaluationDatasetFileUploadPresignedUrlsInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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