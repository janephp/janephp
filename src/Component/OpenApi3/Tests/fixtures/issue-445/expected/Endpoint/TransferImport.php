<?php

namespace PicturePark\API\Endpoint;

class TransferImport extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
    * This triggers the import of a Transfer, creating Contents. All items in the Transfer will be enqueued for rendering.
               
    Wait for completion on the Business process ID that is returned to wait for import completion.
    Note: Before attempting to import a Transfer, the transfer has to be in the TransferReady state.
    *
    * @param string $id ID of transfer.
    * @param \PicturePark\API\Model\ImportTransferRequest $requestBody 
    */
    public function __construct(string $id, \PicturePark\API\Model\ImportTransferRequest $requestBody)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/v1/Transfers/{id}/import');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\ImportTransferRequest) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\TransferImportBadRequestException
     * @throws \PicturePark\API\Exception\TransferImportUnauthorizedException
     * @throws \PicturePark\API\Exception\TransferImportNotFoundException
     * @throws \PicturePark\API\Exception\TransferImportMethodNotAllowedException
     * @throws \PicturePark\API\Exception\TransferImportConflictException
     * @throws \PicturePark\API\Exception\TransferImportTooManyRequestsException
     * @throws \PicturePark\API\Exception\TransferImportInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\Transfer
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\Transfer', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\TransferImportBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\TransferImportUnauthorizedException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\TransferImportNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\TransferImportMethodNotAllowedException();
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\TransferImportConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\TransferImportTooManyRequestsException();
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\TransferImportInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}