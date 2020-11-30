<?php

namespace PicturePark\API\Endpoint;

class ContentPermissionSetTransferOwnership extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Transfers ownership of content permission set to supplied user.
     *
     * @param string $id Content permission set ID.
     * @param \PicturePark\API\Model\PermissionSetOwnershipTransferRequest $requestBody 
     */
    public function __construct(string $id, \PicturePark\API\Model\PermissionSetOwnershipTransferRequest $requestBody)
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
        return str_replace(array('{id}'), array($this->id), '/v1/ContentPermissionSets/{id}/ownership');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\PermissionSetOwnershipTransferRequest) {
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
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipUnauthorizedException();
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipMethodNotAllowedException();
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipTooManyRequestsException();
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}