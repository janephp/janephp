<?php

namespace PicturePark\API\Endpoint;

class ShareDownload extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $token;
    /**
     * 
     *
     * @param string $token Share token
     * @param array $queryParameters {
     *     @var int $width Optional width in pixels to resize image
     *     @var int $height Optional height in pixels to resize image
     * }
     * @param array $headerParameters {
     *     @var string $range The range of bytes to download (http range header): bytes={from}-{to} (e.g. bytes=0-100000)
     * }
     */
    public function __construct(string $token, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->token = $token;
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
        return str_replace(array('{token}'), array($this->token), '/v1/Shares/d/{token}');
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
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('range'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('range', array('string', 'null'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\ShareDownloadBadRequestException
     * @throws \PicturePark\API\Exception\ShareDownloadUnauthorizedException
     * @throws \PicturePark\API\Exception\ShareDownloadNotFoundException
     * @throws \PicturePark\API\Exception\ShareDownloadMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ShareDownloadConflictException
     * @throws \PicturePark\API\Exception\ShareDownloadTooManyRequestsException
     * @throws \PicturePark\API\Exception\ShareDownloadInternalServerErrorException
     * @throws \PicturePark\API\Exception\ShareDownloadPreconditionFailedException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ShareDownloadBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ShareDownloadUnauthorizedException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ShareDownloadNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ShareDownloadMethodNotAllowedException();
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ShareDownloadConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ShareDownloadTooManyRequestsException();
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ShareDownloadInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
        if (200 === $status) {
        }
        if (206 === $status) {
        }
        if (412 === $status) {
            throw new \PicturePark\API\Exception\ShareDownloadPreconditionFailedException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}