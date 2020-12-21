<?php

namespace PicturePark\API\Endpoint;

class DocumentHistoryGetCurrent extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $documentType;
    protected $documentId;
    /**
     * Gets the current version of a document.
     *
     * @param string $documentType The type of the document (e.g. Content).
     * @param string $documentId The ID of the document (e.g. contentId).
     */
    public function __construct(string $documentType, string $documentId)
    {
        $this->documentType = $documentType;
        $this->documentId = $documentId;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{documentType}', '{documentId}'), array($this->documentType, $this->documentId), '/v1/history/{documentType}/{documentId}/current');
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
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\DocumentHistory', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\DocumentHistoryGetCurrentBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\DocumentHistoryGetCurrentUnauthorizedException();
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\DocumentHistoryGetCurrentNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\DocumentHistoryGetCurrentMethodNotAllowedException();
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\DocumentHistoryGetCurrentConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\DocumentHistoryGetCurrentTooManyRequestsException();
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\DocumentHistoryGetCurrentInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}