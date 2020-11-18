<?php

namespace PicturePark\API\Endpoint;

class SchemaPermissionSetTransferOwnership extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Transfers ownership of schema permission set to supplied user.
     *
     * @param string $id Schema permission set ID.
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
        return str_replace(array('{id}'), array($this->id), '/v1/SchemaPermissionSets/{id}/ownership');
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
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipUnauthorizedException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipMethodNotAllowedException();
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipTooManyRequestsException();
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}