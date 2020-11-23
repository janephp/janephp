<?php

namespace PicturePark\API\Endpoint;

class ContentPermissionSetUpdateMany extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
     * Updates the content permission sets specified by the IDs and based on supplied request.
     *
     * @param \PicturePark\API\Model\ContentPermissionSetUpdateManyRequest $requestBody 
     */
    public function __construct(\PicturePark\API\Model\ContentPermissionSetUpdateManyRequest $requestBody)
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
        return '/v1/ContentPermissionSets/many';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\ContentPermissionSetUpdateManyRequest) {
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
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateManyConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BulkResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\BulkResponse', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentPermissionSetUpdateManyBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ContentPermissionSetUpdateManyUnauthorizedException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentPermissionSetUpdateManyNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ContentPermissionSetUpdateManyMethodNotAllowedException();
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentPermissionSetUpdateManyConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ContentPermissionSetUpdateManyTooManyRequestsException();
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentPermissionSetUpdateManyInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}