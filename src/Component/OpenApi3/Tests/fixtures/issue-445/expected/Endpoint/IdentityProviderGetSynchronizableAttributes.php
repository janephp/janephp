<?php

namespace PicturePark\API\Endpoint;

class IdentityProviderGetSynchronizableAttributes extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/v1/IdentityProviders/synchronizableAttributes';
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
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesBadRequestException
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesUnauthorizedException
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesNotFoundException
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesConflictException
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesTooManyRequestsException
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesUnauthorizedException();
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesMethodNotAllowedException();
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesTooManyRequestsException();
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}