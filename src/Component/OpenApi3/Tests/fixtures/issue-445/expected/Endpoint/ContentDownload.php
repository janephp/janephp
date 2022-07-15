<?php

namespace PicturePark\API\Endpoint;

class ContentDownload extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $contentId;
    protected $outputFormatId;
    /**
     * Download a single content in a specific output format. To resize images on download specify target width &amp; height. To download only a portion of the file, specify the range parameter.
     *
     * @param string $contentId The content ID.
     * @param string $outputFormatId The output format ID.
     * @param array $queryParameters {
     *     @var int $width Optional width in pixels to resize image.
     *     @var int $height Optional height in pixels to resize image.
     * }
     * @param array $headerParameters {
     *     @var string $range The range of bytes to download (http range header): bytes={from}-{to} (e.g. bytes=0-100000).
     * }
     */
    public function __construct(string $contentId, string $outputFormatId, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->contentId = $contentId;
        $this->outputFormatId = $outputFormatId;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{contentId}', '{outputFormatId}'), array($this->contentId, $this->outputFormatId), '/v1/Contents/downloads/{contentId}/{outputFormatId}');
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
        $optionsResolver->addAllowedTypes('width', array('int', 'null'));
        $optionsResolver->addAllowedTypes('height', array('int', 'null'));
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('range'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('range', array('string', 'null'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\ContentDownloadBadRequestException
     * @throws \PicturePark\API\Exception\ContentDownloadUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentDownloadNotFoundException
     * @throws \PicturePark\API\Exception\ContentDownloadMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentDownloadConflictException
     * @throws \PicturePark\API\Exception\ContentDownloadTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentDownloadInternalServerErrorException
     * @throws \PicturePark\API\Exception\ContentDownloadPreconditionFailedException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentDownloadBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ContentDownloadUnauthorizedException();
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentDownloadNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ContentDownloadMethodNotAllowedException();
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentDownloadConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ContentDownloadTooManyRequestsException();
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentDownloadInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
        if (200 === $status) {
        }
        if (206 === $status) {
        }
        if (412 === $status) {
            throw new \PicturePark\API\Exception\ContentDownloadPreconditionFailedException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}