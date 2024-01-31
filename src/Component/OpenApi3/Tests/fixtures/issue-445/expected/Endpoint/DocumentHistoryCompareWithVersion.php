<?php

namespace PicturePark\API\Endpoint;

class DocumentHistoryCompareWithVersion extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $documentType;
    protected $documentId;
    protected $documentVersion;
    /**
     * Compare a specific version of a document with another version and get the differences.
     *
     * @param string $documentType The type of the document (e.g. Content).
     * @param string $documentId The ID of the document (e.g. contentId).
     * @param int $documentVersion The version of the document to use for the comparison.
     * @param array $queryParameters {
     *     @var int $version The version of the document to compare with.
     * }
     */
    public function __construct(string $documentType, string $documentId, int $documentVersion, array $queryParameters = [])
    {
        $this->documentType = $documentType;
        $this->documentId = $documentId;
        $this->documentVersion = $documentVersion;
        $this->queryParameters = $queryParameters;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{documentType}', '{documentId}', '{documentVersion}'], [$this->documentType, $this->documentId, $this->documentVersion], '/v1/history/{documentType}/{documentId}/{documentVersion}/compare');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
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
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\DocumentHistoryDifference', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\DocumentHistoryCompareWithVersionBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\DocumentHistoryCompareWithVersionUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\DocumentHistoryCompareWithVersionNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\DocumentHistoryCompareWithVersionMethodNotAllowedException($response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\DocumentHistoryCompareWithVersionConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\DocumentHistoryCompareWithVersionTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\DocumentHistoryCompareWithVersionInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}