<?php

namespace PicturePark\API\Endpoint;

class ContentGetDownloadLink extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $token;
    /**
     * 
     *
     * @param string $token Token
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{token}'), array($this->token), '/v1/Contents/downloadLink/{token}');
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
     * @throws \PicturePark\API\Exception\ContentGetDownloadLinkBadRequestException
     * @throws \PicturePark\API\Exception\ContentGetDownloadLinkUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentGetDownloadLinkNotFoundException
     * @throws \PicturePark\API\Exception\ContentGetDownloadLinkMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentGetDownloadLinkConflictException
     * @throws \PicturePark\API\Exception\ContentGetDownloadLinkTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentGetDownloadLinkInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\DownloadLink
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\DownloadLink', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentGetDownloadLinkBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ContentGetDownloadLinkUnauthorizedException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentGetDownloadLinkNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ContentGetDownloadLinkMethodNotAllowedException();
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentGetDownloadLinkConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ContentGetDownloadLinkTooManyRequestsException();
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentGetDownloadLinkInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}