<?php

namespace PicturePark\API\Endpoint;

class DocumentHistoryGetCurrent extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $documentType;
    protected $documentId;
    /**
     * Gets the current version of a document.
     * @param string $documentType The type of the document (e.g. Content).
     * @param string $documentId The ID of the document (e.g. contentId).
     */
    public function __construct(string $documentType, string $documentId)
    {
        $this->documentType = $documentType;
        $this->documentId = $documentId;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{documentType}', '{documentId}'], [rawurlencode($this->documentType), rawurlencode($this->documentId)], '/v1/history/{documentType}/{documentId}/current');
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
     * @throws \PicturePark\API\Exception\DocumentHistoryGetCurrentBadRequestException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetCurrentUnauthorizedException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetCurrentNotFoundException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetCurrentMethodNotAllowedException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetCurrentConflictException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetCurrentTooManyRequestsException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetCurrentInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\DocumentHistory
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\API\Model\DocumentHistory', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\DocumentHistoryGetCurrentBadRequestException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\DocumentHistoryGetCurrentUnauthorizedException($response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\DocumentHistoryGetCurrentNotFoundException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\DocumentHistoryGetCurrentMethodNotAllowedException($response);
        }
        if ($contentType !== null && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\DocumentHistoryGetCurrentConflictException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\DocumentHistoryGetCurrentTooManyRequestsException($response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\DocumentHistoryGetCurrentInternalServerErrorException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkException', 'json'), $response);
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