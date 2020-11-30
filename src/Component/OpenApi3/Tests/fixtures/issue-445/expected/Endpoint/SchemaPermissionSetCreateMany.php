<?php

namespace PicturePark\API\Endpoint;

class SchemaPermissionSetCreateMany extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
     * Creates new schema permission sets based on supplied requests.
     *
     * @param \PicturePark\API\Model\SchemaPermissionSetCreateManyRequest $requestBody 
     */
    public function __construct(\PicturePark\API\Model\SchemaPermissionSetCreateManyRequest $requestBody)
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
        return '/v1/SchemaPermissionSets/many';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\SchemaPermissionSetCreateManyRequest) {
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
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateManyBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateManyNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateManyConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BulkResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\BulkResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetCreateManyBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetCreateManyUnauthorizedException();
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetCreateManyNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetCreateManyMethodNotAllowedException();
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetCreateManyConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetCreateManyTooManyRequestsException();
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetCreateManyInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}