<?php

namespace PicturePark\API\Endpoint;

class XmpMappingGetAvailableTargets extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/v1/XmpMappings/targets';
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
     * @throws \PicturePark\API\Exception\XmpMappingGetAvailableTargetsBadRequestException
     * @throws \PicturePark\API\Exception\XmpMappingGetAvailableTargetsUnauthorizedException
     * @throws \PicturePark\API\Exception\XmpMappingGetAvailableTargetsNotFoundException
     * @throws \PicturePark\API\Exception\XmpMappingGetAvailableTargetsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\XmpMappingGetAvailableTargetsConflictException
     * @throws \PicturePark\API\Exception\XmpMappingGetAvailableTargetsTooManyRequestsException
     * @throws \PicturePark\API\Exception\XmpMappingGetAvailableTargetsInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\XmpMappingTargets
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\XmpMappingTargets', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\XmpMappingGetAvailableTargetsBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\XmpMappingGetAvailableTargetsUnauthorizedException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\XmpMappingGetAvailableTargetsNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\XmpMappingGetAvailableTargetsMethodNotAllowedException();
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\XmpMappingGetAvailableTargetsConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\XmpMappingGetAvailableTargetsTooManyRequestsException();
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\XmpMappingGetAvailableTargetsInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}