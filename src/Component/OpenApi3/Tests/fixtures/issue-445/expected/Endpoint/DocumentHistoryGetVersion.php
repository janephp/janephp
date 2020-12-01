<?php

namespace PicturePark\API\Endpoint;

class DocumentHistoryGetVersion extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $documentType;
    protected $documentId;
    protected $documentVersion;
    /**
     * Gets a specific version of a document.
     *
     * @param string $documentType The type of the document (e.g. Content).
     * @param string $documentId The ID of the document (e.g. contentId).
     * @param int $documentVersion The version of the document.
     */
    public function __construct(string $documentType, string $documentId, int $documentVersion)
    {
        $this->documentType = $documentType;
        $this->documentId = $documentId;
        $this->documentVersion = $documentVersion;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{documentType}', '{documentId}', '{documentVersion}'), array($this->documentType, $this->documentId, $this->documentVersion), '/v1/history/{documentType}/{documentId}/{documentVersion}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\DocumentHistoryGetVersionBadRequestException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetVersionUnauthorizedException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetVersionNotFoundException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetVersionMethodNotAllowedException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetVersionConflictException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetVersionTooManyRequestsException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetVersionInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\DocumentHistory
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\DocumentHistory', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\DocumentHistoryGetVersionBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\DocumentHistoryGetVersionUnauthorizedException();
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\DocumentHistoryGetVersionNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\DocumentHistoryGetVersionMethodNotAllowedException();
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\DocumentHistoryGetVersionConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\DocumentHistoryGetVersionTooManyRequestsException();
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\DocumentHistoryGetVersionInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}