<?php

namespace PicturePark\API\Endpoint;

class TransferSearchFiles extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param \PicturePark\API\Model\FileTransferSearchRequest $requestBody 
     */
    public function __construct(\PicturePark\API\Model\FileTransferSearchRequest $requestBody)
    {
        $this->body = $requestBody;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/v1/Transfers/files/search';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\FileTransferSearchRequest) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\TransferSearchFilesBadRequestException
     * @throws \PicturePark\API\Exception\TransferSearchFilesUnauthorizedException
     * @throws \PicturePark\API\Exception\TransferSearchFilesNotFoundException
     * @throws \PicturePark\API\Exception\TransferSearchFilesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\TransferSearchFilesConflictException
     * @throws \PicturePark\API\Exception\TransferSearchFilesTooManyRequestsException
     * @throws \PicturePark\API\Exception\TransferSearchFilesInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\FileTransferSearchResult
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\FileTransferSearchResult', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\TransferSearchFilesBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\TransferSearchFilesUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\TransferSearchFilesNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\TransferSearchFilesMethodNotAllowedException($response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\TransferSearchFilesConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\TransferSearchFilesTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\TransferSearchFilesInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}