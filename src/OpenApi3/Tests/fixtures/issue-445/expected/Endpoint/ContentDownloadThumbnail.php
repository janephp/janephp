<?php

namespace PicturePark\API\Endpoint;

class ContentDownloadThumbnail extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $id;
    protected $size;
    /**
     * Provides a lightweight endpoint to download content thumbnails.
     *
     * @param string $id The content ID.
     * @param string $size Thumbnail size. Either small, medium or large.
     * @param array $queryParameters {
     *     @var int $width Optional width in pixels to resize image.
     *     @var int $height Optional height in pixels to resize image.
     * }
     */
    public function __construct(string $id, string $size, array $queryParameters = array())
    {
        $this->id = $id;
        $this->size = $size;
        $this->queryParameters = $queryParameters;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{size}'), array($this->id, $this->size), '/v1/Contents/thumbnails/{id}/{size}');
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
        $optionsResolver->setDefined(array('width', 'height'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('width', array('int', 'null'));
        $optionsResolver->setAllowedTypes('height', array('int', 'null'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\ContentDownloadThumbnailBadRequestException
     * @throws \PicturePark\API\Exception\ContentDownloadThumbnailUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentDownloadThumbnailNotFoundException
     * @throws \PicturePark\API\Exception\ContentDownloadThumbnailMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentDownloadThumbnailConflictException
     * @throws \PicturePark\API\Exception\ContentDownloadThumbnailTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentDownloadThumbnailInternalServerErrorException
     * @throws \PicturePark\API\Exception\ContentDownloadThumbnailPreconditionFailedException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentDownloadThumbnailBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ContentDownloadThumbnailUnauthorizedException();
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentDownloadThumbnailNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ContentDownloadThumbnailMethodNotAllowedException();
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentDownloadThumbnailConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ContentDownloadThumbnailTooManyRequestsException();
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentDownloadThumbnailInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
        if (200 === $status) {
        }
        if (412 === $status) {
            throw new \PicturePark\API\Exception\ContentDownloadThumbnailPreconditionFailedException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}