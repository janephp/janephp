<?php

namespace PicturePark\API\Endpoint;

class ContentDeleteMany extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
    * Deletes multiple contents. The lifecycle is changed to Inactive. After a customer instance specified time (default 30 days), the content and all files will be hard deleted.
    The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param \PicturePark\API\Model\ContentDeleteManyRequest $requestBody 
    */
    public function __construct(\PicturePark\API\Model\ContentDeleteManyRequest $requestBody)
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
        return '/v1/Contents/many/delete';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\ContentDeleteManyRequest) {
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
     * @throws \PicturePark\API\Exception\ContentDeleteManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentDeleteManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentDeleteManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentDeleteManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentDeleteManyConflictException
     * @throws \PicturePark\API\Exception\ContentDeleteManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentDeleteManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\BusinessProcess', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentDeleteManyBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ContentDeleteManyUnauthorizedException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentDeleteManyNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ContentDeleteManyMethodNotAllowedException();
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentDeleteManyConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ContentDeleteManyTooManyRequestsException();
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentDeleteManyInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}