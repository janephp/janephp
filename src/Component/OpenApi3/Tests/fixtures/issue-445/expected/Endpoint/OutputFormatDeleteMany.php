<?php

namespace PicturePark\API\Endpoint;

class OutputFormatDeleteMany extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
     * Deletes the output formats specified by the IDs. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param \PicturePark\API\Model\OutputFormatDeleteManyRequest $requestBody 
     */
    public function __construct(\PicturePark\API\Model\OutputFormatDeleteManyRequest $requestBody)
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
        return '/v1/OutputFormats/many/delete';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\OutputFormatDeleteManyRequest) {
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
     * @throws \PicturePark\API\Exception\OutputFormatDeleteManyBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteManyUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteManyNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteManyConflictException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\BusinessProcess', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\OutputFormatDeleteManyBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\OutputFormatDeleteManyUnauthorizedException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\OutputFormatDeleteManyNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\OutputFormatDeleteManyMethodNotAllowedException();
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\OutputFormatDeleteManyConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\OutputFormatDeleteManyTooManyRequestsException();
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\OutputFormatDeleteManyInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}