<?php

namespace PicturePark\API\Endpoint;

class TransferPartialImport extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
    * This triggers the import of selected items in a Transfer, creating contents. All imported items will be enqueued for rendering.
               
    Wait for completion on the Business process ID that is returned to wait for import completion.
               
    Transfer will transition to state ImportDone if no files of the transfer remain for import.
    Transfer will transition to state TransferReady if any files of the transfer remain for import.
    *
    * @param string $id ID of transfer.
    * @param \PicturePark\API\Model\ImportTransferPartialRequest $requestBody 
    */
    public function __construct(string $id, \PicturePark\API\Model\ImportTransferPartialRequest $requestBody)
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
        return str_replace(array('{id}'), array($this->id), '/v1/Transfers/{id}/partialImport');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\ImportTransferPartialRequest) {
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
     * @throws \PicturePark\API\Exception\TransferPartialImportBadRequestException
     * @throws \PicturePark\API\Exception\TransferPartialImportUnauthorizedException
     * @throws \PicturePark\API\Exception\TransferPartialImportNotFoundException
     * @throws \PicturePark\API\Exception\TransferPartialImportMethodNotAllowedException
     * @throws \PicturePark\API\Exception\TransferPartialImportConflictException
     * @throws \PicturePark\API\Exception\TransferPartialImportTooManyRequestsException
     * @throws \PicturePark\API\Exception\TransferPartialImportInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\Transfer
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\Transfer', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\TransferPartialImportBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\TransferPartialImportUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\TransferPartialImportNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\TransferPartialImportMethodNotAllowedException($response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\TransferPartialImportConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\TransferPartialImportTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\TransferPartialImportInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}