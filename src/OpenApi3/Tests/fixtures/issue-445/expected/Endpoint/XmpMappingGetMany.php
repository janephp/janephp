<?php

namespace PicturePark\API\Endpoint;

class XmpMappingGetMany extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
     * Gets multiple xmp mapping details by the xmp mapping IDs. Can fetch maximum of 100 xmp mappings at once.
     *
     * @param array $queryParameters {
     *     @var array $ids Xmp mapping IDs to get information about.
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/v1/XmpMappings';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('ids'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('ids', array('array', 'null'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\XmpMappingGetManyBadRequestException
     * @throws \PicturePark\API\Exception\XmpMappingGetManyUnauthorizedException
     * @throws \PicturePark\API\Exception\XmpMappingGetManyNotFoundException
     * @throws \PicturePark\API\Exception\XmpMappingGetManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\XmpMappingGetManyConflictException
     * @throws \PicturePark\API\Exception\XmpMappingGetManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\XmpMappingGetManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\XmpMappingEntry[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\XmpMappingEntry[]', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\XmpMappingGetManyBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\RequestSizeLimitExceededException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\XmpMappingGetManyUnauthorizedException();
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\XmpMappingGetManyNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\XmpMappingGetManyMethodNotAllowedException();
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\XmpMappingGetManyConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\XmpMappingGetManyTooManyRequestsException();
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\XmpMappingGetManyInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}