<?php

namespace PicturePark\API\Endpoint;

class TransferUploadFile extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $transferId;
    protected $requestId;
    /**
    * Uploads the specified chunk data.
               
    Use `Content-Type: application/octet-stream` for uploading chunked data.
    The chunk data should be contained in the body of your request.
               
    To upload a file, split it into chunks of reasonable size (accepted range is 1MB-100MB). The last chunk may be smaller than 1MB.
    *
    * @param string $transferId ID of transfer.
    * @param string $requestId Identifier of file.
    * @param null|string|resource|\Psr\Http\Message\StreamInterface $requestBody 
    * @param array $queryParameters {
    *     @var int $ChunkNumber Information about chunk.
    *     @var int $CurrentChunkSize Information about chunk.
    *     @var int $TotalSize Information about chunk.
    *     @var int $TotalChunks Information about chunk.
    * }
    */
    public function __construct(string $transferId, string $requestId, $requestBody = null, array $queryParameters = array())
    {
        $this->transferId = $transferId;
        $this->requestId = $requestId;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{transferId}', '{requestId}'), array($this->transferId, $this->requestId), '/v1/Transfers/{transferId}/files/{requestId}/upload');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if (is_string($this->body) or is_resource($this->body) or $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return array(array('Content-Type' => array('application/octet-stream')), $this->body);
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('ChunkNumber', 'CurrentChunkSize', 'TotalSize', 'TotalChunks'));
        $optionsResolver->setRequired(array('ChunkNumber', 'CurrentChunkSize', 'TotalSize', 'TotalChunks'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('ChunkNumber', array('int'));
        $optionsResolver->setAllowedTypes('CurrentChunkSize', array('int'));
        $optionsResolver->setAllowedTypes('TotalSize', array('int'));
        $optionsResolver->setAllowedTypes('TotalChunks', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\TransferUploadFileBadRequestException
     * @throws \PicturePark\API\Exception\TransferUploadFileUnauthorizedException
     * @throws \PicturePark\API\Exception\TransferUploadFileNotFoundException
     * @throws \PicturePark\API\Exception\TransferUploadFileMethodNotAllowedException
     * @throws \PicturePark\API\Exception\TransferUploadFileConflictException
     * @throws \PicturePark\API\Exception\TransferUploadFileTooManyRequestsException
     * @throws \PicturePark\API\Exception\TransferUploadFileInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\TransferUploadFileBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\TransferUploadFileUnauthorizedException();
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\TransferUploadFileNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\TransferUploadFileMethodNotAllowedException();
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\TransferUploadFileConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\TransferUploadFileTooManyRequestsException();
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\TransferUploadFileInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}