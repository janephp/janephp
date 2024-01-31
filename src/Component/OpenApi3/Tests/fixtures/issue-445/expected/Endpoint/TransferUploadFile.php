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
    public function __construct(string $transferId, string $requestId, $requestBody = null, array $queryParameters = [])
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
        return str_replace(['{transferId}', '{requestId}'], [$this->transferId, $this->requestId], '/v1/Transfers/{transferId}/files/{requestId}/upload');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if (is_string($this->body) or is_resource($this->body) or $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['application/octet-stream']], $this->body];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['ChunkNumber', 'CurrentChunkSize', 'TotalSize', 'TotalChunks']);
        $optionsResolver->setRequired(['ChunkNumber', 'CurrentChunkSize', 'TotalSize', 'TotalChunks']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('ChunkNumber', ['int']);
        $optionsResolver->addAllowedTypes('CurrentChunkSize', ['int']);
        $optionsResolver->addAllowedTypes('TotalSize', ['int']);
        $optionsResolver->addAllowedTypes('TotalChunks', ['int']);
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
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\TransferUploadFileBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\TransferUploadFileUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\TransferUploadFileNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\TransferUploadFileMethodNotAllowedException($response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\TransferUploadFileConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\TransferUploadFileTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\TransferUploadFileInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}