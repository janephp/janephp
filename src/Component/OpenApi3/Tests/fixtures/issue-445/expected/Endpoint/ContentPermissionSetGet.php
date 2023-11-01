<?php

namespace PicturePark\API\Endpoint;

class ContentPermissionSetGet extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Gets the content permission set detail information by the content permission set ID.
     *
     * @param string $id Content permission set ID.
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{id}'], [$this->id], '/v1/ContentPermissionSets/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentPermissionSetDetail
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\ContentPermissionSetDetail', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentPermissionSetGetBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ContentPermissionSetGetUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentPermissionSetGetNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ContentPermissionSetGetMethodNotAllowedException($response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentPermissionSetGetConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ContentPermissionSetGetTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentPermissionSetGetInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}