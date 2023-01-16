<?php

namespace PicturePark\API\Endpoint;

class ShareDownloadSingleContent extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $token;
    protected $contentId;
    protected $outputFormatId;
    protected $accept;
    /**
     * Download single content in a specific output format (or automatically determined format if none is specified). To resize images on download specify target width &amp; height. To download only a portion of the file, specify the range parameter.
     *
     * @param string $token Share token
     * @param string $contentId The content id
     * @param string $outputFormatId The output format id
     * @param array $queryParameters {
     *     @var int $width Optional width in pixels to resize image
     *     @var int $height Optional height in pixels to resize image
     * }
     * @param array $headerParameters {
     *     @var string $range The range of bytes to download (http range header): bytes={from}-{to} (e.g. bytes=0-100000)
     * }
     * @param array $accept Accept content header application/json|application/octet-stream
     */
    public function __construct(string $token, string $contentId, string $outputFormatId, array $queryParameters = array(), array $headerParameters = array(), array $accept = array())
    {
        $this->token = $token;
        $this->contentId = $contentId;
        $this->outputFormatId = $outputFormatId;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{token}', '{contentId}', '{outputFormatId}'), array($this->token, $this->contentId, $this->outputFormatId), '/v1/Shares/d/{token}/{contentId}/{outputFormatId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        if (empty($this->accept)) {
            return array('Accept' => array('application/json', 'application/octet-stream'));
        }
        return $this->accept;
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
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentBadRequestException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentUnauthorizedException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentNotFoundException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentConflictException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentTooManyRequestsException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentInternalServerErrorException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentPreconditionFailedException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ShareDownloadSingleContentBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ShareDownloadSingleContentUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ShareDownloadSingleContentNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ShareDownloadSingleContentMethodNotAllowedException($response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ShareDownloadSingleContentConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ShareDownloadSingleContentTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ShareDownloadSingleContentInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'), $response);
        }
        if (200 === $status) {
        }
        if (206 === $status) {
        }
        if (412 === $status) {
            throw new \PicturePark\API\Exception\ShareDownloadSingleContentPreconditionFailedException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}