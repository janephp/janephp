<?php

namespace PicturePark\API\Endpoint;

class DocumentHistoryCompareWithCurrent extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $documentType;
    protected $documentId;
    /**
     * Compare the current version of a document with the requested version and get the differences.
     *
     * @param string $documentType The type of the document (e.g. Content).
     * @param string $documentId The ID of the document (e.g. contentId).
     * @param array $queryParameters {
     *     @var int $version The version of the document to compare with.
     * }
     */
    public function __construct(string $documentType, string $documentId, array $queryParameters = array())
    {
        $this->documentType = $documentType;
        $this->documentId = $documentId;
        $this->queryParameters = $queryParameters;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{documentType}', '{documentId}'), array($this->documentType, $this->documentId), '/v1/history/{documentType}/{documentId}/current/compare');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('version'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('version', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentBadRequestException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentUnauthorizedException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentNotFoundException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentMethodNotAllowedException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentConflictException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentTooManyRequestsException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\DocumentHistoryDifference
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\DocumentHistoryDifference', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentUnauthorizedException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentMethodNotAllowedException();
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentTooManyRequestsException();
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}