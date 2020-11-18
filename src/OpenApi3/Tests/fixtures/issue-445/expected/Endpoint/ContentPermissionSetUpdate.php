<?php

namespace PicturePark\API\Endpoint;

class ContentPermissionSetUpdate extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Updates the content permission set specified by the ID and based on supplied request.
     *
     * @param string $id Content permission set ID.
     * @param \PicturePark\API\Model\ContentPermissionSetUpdateRequest $requestBody 
     */
    public function __construct(string $id, \PicturePark\API\Model\ContentPermissionSetUpdateRequest $requestBody)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/v1/ContentPermissionSets/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\ContentPermissionSetUpdateRequest) {
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
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentPermissionSetDetail
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\ContentPermissionSetDetail', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentPermissionSetUpdateBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ContentPermissionSetUpdateUnauthorizedException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentPermissionSetUpdateNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ContentPermissionSetUpdateMethodNotAllowedException();
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentPermissionSetUpdateConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ContentPermissionSetUpdateTooManyRequestsException();
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentPermissionSetUpdateInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}