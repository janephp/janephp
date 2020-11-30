<?php

namespace PicturePark\API\Endpoint;

class IdentityProviderUpdate extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Identity provider has to be already created via UI
     *
     * @param string $id Identity provider ID.
     * @param \PicturePark\API\Model\IdentityProviderEditable $requestBody 
     */
    public function __construct(string $id, \PicturePark\API\Model\IdentityProviderEditable $requestBody)
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
        return str_replace(array('{id}'), array($this->id), '/v1/IdentityProviders/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\IdentityProviderEditable) {
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
     * @throws \PicturePark\API\Exception\IdentityProviderUpdateBadRequestException
     * @throws \PicturePark\API\Exception\IdentityProviderUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\IdentityProviderUpdateNotFoundException
     * @throws \PicturePark\API\Exception\IdentityProviderUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\IdentityProviderUpdateConflictException
     * @throws \PicturePark\API\Exception\IdentityProviderUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\IdentityProviderUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\IdentityProvider
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\IdentityProvider', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\IdentityProviderUpdateBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\IdentityProviderUpdateUnauthorizedException();
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\IdentityProviderUpdateNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\IdentityProviderUpdateMethodNotAllowedException();
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\IdentityProviderUpdateConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\IdentityProviderUpdateTooManyRequestsException();
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\IdentityProviderUpdateInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}