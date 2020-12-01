<?php

namespace PicturePark\API\Endpoint;

class UserGetByOwnerToken extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $tokenId;
    /**
     * 
     *
     * @param string $tokenId ID of the owner token.
     */
    public function __construct(string $tokenId)
    {
        $this->tokenId = $tokenId;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{tokenId}'), array($this->tokenId), '/v1/Users/owner/{tokenId}');
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
     * @throws \PicturePark\API\Exception\UserGetByOwnerTokenBadRequestException
     * @throws \PicturePark\API\Exception\UserGetByOwnerTokenUnauthorizedException
     * @throws \PicturePark\API\Exception\UserGetByOwnerTokenNotFoundException
     * @throws \PicturePark\API\Exception\UserGetByOwnerTokenMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserGetByOwnerTokenConflictException
     * @throws \PicturePark\API\Exception\UserGetByOwnerTokenTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserGetByOwnerTokenInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserDetail
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\UserDetail', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\UserGetByOwnerTokenBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\UserGetByOwnerTokenUnauthorizedException();
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\UserGetByOwnerTokenNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\UserGetByOwnerTokenMethodNotAllowedException();
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\UserGetByOwnerTokenConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\UserGetByOwnerTokenTooManyRequestsException();
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\UserGetByOwnerTokenInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}