<?php

namespace PicturePark\API\Endpoint;

class ContentGetReferencesMany extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
     * Gets references (list items, contents, shares) to content documents defined by IDs.
     *
     * @param \PicturePark\API\Model\ContentManyReferencesRequest $requestBody 
     */
    public function __construct(\PicturePark\API\Model\ContentManyReferencesRequest $requestBody)
    {
        $this->body = $requestBody;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/v1/Contents/many/references/search';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\ContentManyReferencesRequest) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\ContentGetReferencesManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentGetReferencesManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentGetReferencesManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentGetReferencesManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentGetReferencesManyConflictException
     * @throws \PicturePark\API\Exception\ContentGetReferencesManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentGetReferencesManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentReferencesResult
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\ContentReferencesResult', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentGetReferencesManyBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ContentGetReferencesManyUnauthorizedException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentGetReferencesManyNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ContentGetReferencesManyMethodNotAllowedException();
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentGetReferencesManyConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ContentGetReferencesManyTooManyRequestsException();
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentGetReferencesManyInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}