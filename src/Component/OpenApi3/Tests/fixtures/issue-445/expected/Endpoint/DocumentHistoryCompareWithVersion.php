<?php

namespace PicturePark\API\Endpoint;

class DocumentHistoryCompareWithVersion extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $documentType;
    protected $documentId;
    protected $documentVersion;
    /**
     * Compare a specific version of a document with another version and get the differences.
     * @param string $documentType The type of the document (e.g. Content).
     * @param string $documentId The ID of the document (e.g. contentId).
     * @param int $documentVersion The version of the document to use for the comparison.
     * @param array{
     *    "version"?: int, //The version of the document to compare with.
     * } $queryParameters
     */
    public function __construct(string $documentType, string $documentId, int $documentVersion, array $queryParameters = [])
    {
        $this->documentType = $documentType;
        $this->documentId = $documentId;
        $this->documentVersion = $documentVersion;
        $this->queryParameters = $queryParameters;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{documentType}', '{documentId}', '{documentVersion}'], [rawurlencode($this->documentType), rawurlencode($this->documentId), rawurlencode($this->documentVersion)], '/v1/history/{documentType}/{documentId}/{documentVersion}/compare');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['version']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('version', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithVersionBadRequestException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithVersionUnauthorizedException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithVersionNotFoundException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithVersionMethodNotAllowedException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithVersionConflictException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithVersionTooManyRequestsException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithVersionInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\DocumentHistoryDifference
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\API\Model\DocumentHistoryDifference', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\DocumentHistoryCompareWithVersionBadRequestException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\DocumentHistoryCompareWithVersionUnauthorizedException($response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\DocumentHistoryCompareWithVersionNotFoundException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\DocumentHistoryCompareWithVersionMethodNotAllowedException($response);
        }
        if ($contentType !== null && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\DocumentHistoryCompareWithVersionConflictException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\DocumentHistoryCompareWithVersionTooManyRequestsException($response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\DocumentHistoryCompareWithVersionInternalServerErrorException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkException', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['Bearer'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
}