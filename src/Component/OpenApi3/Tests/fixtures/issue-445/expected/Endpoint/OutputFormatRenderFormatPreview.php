<?php

namespace PicturePark\API\Endpoint;

class OutputFormatRenderFormatPreview extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Request rendering of the given OutputFormat for a given content.
     *
     * @param \PicturePark\API\Model\OutputFormatRenderPreviewRequest $requestBody 
     * @param array $accept Accept content header application/octet-stream|application/json
     */
    public function __construct(\PicturePark\API\Model\OutputFormatRenderPreviewRequest $requestBody, array $accept = array())
    {
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/v1/OutputFormats/preview';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\OutputFormatRenderPreviewRequest) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        if (empty($this->accept)) {
            return array('Accept' => array('application/octet-stream', 'application/json'));
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewConflictException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewInternalServerErrorException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewPreconditionFailedException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\OutputFormatRenderFormatPreviewBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\OutputFormatRenderFormatPreviewUnauthorizedException();
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\OutputFormatRenderFormatPreviewNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\OutputFormatRenderFormatPreviewMethodNotAllowedException();
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\OutputFormatRenderFormatPreviewConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\OutputFormatRenderFormatPreviewTooManyRequestsException();
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\OutputFormatRenderFormatPreviewInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
        if (206 === $status) {
        }
        if (412 === $status) {
            throw new \PicturePark\API\Exception\OutputFormatRenderFormatPreviewPreconditionFailedException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}