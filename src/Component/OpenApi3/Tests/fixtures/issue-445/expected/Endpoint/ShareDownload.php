<?php

namespace PicturePark\API\Endpoint;

class ShareDownload extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $token;
    protected $accept;
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
     * @param array $accept Accept content header application/json|application/octet-stream
     */
    public function __construct(string $token, array $queryParameters = array(), array $headerParameters = array(), array $accept = array())
    {
        $this->token = $token;
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
        return str_replace(array('{token}'), array($this->token), '/v1/Shares/d/{token}');
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
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ShareDownloadBadRequestException($serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ShareDownloadUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ShareDownloadNotFoundException($serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ShareDownloadMethodNotAllowedException($response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ShareDownloadConflictException($serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ShareDownloadTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ShareDownloadInternalServerErrorException($serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\PictureparkException', 'json'), $response);
        }
        if (200 === $status) {
        }
        if (206 === $status) {
        }
        if (412 === $status) {
            throw new \PicturePark\API\Exception\ShareDownloadPreconditionFailedException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}