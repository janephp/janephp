<?php

namespace PicturePark\API\Endpoint;

class SchemaPermissionSetTransferOwnershipMany extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
     * Transfers ownership of multiple schema permission sets to respective supplied users.
     *
     * @param \PicturePark\API\Model\PermissionSetOwnershipTransferManyRequest $requestBody 
     */
    public function __construct(\PicturePark\API\Model\PermissionSetOwnershipTransferManyRequest $requestBody)
    {
        $this->body = $requestBody;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return '/v1/SchemaPermissionSets/many/ownership';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\PermissionSetOwnershipTransferManyRequest) {
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
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyUnauthorizedException();
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyMethodNotAllowedException();
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyTooManyRequestsException();
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}